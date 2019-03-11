<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    //
    protected $table = 'books';

    public function author()
    {
        return $this->hasOne('App\Author', 'id','id_author');
    }

    public function kategory()
    {
        return $this->hasMany('App\kategori', 'book_id','id');
    }
    //ttt
	// public function librarypembelian()
 //    {
 //        return $this->hasOne('App\Pembelian', 'id','id_buku');
 //    }
}
