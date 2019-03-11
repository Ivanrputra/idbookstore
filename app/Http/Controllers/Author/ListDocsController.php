<?php

namespace App\Http\Controllers\Author;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;
use Alert;
use Illuminate\Support\Facades\Storage;
use App\naskah;
use App\stat_naskah;

class ListDocsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.author');
    }
    public function list(){
    	  $idauthor = Auth::guard('authors')->user()->id;
          $list_docs = naskah::select('*')
            ->where('naskah.id_author','=',$idauthor)
            ->paginate(20);
    	return view('author.list_docs', ['list_docs' => $list_docs]);
    	// return redirect('/admin/templateepub');
    }
    public function statusnaskah($id){
        $idauthor = Auth::guard('authors')->user()->id;
        // $status = stat_naskah::with('author')
        $status = stat_naskah::select('*')
          ->where('stat_naskah.id_naskah','=',$id)
          ->orderBy('stat_naskah.id', 'asc')
          ->get();
        $judul = naskah::select('judul','id_author')
        ->where('id','=',$id)
        ->get();
        // foreach($judul as $a){
        //     $judul = $a->judul;
        // }
        $judulk = explode(".",$judul[0]->judul)[0];
        // return $status;
    //   return view('author.forum', ['chat' => $chat,'id_book' => $id]);
        return view('author.stat_naskah', ['status' => $status,'naskah' => $judulk,'id_author'=>$judul[0]->id_author]);    
  }   
}
