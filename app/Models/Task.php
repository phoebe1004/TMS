<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = 'tasks';
    protected $fillable = [
        'done',
        'published',
        'company_name',
        'module',
        'task',
        'assigned_to',
        'start_date',
        'end_date',
        'progress',
        'q_a',
        'image'
    ];
}
