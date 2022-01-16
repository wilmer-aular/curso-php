<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    public function mostrarPersons(){
        $people =  Person::all();
       
        return view('persons', compact('people') ) ;
    }
}