<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;

    protected $members;
    protected $fillable=[
        'name',
        'birthday',
        'age',
        'address',
        'phone',
        'email',
        'gender',
        'plan',
        'height',
        'weight'
    ]; 
}
