<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function subCategorie(){
       return $this->hasMany('App\Categorie', 'parent');
    }
}
