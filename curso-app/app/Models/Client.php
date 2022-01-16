<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //la variable es opcional ya que laravel buscara en base de datos el plural del nombre de la clase como una tabla.
    protected $table = 'clients';
    
}