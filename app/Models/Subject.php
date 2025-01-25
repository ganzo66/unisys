<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subject extends Model
{
    protected $table = 'subjects';
    use HasFactory;
    //
    protected $fillable= [
    'subject_name',
];
}
