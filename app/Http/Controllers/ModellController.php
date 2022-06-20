<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modell;
use App\Models\Hersteller;

class ModellController extends Controller
{   
    protected $className = 'App\Models\Modell';
    protected $entityName = 'modells';
    protected $fields = ['name','hersteller_id'];
    protected $validation = [
        'name' => 'required',
        'hersteller_id' => 'required'
    ];
    //
    public function getAdd(){
        $herstellers = Hersteller::orderBy('name')->get()->pluck('name', 'id');
          return view('modells.add')->with('herstellers', $herstellers);
    }
    public function getEdit($id){
      $modell = Modell::find($id);
      
      if ($modell){
      
          $herstellers = Hersteller::orderBy('name')->get()->pluck('name', 'id');

          
          return view('modells.edit')->with('entity',$modell)->with('herstellers', $herstellers);
      } 
      else{
          return redirect('modells');
      }
  }
}
