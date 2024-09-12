<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Log;

class Feature extends Model
{
    protected $fillable = ['title', 'description', 'video_key'];

    public function getVideoUrl()
    {
        $path = "videos/{$this->video_key}";
        return Storage::url($path);
    }
}