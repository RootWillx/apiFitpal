<?php

namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'age',
        'gender',
        'high',
        'weight'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
    public function schedules()
    {
        return $this->belongsToMany(Schedule::class,'schedules_users');
    }
}
