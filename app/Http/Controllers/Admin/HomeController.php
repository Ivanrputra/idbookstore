<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\book;
use App\stat_naskah;
use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $c_authors = DB::table('authors')->count();
        $c_books = DB::table('books')->count();
        $c_users = DB::table('users')->count();
        $c_covertemplate = DB::table('template')->selectRaw('count(*) as ct')->where('template','Cover')->get();
        $c_coverepub = DB::table('template')->selectRaw('count(*) as ce')->where('template','epub')->get();
        return view('admin.home',[
            'c_authors' => $c_authors,
            'c_books' => $c_books,
            'c_users' => $c_users,
            'c_covertemplate' => $c_covertemplate,
            'c_coverepub' => $c_coverepub
        ]);
    }
    public function poststatDoc(Request $request,$id,$id_author)
    {
        $this->validate($request, [
            'book' => 'required|mimes:epub,docx,doc,pdf',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);
        $idadmin = Auth::guard('admins')->user()->id;
        $book = $request->file('book');
        $ext = $request->file('book')->getClientOriginalExtension();
        $incre_books = DB::select("select count(id) as a from stat_naskah where 'id_naskah' = ".$id."");
        // return $incre_books[0]->a;
        $judul = $request->input('judul').$incre_books[0]->a.'.'.$ext;
        $desk = $request->input('deskripsi');
        // $nameBook = rand(1,999).'-'.bcrypt($idadmin).'-'.$judul;
        $nameBook =  str_replace(array('/', '+', '='), '', $judul);

        Storage::putFileAs('/public/book/penulis/'.$id_author.'/doc/'.$id.'/', $book, $nameBook);
        //save data
        $savenaskah = new stat_naskah;
        $savenaskah->id_naskah = $id;
        $savenaskah->id_admin = $idadmin;
        $savenaskah->id_author = 0;
        $savenaskah->title_naskah = $nameBook;
        $savenaskah->message = $desk;
        $savenaskah->save();
        
        if (true) {
        Alert::success('Success', 'Anda Berhasil Mengupload Naskah')->autoclose(3500);
        }else{
            Alert::error('Success', 'Gagal Upload Naskah')->autoclose(3500);
        }
        return redirect('/admin/home');
    }
}
