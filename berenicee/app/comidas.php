<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comidas extends Model
{
    public $fillable = ["nombre", "cantidad"];
}
