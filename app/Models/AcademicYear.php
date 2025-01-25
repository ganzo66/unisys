<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class AcademicYear extends Model
{
    protected $table = 'academic_years';
    use HasFactory;
    //
    protected $fillable = [
        'year_name',
        'year_name_en',
        'start_date',
        'end_date',
    ];
}
