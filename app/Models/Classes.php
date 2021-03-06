<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $table = 'classes';
    const tingkat = ['I', 'II', 'III', 'IV', 'V', 'VI','VII','VIII', 'IX'];
    public function teacher_course()
    {
        return $this->hasMany(TeacherCourse::class, 'class_id', 'id');
    }
    public function student_class()
    {
        return $this->hasMany(StudentClass::class, 'class_id', 'id');
    }
    public function wali_kelas()
    {
        return $this->hasMany(WaliKelas::class, 'class_id', 'id');
    }
}
