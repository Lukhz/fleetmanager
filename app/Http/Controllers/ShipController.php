<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ship;

class ShipController extends Controller
{   
    protected $className = 'App\Models\Ship';
    protected $entityName = 'ships';
    protected $fields = ['name', 'brt','deepness','decks','ps','propeller','patrol'];
    protected $validation = [
        'name' => 'required',
        'brt' => 'required|numeric',
        'deepness' => 'required',
        'decks' => 'required',
        'ps' => 'required',
        'propeller' => 'required',
        'patrol' => 'required'
    ];
    //
}
