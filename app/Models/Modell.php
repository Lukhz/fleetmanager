<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Modell extends Model
{
    public function ship()
    {
        return $this->hasMany('App\Models\Ship');
    }
}