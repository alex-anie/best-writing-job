<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    /** @use HasFactory<\Database\Factories\WriterFactory> */
    use HasFactory;

    protected $fillable = [
        'writer_name',
        'logo',
        'bio',
        'job_type',
        'experience',
        'job_category',
        'job_role',
        'location',
        'email',
        'salary'
    ];
}
