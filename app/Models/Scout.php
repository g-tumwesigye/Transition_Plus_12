<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scout extends Model
{
    use HasFactory;
    protected $primaryKey = 'scout_id';
    protected $guarded = [];
}
