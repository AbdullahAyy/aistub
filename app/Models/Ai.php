<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Ai extends Model
{
    protected $table = 'ais';

    protected $fillable = [
      'user_id',
      'name',
      'slug',
      'language',
      'tone',
      'prefix_prompt',
      'sample_json',
      'is_active'
    ];

    public $timestamps = true;

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
