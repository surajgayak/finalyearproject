<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Getrent extends Model
{
    use HasFactory;
    protected $table="rentvehicles";
    protected $primarykey="id";
}