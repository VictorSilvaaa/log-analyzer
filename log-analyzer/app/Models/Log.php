<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;
    protected $fillable = [
        'remote_host',
        'remote_logname',
        'remote_user',
        'request_datetime',
        'request_method',
        'request_URI',
        'request_protocol',
        'response_code',
        'bytes_sent',
        'referer',
        'user_agent'
    ];
}
