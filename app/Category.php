<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Todo;

class Category extends Model
{
    //
    public function todos(){
        return $this->hasMany(Todo::class);
    }
}
