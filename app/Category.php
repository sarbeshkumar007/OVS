<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Https\Controllers\Relation;

class Category extends Model
{
    public function products()
    {
        return $this->hasMany(App\product::class,'category_id','id');
    }
}
