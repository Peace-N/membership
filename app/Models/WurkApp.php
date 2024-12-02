<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WurkApp extends Model
{
    use HasFactory;

    protected $table = 'wurk_apps';

    protected $fillable = [
        'url',
        'icon',
        'image',
        'name',
    ];

}
