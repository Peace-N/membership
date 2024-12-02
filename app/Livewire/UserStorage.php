<?php

namespace App\Livewire;

use App\Services\Storage\Minio;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class UserStorage extends Component
{

    public $bucket;

    public function render()
    {
        // Instantiate an Minio client.
//        $minioClient = Minio::getInstance();
        //$res = $minioClient->listBuckets();
//        $this->bucket = $minioClient->getBucket('wurk');
        return view('livewire.user-storage');
    }
}
