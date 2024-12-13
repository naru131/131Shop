<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Hasfactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use Hasfactory;
   use SoftDeletes;
   protected $table = 'payments';
   protected $fillable = [
    'name',
    'logo'
   ];
}
