<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role', // Added 'role' based on your ERD
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Relationships

    // User has many ModuleProgress
    public function moduleProgresses()
    {
        return $this->hasMany(ModuleProgress::class);
    }

    // User has many ChapterProgress
    public function chapterProgresses()
    {
        return $this->hasMany(ChapterProgress::class);
    }

    // User has many QuizAttempts
    public function quizAttempts()
    {
        return $this->hasMany(QuizAttempt::class);
    }

    // User has many Certificates
    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }

    // Helper method for roles
    public function hasRole($role)
    {
        return $this->role === $role;
    }
}