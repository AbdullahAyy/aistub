<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Ai extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function apiTokens()
    {
        return $this->hasMany(ApiToken::class);
    }
}
