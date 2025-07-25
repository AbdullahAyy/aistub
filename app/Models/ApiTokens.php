<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ApiTokens extends Model
{
    public function ai()
    {
        return $this->belongsTo(Ai::class);
    }

    public function apiLogs()
    {
        return $this->hasMany(ApiLog::class);
    }
}
