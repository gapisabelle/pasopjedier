<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    protected $table = 'response_on_pet';
    public $timestamps = false;
    use HasFactory;
}
