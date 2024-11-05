<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class applications extends Model
{
    use HasFactory; 
 
    protected $table = 'applications'; 
 
    protected $fillable = [ 
        'job_title',
        'company',
        'location',
        'description',
        'salary' ,
    ]; 
} 
