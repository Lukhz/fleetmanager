<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hersteller;

class HerstellerController extends Controller
{   
    protected $className = 'App\Models\Hersteller';
    protected $entityName = 'herstellers';
    protected $fields = ['name'];
    protected $validation = [
        'name' => 'required',
    ];
    //
}
