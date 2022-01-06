<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $guarded = [];
//    protected static function boot()
//    {
//        parent::boot();
//
//        static::created(function ($user) {
//                $user->applications()->create([
//                    'status' => 'Pending',
//                ]);
//
//        });
//
//    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
