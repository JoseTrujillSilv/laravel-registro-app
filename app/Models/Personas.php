<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = ['dni','name','last_name','edad','num_cuenta'];
}
