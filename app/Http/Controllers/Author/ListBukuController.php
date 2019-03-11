<?php

namespace App\Http\Controllers\Author;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;
use Alert;
use Illuminate\Support\Facades\Storage;
use App\forum;
use App\book;
use App\naskah;
use App\stat_naskah;

class ListBukuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.author');
    }
    public function list(){
    	  $idauthor = Auth::guard('authors')->user()->id;
	      $list_buku = DB::table('books')
            ->select('*')
            ->where('id_author','=',$idauthor)
            ->get();
    	return view('author.list_buku', ['list_buku' => $list_buku]);
    	// return redirect('/admin/templateepub');
	}
	public function forum($id){
    	  $idauthor = Auth::guard('authors')->user()->id;
	      $chat = DB::table('forum')
            ->select('*')
            ->where('id_book','=',$id)
            ->orderBy('id', 'asc')
            ->get();
    	return view('author.forum', ['chat' => $chat,'id_book' => $id]);
    	// return redirect('/admin/templateepub');
	}
	public function postReply(Request $request){
		$this->validate($request, [
            'message' => 'required',
            'id' => 'required',
        ]);

        $idauthor = Auth::guard('authors')->user()->id;
        $message = $request->input('message');
        $id_book = $request->input('id');
        $save = new forum;
        $save->id_book = $id_book;
        $save->id_author = $idauthor;
        $save->id_admin = 0;
        $save->message = $message;
        $save->writer = 'author';
        $save->save();

        $t='/author/forum/'.$request->input('id');
        return redirect($t);
    }
    
    public function formedit($id){
        $book = DB::table('books')
            ->where('id',$id)
            ->get();
        return view('author.edit', ['book'=>$book]);
    }

    public function deleteBook($id) {
        $buku = book::where('id',$id)->delete();
        if (true) {
            Alert::success('Success', 'Anda Berhasil Menghapus Buku')->autoclose(3000);
        }else{
            Alert::error('Success', 'Gagal Hapus Buku')->autoclose(3000);
        }
        return redirect('/author/listbuku');
    }
    
}
