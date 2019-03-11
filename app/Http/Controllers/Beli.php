<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\book;
use App\Pembelian;
use Alert;
use DB;

class Beli extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }
	public function index($belibuku){

		$iduser = Auth::guard('web')->user()->id;
		
		$books = book::find($belibuku);
		// $pembelian = new Pembelian();
		// $pembelian->id_buku = $idbuku;
		// $pembelian->id_pembeli = $iduser;
		// $pembelian->harga = $books['harga'];
		// $pembelian->status_pembayaran = '0';
		// $pembelian->status_konfirmasi = '0';
		// $pembelian->id_author = $books['id_author'];
		// $pembelian->save();
		
		$cek_beli = DB::table('pembelian')
            ->where([
                ["id_buku","=",$belibuku],
                ["id_pembeli","=", $iduser],
            ])
            ->get();
            
        // if (!$result->isEmpty()) { }
        if($cek_beli->isEmpty()){
    		Pembelian::forceCreate([
    	        'id_buku' => $belibuku,
    			'id_pembeli' => $iduser,
    			'harga' => $books['harga'],
    			'status_pembayaran' => 'Belum Bayar',
    			'status_konfirmasi' => 'Belum Dikonfirmasi',
    			'id_author' => $books['id_author'],
        	]);
    		Alert::success('Success', 'Anda Berhasil Membeli Buku, Siahkan Membayar')->autoclose(2200);
            return redirect('/home');
        }else{
            Alert::error('Gagal', 'Anda Sudah Membeli buku ini')->autoclose(2200);
            return redirect('/home');
        }
       
	}
}
