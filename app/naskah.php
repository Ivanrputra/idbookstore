<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class naskah extends Model
{
    //
    protected $table = 'naskah';

    public function author()
    {
        return $this->hasOne('App\Author', 'id','id_author');
    }
    //ttt
	// public function librarypembelian()
 //    {
 //        return $this->hasOne('App\Pembelian', 'id','id_buku');
 //    }
}
