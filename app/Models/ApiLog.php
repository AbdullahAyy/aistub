<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ApiLog extends Model
{
    public function apiToken()
    {
        return $this->belongsTo(ApiToken::class, 'token_id');
    }
}
