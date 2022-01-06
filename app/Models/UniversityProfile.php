<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class UniversityProfile extends Model
{
    use HasFactory;

    public function profileImage()
    {
        $imagepath = ($this->image) ?  $this->image : '/profile/JKEAe0xMk53fticf6JqINFqAoEMU06oBTK0pjJW4.png';
        return '/storage/'.$imagepath;
    }
    public function bgprofileImage()
    {
        $bgimagepath = ($this->bgimage) ?  $this->bgimage : 'profile/JqfmSjzoQBg9bl3c6aElfgJevaCFrXsQzjPYMIYv.webp';
        return '/storage/'.$bgimagepath;
    }

    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
