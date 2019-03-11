<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\template;
use Auth;
use Alert;
use Illuminate\Support\Facades\Storage;
use DB;

class TemplateController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth.admin');
    }
    public function upepub(){
    	return view('admin.templateepub');
	}
	public function upcover(){
		return view('admin.templatecover');
	}
	public function upsample(){
		return view('admin.samplefull');
	}



	public function upTempEpub(Request $request){
		$this->validate($request, [
            'nama_template' => 'required',
            'Template_buku' => 'required|mimes:epub',
        ]);
		$temp = "Epub";
		$nama = $request->input('nama_template');
		$template = $request->file('Template_buku');
        $idadmin = Auth::guard('admins')->user()->id;
        $namafile = rand(1,999).'-'.bcrypt($idadmin).'-'.$nama;
		
		// Storage::putFileAs('/public/book/penulis/'.$idauthor, $book, $nameBook.'.epub');

        Storage::putFileAs('/public/template/'.$temp,$template,$namafile.'.epub');

        $saveTemplate = new template;
        $saveTemplate->id_admin = $idadmin;
        $saveTemplate->nama = $nama;
        $saveTemplate->nama_file = $namafile;
        $saveTemplate->template = 'Epub';
                
        if ($saveTemplate->save()) {
        Alert::success('Success', 'Anda Berhasil Mengupload Template')->autoclose(3500);
        }else{
            Alert::error('Success', 'Gagal Upload Template')->autoclose(3500);
        }
        return redirect('/admin/templateepub');
    	// return view('admin.templateepub');
    	// return redirect('/admin/templateepub');
	}

	public function upTempCover(Request $request){
		$this->validate($request, [
            'nama_template' => 'required',
            'Template_cover' => 'required|required|mimes:jpeg,bmp,png,jpg',
        ]);
		$temp = "Cover";
		$nama = $request->input('nama_template');
		$template = $request->file('Template_cover');
        $idadmin = Auth::guard('admins')->user()->id;
        $namafile = rand(1,999).'-'.bcrypt($idadmin).'-'.$nama;
		
		// Storage::putFileAs('/public/book/penulis/'.$idauthor, $book, $nameBook.'.epub');

        Storage::putFileAs('/public/template/'.$temp,$template,$namafile.'.jpg');

        $saveTemplate = new template;
        $saveTemplate->id_admin = $idadmin;
        $saveTemplate->nama = $nama;
        $saveTemplate->nama_file = $namafile;
        $saveTemplate->template = 'Cover';
                
        if ($saveTemplate->save()) {
        Alert::success('Success', 'Anda Berhasil Mengupload Template')->autoclose(3500);
        }else{
            Alert::error('Success', 'Gagal Upload Template')->autoclose(3500);
        }
        return redirect('/admin/templatecover');
    	// return view('admin.templateepub');
    	// return redirect('/admin/templateepub');
		// return view('admin.templatecover');
		// return redirect('/admin/templatecover');
	}
	
	public function upSamplee(Request $request){
		$this->validate($request, [
            'nama_sample' => 'required',
            'cover' => 'required|required|mimes:jpeg,bmp,png,jpg',
            'sample' => 'required|mimes:zip',
        ]);
		$temp = "Sample";
		$nama = $request->input('nama_sample');
		$sample_cover = $request->file('cover');
		$sample = $request->file('sample');
        $idadmin = Auth::guard('admins')->user()->id;
        $namafile = rand(1,999).'-'.bcrypt($idadmin).'-'.$nama;
		
		// Storage::putFileAs('/public/book/penulis/'.$idauthor, $book, $nameBook.'.epub');
        $incre_books = DB::select("show table status like 'template'");
        // Storage::putFileAs('/public/book/penulis/'.$idauthor.'/'.$incre_books[0]->Auto_increment.'/', $book, $nameBook.'.epub');
        Storage::putFileAs('/public/template/'.$temp.'/'.$incre_books[0]->Auto_increment,$sample_cover,$namafile.'.jpg');
        Storage::putFileAs('/public/template/'.$temp.'/'.$incre_books[0]->Auto_increment,$sample,$namafile.'.zip');

        $saveTemplate = new template;
        $saveTemplate->id_admin = $idadmin;
        $saveTemplate->nama = $nama;
        $saveTemplate->nama_file = $namafile;
        $saveTemplate->template = 'Sample';
                
        if ($saveTemplate->save()) {
        Alert::success('Success', 'Anda Berhasil Mengupload Sample')->autoclose(3500);
        }else{
            Alert::error('Success', 'Gagal Upload Sample')->autoclose(3500);
        }
        return redirect('/admin/samplefull');
	}
}
