<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_name',
        'job_role',
        'logo',
        'location',
        'about_company',
        'open_position',
    ];
}
