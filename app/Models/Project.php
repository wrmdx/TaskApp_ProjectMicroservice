<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['id', 'name', 'description', 'created_at', 'due_date', 'status', 'created_by', 'updated_by'];

    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;
}
