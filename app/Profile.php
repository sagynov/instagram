<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function getImage() 
    {
        $imagePath = ($this->image) ? '/storage/' . $this->image : '/storage/profile/ukANAWwvbQ6rIMAO1zDmgC3r3WG23nr7KlNWDgHI.jpeg';
        return $imagePath;
    }
    public function followers() 
    {
        return $this->belongsToMany(User::class);
    }
    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
