<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Model
{
    protected $table = 'teachers';
    use HasFactory;
    //
    protected $fillable = [
        'ovog',
        'name',
        'register',
        'nas',
        'huis',
        'yas_undes',
        'graduated_school',
        'graduated_university',
        'profession',
        'academic_degree',
        'foreign_language1',
        'foreign_language2',
        'work_experience1',
        'work_experience2',
        'work_experience3',
        'work_experience4',
        'work_experience5',
        'shagnal1',
        'shagnal2',
        'phone_number1',
        'phone_number2',
        'home_address',
        'department_code',
        'role_id',
        'teacher_email',
        'teacher_email_password'

    ];

}

// class Teacher extends Authenticatable
// {




//     protected $table = 'teachers';

//     protected $fillable = [
//         'teacher_email',
//         'teacher_email_password', // Add other fillable fields here
//     ];

//     /**
//      * Get the password for the teacher.
//      */
//     public function getAuthPassword()
//     {
//         return $this->teacher_email_password; // Map to your column
//     }
// }



























































































