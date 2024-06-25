<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeProject extends Model
{
    use HasFactory;
    protected $table = "employee_projects";
    protected $fillable = ['user_id','project_id','payment','month','mode'];
}
