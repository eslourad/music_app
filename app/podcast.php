<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class podcast extends Model
{
    protected $fillable = [
        'title', 'host', 'thumbnail', 'description', 'file'
    ];
}
