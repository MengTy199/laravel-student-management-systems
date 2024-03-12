<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $primarykey ='id';
    protected $dates = ['date_of_birth'];
    protected $fillable = ['name', 'address', 'gender','age', 'phone','date_of_birth'];

    use HasFactory;
}
