<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Alert;

class Konfirmasi extends Controller
{
     public function __construct()
    {
        $this->middleware('auth.admin');
    }
    public function index(Request $request)
    {
        $beli = DB::table('pembelian')
                ->select('pembelian.*','books.judul','users.name')
                ->join('books','books.id','=','pembelian.id_buku')
                ->join('users','users.id','=','pembelian.id_pembeli')
                ->get();
                
        return view('admin.konfirmasi', ['beli' => $beli]);
    }
    public function confirm($id)
	{
        $statusbayar = DB::table('pembelian')
        // ->select('status_konfirmasi')
        ->where('id','=',$id)
        ->pluck('status_pembayaran');

        $status = DB::table('pembelian')
        // ->select('status_konfirmasi')
        ->where('id','=',$id)
        ->pluck('status_konfirmasi');

        if ($statusbayar[0] == 'Sudah Bayar') {
            if ($status[0] == 'Belum Dikonfirmasi') {
                DB::table('pembelian')
                ->where('id','=',$id)
                ->update(['status_konfirmasi' => 'Sudah Dikonfirmasi']);   
                Alert::success('Success', 'Anda Berhasil Mengkonfirmasi Pembelian')->autoclose(3500);
            }
            elseif($status[0] == 'Sudah Dikonfirmasi'){
                DB::table('pembelian')
                ->where('id','=',$id)
                ->update(['status_konfirmasi' => 'Belum Dikonfirmasi']); 
                Alert::success('Success', 'Anda Berhasil Mengganti Status Konfirmasi Pembelian')->autoclose(3500);
            }else{
                Alert::error('Gagal', 'Error')->autoclose(3500);    
            }
        }elseif ($statusbayar[0] == 'Belum Bayar') {
            Alert::error('Gagal', 'Status pembelian Belum Bayar')->autoclose(3500);
        }else{
            Alert::error('Gagal', 'Error')->autoclose(3500);    
        }
        return redirect('/admin/konfirmasi');
    
        
        // return $status;
    }
    public function confirmpembayaran($id)
	{
        $status = DB::table('pembelian')
        // ->select('status_konfirmasi')
        ->where('id','=',$id)
        ->pluck('status_pembayaran');

        if ($status[0] == 'Belum Bayar') {
            DB::table('pembelian')
            ->where('id','=',$id)
            ->update(['status_pembayaran' => 'Sudah Bayar']);   
            Alert::success('Success', 'Anda Berhasil Mengkonfirmasi Pembayaran')->autoclose(3500);
        }
        elseif($status[0] == 'Sudah Bayar'){
            DB::table('pembelian')
            ->where('id','=',$id)
            ->update(['status_pembayaran' => 'Belum Bayar']); 
            Alert::success('Success', 'Anda Berhasil Mengganti Status Konfirmasi Pembayaran')->autoclose(3500);
        }else{
            Alert::error('Gagal', 'Error')->autoclose(3500);    
        }
        return redirect('/admin/konfirmasi');    
    }
	    //--------------------------------

     public function index_confirm_pubish(Request $request)
    {
        $unpublish = DB::table('books')
                ->leftJoin('authors','books.id_author' , '=', 'authors.id')
                ->select('books.id','authors.name','books.judul','books.harga','books.status')
                ->where('status','=','belum')

                ->get();
                // select b.id,authors.name,b.judul,b.harga,b.status from books as b right join authors ON  b.id_author  = authors.id where b.status = 'belum'
                
        return view('admin.konfirmasi_publish', ['unpublish' => $unpublish]);
    }

    public function confirm_publish($id)
    {
        $statusbayar = DB::table('books')
        ->where('id','=',$id)
        ->pluck('status');

        if ($statusbayar[0] == 'belum') {
            DB::table('books')
            ->where('id','=',$id)
            ->update(['status' => 'sudah']); 
            Alert::success('Success', 'Anda Berhasil Mengkonfirmasi Status Publish Buku')->autoclose(3500);
        }else{
            Alert::error('Gagal', 'Error')->autoclose(3500);    
        }
        return redirect('/admin/konfirmasipublish');
    
    }

}

