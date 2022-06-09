<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modell;

class ModellController extends Controller
{   
    protected $className = 'App\Models\Modell';
    protected $entityName = 'modells';
    protected $fields = ['name'];
    protected $validation = [
        'name' => 'required',
    ];
    //
}
