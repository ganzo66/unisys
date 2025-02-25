<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    protected $table = 'departments';
    use HasFactory;
    //

    protected $fillable = [
        'department_name',
        'department_name_en',
        'code'
    ];
}
