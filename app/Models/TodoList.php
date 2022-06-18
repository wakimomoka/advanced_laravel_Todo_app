<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todolist extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    protected $fillable = ['content', 'created_at', 'updated_at'];
}
