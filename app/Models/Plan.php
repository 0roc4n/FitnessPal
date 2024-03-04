<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $plans;

    protected $fillable = [
        'plan_name',
        'plan_desc',
        'validity',
        'fee'
    ];
}
