<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $table = 'employees';
    public $fillable = [
        'name',
        'lastname',
        'birthdate',
        'personal_id',
        'salary'
    ];
}
