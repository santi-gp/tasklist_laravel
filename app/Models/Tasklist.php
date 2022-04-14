<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasklist extends Model
{
    use HasFactory;
    protected $table = 'tasklists';
    protected $fillable = [
        'name',
        'description'
    ];
}
