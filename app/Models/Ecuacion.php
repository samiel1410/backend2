<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ecuacion extends Model
{
    use HasFactory;
    protected $fillable = [
        'Operacion',
        'x1',
        'x2'
      ];



}