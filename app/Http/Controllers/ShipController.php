<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ship;
use App\Models\Modell;

class ShipController extends Controller
{   
    protected $className = 'App\Models\Ship';
    protected $entityName = 'ships';
    protected $fields = ['name', 'brt','deepness','decks','ps','propeller','patrol','modell_id'];
    protected $validation = [
        'name' => 'required',
        'brt' => 'required|numeric',
        'deepness' => 'required',
        'decks' => 'required',
        'ps' => 'required',
        'propeller' => 'required',
        'patrol' => 'required',
        'modell_id'
    ];
      
    public function getAdd(){


        
          $modells = Modell::orderBy('name')->get()->pluck('name', 'id');
            return view('ships.add')->with('modells', $modells);
      }
      public function getEdit($id){
        $ship = Ship::find($id);
        
        if ($ship){
        
        $modells = Modell::orderBy('name')->get()->pluck('name', 'id');
            
            return view('ships.edit')->with('entity',$ship)->with('modells', $modells);
        } 
        else{
            return redirect('ships');
        }
    }

    //entity = ships
    /*public function postSave(Request $req)
    {
        $req->validate($this->validation);
        $class = $this->className;
        $entity = new $class();
        foreach($this->fields as $field)
    {
        if ($$entity->$field == 'hersteller'){
            
        } else {
            $entity->$field = $req->input($field);
        }
        
        $entity->save();
        return redirect($this->entityName.'/index');
    }*/

}

//Aber one to Many muss ich eine Tabellenspalte erstellen um hersteller_id abzuspeichern?

// hinzufügen mit laravel mthode dazu ist, detach und attach 
// sont nur die ID übergeben die im req eingeschpeicher ist
// aber one to many 