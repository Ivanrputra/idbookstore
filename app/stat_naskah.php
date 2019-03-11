<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stat_naskah extends Model
{
    //
    protected $table = 'stat_naskah';

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
