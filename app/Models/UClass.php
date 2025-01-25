<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UClass extends Model
{
    protected $table = 'classes';
    use HasFactory;

    protected $fillable = [
        'id',
        'class_name',
        'class_code',

    ];
}
