<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
protected $fillable = [
    'professional_id',
    'institution',
    'degree',
    'field_of_study',
    'start_date',
    'end_date',
    'is_current',
];
}
