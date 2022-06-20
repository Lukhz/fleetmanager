<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Hersteller extends Model
{
    public function modell()
    {
        return $this->hasMany('App\Models\Modell');
    }
}