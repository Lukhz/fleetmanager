<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{

    //ein schiff hat ein Hersteller
    public function hersteller()
    {
        return $this->belongsTo('App\Models\Hersteller');
    }
    //ein schiff hat ein typ
    public function modell()
    {
        return $this->belongsTo('App\Models\Modell');
    }
}