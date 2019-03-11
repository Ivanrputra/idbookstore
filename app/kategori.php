<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
 protected $table = 'kategori';

 public function book()
    {
        return $this->belongsTo('App\book','id','book_id');
    }
}
