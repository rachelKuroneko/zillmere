<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forms extends Model
{
    protected $fillable = ["name", "email", "phone", "bfHear", "comments"];
}
