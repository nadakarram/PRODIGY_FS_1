<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class request extends Model
{

    use HasFactory;
    protected $fillable=["desc","location_id","feild_id","user_id","adress","time"];
}
