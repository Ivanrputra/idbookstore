<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\book;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->input('q');
        if ($q != ''){
            $books = DB::table('authors')
                ->join('books', 'books.id_author', '=', 'authors.id')
                ->where("books.status","=","sudah")
                ->where("authors.name", "LIKE","%$q%")
                ->orWhere("books.judul", "LIKE", "%$q%")
                ->orWhere("books.deskripsi", "LIKE", "%$q%")
                // ->inRandomOrder()
                ->paginate(12);
            return view('home', ['books' => $books, 'q'=> $q, 'cate'=>null ]);

            // $books = book::with('author')
            //     ->where("authors.name", "LIKE","%$q%")
            //     ->orWhere("books.judul", "LIKE", "%$q%")
            //     ->orWhere("books.deskripsi", "LIKE", "%$q%")
            //     ->paginate(8);
            // return view('home', ['books' => $books, 'q'=> $q]);
        }
        // $books = DB::table('books')
        //         ->join('authors', 'books.id_author', '=', 'authors.id')
        //         ->paginate(8);
        $books = book::with('author')
                ->where("books.status","=","sudah")
                ->inRandomOrder()
                ->paginate(12);
                
        //
        $best = DB::table('books')
                // ->join('best_seller','books.id','=','best_seller.id_book')
                ->where("books.status","=","sudah")
                ->get();
                
        //
        $new = DB::table('books')
                ->where("books.status","=","sudah")
                ->orderBy('created_at', 'desc')
                ->limit(10)
                ->get();
        
        return view('home', ['books' => $books, 'q'=> null,'cate'=>null,'bests'=>$best,'news'=>$new ]);
        // $books = book::with('author')->paginate(8);
        // return view('home', ['books' => $books, 'q'=> null]);
    }
    public function mylibrary()
    {   

        // $books = book::with('librarypembelian')->paginate(8);
        $iduser = Auth::guard('web')->user()->id;

        $books = DB::table('pembelian')
            ->join('books', 'books.id', '=', 'pembelian.id_buku')
            ->where([
                ["pembelian.status_konfirmasi","=", "Sudah Dikonfirmasi"],
                ['pembelian.id_pembeli', '=', $iduser],
            ])
            ->paginate(12);
        
        return view('mylibrary', ['books' => $books]);
    }
    public function newreleaseall(){
        
        $new = DB::table('books')
                ->where("books.status","=","sudah")
                ->orderBy('created_at', 'desc')
                ->limit(18)
                ->get();
        return view('newrelease', ['books' => $new, 'q'=> null]);
    }
    public function show($id)
    {
        // return book::find($id);
        $iduser = Auth::id();
        if ($iduser == null) {
            $book = book::find($id);
        
            $sim = book::with('author')
                ->where("books.status","=","sudah")
                ->where("books.kategori","=",$book->kategori)
                ->inRandomOrder()
                ->limit(3)
                ->get();
            
            return view('bookid', ['book' => $book , 'simil' => $sim, 'user'=> $iduser ]);
        }
        $book = book::find($id);
        
        $cekbeli = DB::table('pembelian')
                // ->join('best_seller','books.id','=','best_seller.id_book')
                ->where("id_pembeli","=",$iduser)
                ->where("id_buku","=",$id)
                ->get();
                
        $sim = book::with('author')
            ->where("books.status","=","sudah")
            ->where("books.kategori","=",$book->kategori)
            ->inRandomOrder()
            ->limit(3)
            ->get();
        
        return view('bookid', ['book' => $book , 'simil' => $sim, 'user'=>$cekbeli ]);
    }
    public function kategorishow($kategori)
    {
        
        $books = DB::table('authors')
                ->join('books', 'books.id_author', '=', 'authors.id')
                ->where("books.kategori","LIKE","%$kategori%")
                ->inRandomOrder()
                ->get();

        return view('home', ['books' => $books, 'q'=> 'oyi', 'cate'=>$kategori]);
    }
}
