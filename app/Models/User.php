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
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'type',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($user) {
            if ($user->type == 'student')
            {
                $user->profile()->create([
                    'title' => $user->username,
                ]);
            }
            elseif ($user->type == 'university')
            {
                $user->universityprofile()->create([
                    'university_name' => $user->username,
                ]);
            }

        });

    }

    public function posts()
    {
        return $this->hasMany(Post::class)->orderBy('created_at','DESC');
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    public function universityprofile()
    {
        return $this->hasOne(UniversityProfile::class);
    }
    public function courses()
    {
        return $this->hasMany(Course::class)->orderBy('title','ASC');
    }
    public function marks()
    {
        return $this->hasMany(Marks::class)->orderBy('exam','ASC');
    }
    public function events()
    {
        return $this->hasMany(Event::class)->orderBy('date','ASC');
    }
    public function applications()
    {
        return $this->hasMany(Application::class)->orderBy('created_at','ASC');
    }
}
