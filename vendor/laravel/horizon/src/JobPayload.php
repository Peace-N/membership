<?php

namespace Laravel\Horizon;

use ArrayAccess;
use Illuminate\Broadcasting\BroadcastEvent;
use Illuminate\Events\CallQueuedListener;
use Illuminate\Mail\SendQueuedMailable;
use Illuminate\Notifications\SendQueuedNotifications;
use Illuminate\Support\Arr;
use Laravel\Horizon\Contracts\Silenced;

class JobPayload implements ArrayAccess
{
    /**
     * The raw payload string.
     *
     * @var string
     */
    public $value;

    /**
     * The decoded payload array.
     *
     * @var array
     */
    public $decoded;

    /**
     * Create a new raw job payload instance.
     *
     * @param  string  $value
     * @return void
     */
    public function __construct($value)
    {
        $this->value = $value;

        $this->decoded = json_decode($value, true);
    }

    /**
     * Get the job ID from the payload.
     *
     * @return string
     */
    public function id()
    {
        return $this->decoded['uuid'] ?? $this->decoded['id'];
    }

    /**
     * Get the job tags from the payload.
     *
     * @return array
     */
    public function tags()
    {
        return Arr::get($this->decoded, 'tags', []);
    }

    /**
     * Determine if the job is a retry of a previous job.
     *
     * @return bool
     */
    public function isRetry()
    {
        return isset($this->decoded['retry_of']);
    }

    /**
     * Get the ID of the job this job is a retry of.
     *
     * @return string|null
     */
    public function retryOf()
    {
        return $this->decoded['retry_of'] ?? null;
    }

    /**
     * Determine if the job has been silenced.
     *
     * @return bool
     */
    public function isSilenced()
    {
        return $this->decoded['silenced'] ?? false;
    }

    /**
     * Prepare the payload for storage on the queue by adding tags, etc.
     *
     * @param  mixed  $job
     * @return $this
     */
    public function prepare($job)
    {
        return $this->set([
            'type' => $this->determineType($job),
            'tags' => $this->determineTags($job),
            'silenced' => $this->shouldBeSilenced($job),
            'pushedAt' => str_replace(',', '.', microtime(true)),
        ]);
    }

    /**
     * Get the "type" of job being queued.
     *
     * @param  mixed  $job
     * @return string
     */
    protected function determineType($job)
    {
        return match (true) {
            $job instanceof BroadcastEvent => 'broadcast',
            $job instanceof CallQueuedListener => 'event',
            $job instanceof SendQueuedMailable => 'mail',
            $job instanceof SendQueuedNotifications => 'notification',
            default => 'job',
        };
    }

    /**
     * Get the appropriate tags for the job.
     *
     * @param  mixed  $job
     * @return array
     */
    protected function determineTags($job)
    {
        return array_merge(
            $this->decoded['tags'] ?? [],
            ! $job || is_string($job) ? [] : Tags::for($job)
        );
    }

    /**
     * Determine if the underlying job class should be silenced.
     *
     * @param  mixed  $job
     * @return bool
     */
    protected function shouldBeSilenced($job)
    {
        if (! $job) {
            return false;
        }

        $underlyingJob = $this->underlyingJob($job);

        $jobClass = is_string($underlyingJob) ? $underlyingJob : get_class($underlyingJob);

        return in_array($jobClass, config('horizon.silenced', [])) ||
               is_a($jobClass, Silenced::class, true);
    }

    /**
     * Get the underlying queued job.
     *
     * @param  mixed  $job
     * @return mixed
     */
    protected function underlyingJob($job)
    {
        return match (true) {
            $job instanceof BroadcastEvent => $job->event,
            $job instanceof CallQueuedListener => $job->class,
            $job instanceof SendQueuedMailable => $job->mailable,
            $job instanceof SendQueuedNotifications => $job->notification,
            default => $job,
        };
    }

    /**
     * Set the given key / value pairs on the payload.
     *
     * @param  array  $values
     * @return $this
     */
    public function set(array $values)
    {
        $this->decoded = array_merge($this->decoded, $values);

        $this->value = json_encode($this->decoded);

        return $this;
    }

    /**
     * Get the "command name" for the job.
     *
     * @return string
     */
    public function commandName()
    {
        return Arr::get($this->decoded, 'data.commandName');
    }

    /**
     * Get the "display name" for the job.
     *
     * @return string
     */
    public function displayName()
    {
        return Arr::get($this->decoded, 'displayName');
    }

    /**
     * Determine if the given offset exists.
     *
     * @param  string  $offset
     * @return bool
     */
    public function offsetExists($offset): bool
    {
        return array_key_exists($offset, $this->decoded);
    }

    /**
     * Get the value at the current offset.
     *
     * @param  string  $offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->decoded[$offset];
    }

    /**
     * Set the value at the current offset.
     *
     * @param  string  $offset
     * @param  mixed  $value
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        $this->decoded[$offset] = $value;
    }

    /**
     * Unset the value at the current offset.
     *
     * @param  string  $offset
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->decoded[$offset]);
    }
}
