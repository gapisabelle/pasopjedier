<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KindOfPet extends Model
{
    protected $table = "kind_of_pet";

    public function allPet(){
        return $this->hasMany('\App\Models\Pet', "soort", "soort");
    }
}
