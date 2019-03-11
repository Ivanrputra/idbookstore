<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\book;
use App\stat_naskah;
use App\naskah;
use App\kategori;
use Auth;
use Illuminate\Support\Facades\Storage;
use Alert;
use DB;

class UploadBook extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth.author');
    }

    public function index()
    {
        return view('author.upload');
    }

    /**
     * post book.
     *
     * @return redirect
     */
    public function postBook(Request $request)
    {
        $this->validate($request, [
            'coverBook' => 'required|mimes:jpeg,bmp,png,jpg',
            'book' => 'required|mimes:epub',
            'judul' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'pages' => 'required',
            'language' => 'required'
        ]);
        //inisia variable
        $idauthor = Auth::guard('authors')->user()->id;
        $coverBook = $request->file('coverBook');
        $book = $request->file('book');
        $judul = $request->input('judul');
        $harga = $request->input('harga');
        $kategori = $request->input('kategori');
        $deskripsi = $request->input('deskripsi');
        $language = $request->input('language');
        $pages = $request->input('pages');
        // $nameBook = rand(1,999).'-'.bcrypt($idauthor).'-'.$judul;
        $nameBook = rand(1,999).'-'.bcrypt($idauthor).'-'.$judul;
        $nameBook =  str_replace(array('/', '+', '='), '', $nameBook);

        $incre_books = DB::select("show table status like 'books'");
        // return $book;
        //upload file
        
        // Storage::putFileAs('/public/book/penulis/'.$idauthor.'' $book, $nameBook.'.epub');
        Storage::putFileAs('/public/book/penulis/'.$idauthor.'/'.$incre_books[0]->Auto_increment.'/', $book, $nameBook.'.epub');
        Storage::putFileAs('/public/book/penulis/'.$idauthor.'/'.$incre_books[0]->Auto_increment.'/', $coverBook, $nameBook.'.jpg');
        // Storage::putFileAs('/public/book/penulis/'.$idauthor.'/cover/', $coverBook, $nameBook.'.jpg');
        // if(Storage::putFileAs('/book/penulis/'.$idauthor.'/cover/', $coverBook, $nameBook.'.jpg'))
        // {
        //     Storage::copy(storage_path().'/app/book/penulis/'.$idauthor.'/cover/'.$nameBook.'.jpg', Storage::disk('public').'/book/cover/'.$idauthor.$nameBook);
        // }
    
        //save data
        $saveBook = new book;
        $saveBook->id_author = $idauthor;
        $saveBook->judul = $judul;
        $saveBook->deskripsi = $deskripsi;
        $saveBook->harga = $harga;
        $saveBook->nameFile = $nameBook;
        $saveBook->kategori = $kategori;
        $saveBook->halaman = $pages;
        $saveBook->bahasa = $language;
        $saveBook->status = 'belum';
        $saveBook->save();
        
        if (true) {
        Alert::success('Success', 'Anda Berhasil Mengupload Buku')->autoclose(3500);
        }else{
            Alert::error('Success', 'Gagal Upload Buku')->autoclose(3500);
        }
        return redirect('/author/home');
    }

    public function postedit(Request $request, $id){

        $reuploadcover = $request->input('reuploadcover');
        $reuploadbook = $request->input('reuploadbook');
        
        $coverrequire = ($reuploadcover == 'on') ? 'required|mimes:jpeg,bmp,png,jpg' : '';
        $bookrequire = ($reuploadbook == 'on') ? 'required|mimes:epub' : '';

        $this->validate($request, [
            'coverBook' => $coverrequire,
            'book' => $bookrequire,
            'judul' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'pages' => 'required',
            'language' => 'required'
        ]);

        //inisia variable
        $saveBook = book::find($id);
        $saveBook->id_author = Auth::guard('authors')->user()->id;
        $saveBook->judul = $request->input('judul');
        $saveBook->harga = $request->input('harga');
        $saveBook->kategori = $request->input('kategori');
        $saveBook->deskripsi = $request->input('deskripsi');
        $saveBook->bahasa = $request->input('language');
        $saveBook->halaman = $request->input('pages');
        
        $incre_books = DB::select("show table status like 'books'");
        
        if ($reuploadcover == 'on') {
            $coverBook = $request->file('coverBook');
            $nameBook = rand(1,999).'-'.bcrypt($idauthor).'-'.$judul;
            $nameBook =  str_replace(array('/', '+', '='), '', $nameBook);
            $saveBook->nameFile = $nameBook;
            Storage::putFileAs('/public/book/penulis/'.$idauthor.'/'.$incre_books[0]->Auto_increment.'/', $coverBook, $nameBook.'.jpg');
        }
        
        if ($reuploadbook == 'on') {
            $book = $request->file('book');
            Storage::putFileAs('/public/book/penulis/'.$idauthor.'/'.$incre_books[0]->Auto_increment.'/', $book, $nameBook.'.epub');
        }

        //save data
        $saveBook->save();
        
        if (true) {
        Alert::success('Success', 'Anda Berhasil Mengupdate Buku')->autoclose(3000);
        }else{
            Alert::error('Success', 'Gagal Update Buku')->autoclose(3000);
        }
        return redirect('/author/listbuku');
    }
    public function postDoc(Request $request)
    {
        $this->validate($request, [
            'book' => 'required|mimes:epub,docx,doc,pdf',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);
        //inisia variable
        $idauthor = Auth::guard('authors')->user()->id;
        $book = $request->file('book');
        $ext = $request->file('book')->getClientOriginalExtension();
        $judul = $request->input('judul').'.'.$ext;
        $desk = $request->input('deskripsi');
        // $nameBook = rand(1,999).'-'.bcrypt($idauthor).'-'.$judul;
        $nameBook =  str_replace(array('/', '+', '='), '', $judul);

        $incre_books = DB::select("show table status like 'naskah'");
        // return $book;
        //upload file
        
        // Storage::putFileAs('/public/book/penulis/'.$idauthor.'' $book, $nameBook.'.epub');
        Storage::putFileAs('/public/book/penulis/'.$idauthor.'/doc/'.$incre_books[0]->Auto_increment.'/', $book, $nameBook);
        // Storage::putFileAs('/public/book/penulis/'.$idauthor.'//'.$incre_books[0]->Auto_increment.'/', $coverBook, $nameBook.'.jpg');
        // Storage::putFileAs('/public/book/penulis/'.$idauthor.'/cover/', $coverBook, $nameBook.'.jpg');
        // if(Storage::putFileAs('/book/penulis/'.$idauthor.'/cover/', $coverBook, $nameBook.'.jpg'))
        // {
        //     Storage::copy(storage_path().'/app/book/penulis/'.$idauthor.'/cover/'.$nameBook.'.jpg', Storage::disk('public').'/book/cover/'.$idauthor.$nameBook);
        // }
    
        $savenaskah = new naskah;
        // $savenaskah->id = $incre_books[0]->Auto_increment;
        $savenaskah->id_author = $idauthor;
        $savenaskah->judul = $nameBook;
        $savenaskah->status = 'belum';
        $savenaskah->save();

        //save data
        $savenaskah = new stat_naskah;
        $savenaskah->id_naskah = $incre_books[0]->Auto_increment;
        $savenaskah->id_admin = 0;
        $savenaskah->id_author = $idauthor;
        $savenaskah->title_naskah = $judul;
        $savenaskah->message = $desk;
        $savenaskah->save();
        
        if (true) {
        Alert::success('Success', 'Anda Berhasil Mengupload Naskah')->autoclose(3500);
        }else{
            Alert::error('Success', 'Gagal Upload Naskah')->autoclose(3500);
        }
        return redirect('/author/home');
    }
    public function poststatDoc(Request $request,$id)
    {
        $this->validate($request, [
            'book' => 'required|mimes:epub,docx,doc,pdf',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);
        $idauthor = Auth::guard('authors')->user()->id;
        $book = $request->file('book');
        $ext = $request->file('book')->getClientOriginalExtension();
        $incre_books = DB::select("select count(id) as a from stat_naskah where 'id_naskah' = ".$id."");
        // return $incre_books[0]->a;
        $judul = $request->input('judul').$incre_books[0]->a.'.'.$ext;
        $desk = $request->input('deskripsi');
        // $nameBook = rand(1,999).'-'.bcrypt($idauthor).'-'.$judul;
        $nameBook =  str_replace(array('/', '+', '='), '', $judul);

        Storage::putFileAs('/public/book/penulis/'.$idauthor.'/doc/'.$id.'/', $book, $nameBook);
        //save data
        $savenaskah = new stat_naskah;
        $savenaskah->id_naskah = $id;
        $savenaskah->id_admin = 0;
        $savenaskah->id_author = $idauthor;
        $savenaskah->title_naskah = $nameBook;
        $savenaskah->message = $desk;
        $savenaskah->save();
        
        if (true) {
        Alert::success('Success', 'Anda Berhasil Mengupload Naskah')->autoclose(3500);
        }else{
            Alert::error('Success', 'Gagal Upload Naskah')->autoclose(3500);
        }
        return redirect('/author/home');
    }
}
