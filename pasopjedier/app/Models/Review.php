<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    protected $table = 'review_on_user';
    public $timestamps = false;
    use HasFactory;
}
