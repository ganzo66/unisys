<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\UClass;


class ClassSubject extends Model
{
    use HasFactory;

    protected $table = 'class_subjects';

    protected $fillable = ['class_id', 'subject_id', 'academic_year_id'];

    public function class()
    {
        return $this->belongsTo(UClass::class, 'class_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    public function academicYear()
    {
        return $this->belongsTo(AcademicYear::class, 'academic_year_id');
    }
}
