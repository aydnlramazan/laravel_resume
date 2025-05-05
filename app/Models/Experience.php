<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Experience extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_start',
        'job_end',
        'company_name',
        'job_description'
    ];
}
