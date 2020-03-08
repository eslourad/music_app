<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class music_playlist extends Model
{
    protected $table = "music_playlist";
    protected $fillable = [
        'music_id', 'playlist_id'. 'position'
    ];
}
