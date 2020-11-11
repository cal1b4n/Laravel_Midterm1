<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public $table = 'companies';
    public $fillabl = [
        'name',
        'code',
        'address',
        'city',
        'country'
    ];
}
