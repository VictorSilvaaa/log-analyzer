<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogEntry extends Model
{
    protected $fillable = [
        'ip',
        'request_datetime',
        'request_method',
        'resource',
        'referer',
        'user_agent',
        'response_code',
    ];

    public static function saveLogEntry($data)
    {
        return self::create($data);
    }
}
