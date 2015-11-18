<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servers extends Model
{
    protected $fillable = [
        'server_name',
        'ssh_key',
        'root',
        'comments'
    ];

}
