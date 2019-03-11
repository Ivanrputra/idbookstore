<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Alert;
use DB;

class ViewBookController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }
    public function show(Request $request){
        $iduser = Auth::guard('web')->user()->id;
        $books = DB::table('pembelian')
            ->where([
                ["id_buku","=", (int)$request->id_buku],
                ["status_konfirmasi","=", "Sudah Dikonfirmasi"],
                ['id_pembeli', '=', $iduser],
            ])
            ->get();
        // $statement = DB::select("show table status like 'books'");
        
        return response()->json(['id' => (int)$request->id_buku,'asd'=>$iduser,'book'=>$books]);
        
        // return view('bib-epup-viewer');
        // <!--<button style="width: 100%; radius:0;" class="btn btn-info" type="button" onclick="window.location='{{ url('/')}}/book_view/?book={{ $book->id_author.'/'.$book->nameFile }}.epub'">Baca</button>-->
        // return view('/book_view/?book={{ $book->id_author.'/'.$book->nameFile }}.epub');
        
        // return response()->json(['id' => $id, 'filename'=> $filename]);
        // return ['id' => $id, 'filename'=> $filename];
	}
}
