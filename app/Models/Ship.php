<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{  
    public $fillable = ['modell_id'];
    //ein schiff hat ein typ
    public function modell()
    {
        return $this->belongsTo('App\Models\Modell','modell_id');
    }
}