<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_role', 
        'company_name', 
        'job_type', 
        'experience', 
        'location', 
        'job_category', 
        'logo', 
        'job_description',
        'salary'
    ];

    // Optional extra helpers
    public function getFormattedSalaryArribute(): string
    {
        return '₦' . number_format((int) filter_var($this->salary, FILTER_SANITIZE_NUMBER_INT)) . ' / month';
    }

    public function scopeCategory($query, string $category)
    {
        return $query->where('job_category', $category);
    }

    public function scopeRemote($query){
        return $query->where('job_type', 'remote');
    }
}
