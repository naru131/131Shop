<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Hasfactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
   use Hasfactory;
   use SoftDeletes;
   protected $table = 'categories';
   protected $fillable = [
    'name',
    'image'
   ];
}
