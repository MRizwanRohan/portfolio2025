<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experiences extends Model
{
protected $fillable = [
    'professional_id',
    'company',
    'position',
    'description',
    'start_date',
    'end_date',
    'is_current',
];
}
