<?php

namespace App\Models;

use \Database\Factories\todosMFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todosM extends Model
{
    use HasFactory;

   protected $table = 'todos_tables';
   protected $attributes = [
    'completed' => false,
    ];

}
