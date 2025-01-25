<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

// class Student extends Model
// {
//     protected $table = 'students';
//     use HasFactory;
//     //

//     protected $fillable = [
//         'ovog',
//         'name',
//         'register',
//         'nas',
//         'huis',
//         'yas_undes',
//         'graduated_school',
//         'bosgo_onoo1',
//         'bosgo_onoo2',
//         'medical_score',
//         'phone_number',
//         'address',
//         'songoson_angi',
//         'admission_year',
//         'student_email',
//         'student_email_password'
//     ];
// }
class Student extends Authenticatable
{
    protected $fillable = ['name', 'email', 'password'];
    protected $hidden = ['password', 'remember_token'];
}
