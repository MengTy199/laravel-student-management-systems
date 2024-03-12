<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    protected $primarykey ='id';
    protected $fillable = ['name', 'subject', 'duration', 'teacher_id'];

    use HasFactory;

    public function duration(){
        return $this->duration. " Months";
    }
    public function teacher(){
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
}
