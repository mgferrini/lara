<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	public function children() {
	  return subCategory();
	}
  public function subCategory() {
    return $this->hasMany(Category::class, 'parent');
  }

  public function parent()
  {
    return $this->belongsTo(Category::class, 'parent_id');
  }
  
  public function products(){
  	return $this->hasMany(Product::class, 'categorie_id');
  }
}
