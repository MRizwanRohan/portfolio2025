<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
protected $fillable = [
    'first_name',
    'last_name',
    'display_name',
    'bio',
    'profile_image_url',
    'portfolio_url',
];

public function education()
{
    return $this->hasMany(Education::class);
}


}
