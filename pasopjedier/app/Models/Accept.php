<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accept extends Model
{
    protected $table = 'accept_on_pet';
    public $timestamps = false;
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class, 'owner');
    }
}
