<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;
use Alert;
use Illuminate\Support\Facades\Storage;
use App\forum;

class ListBukuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }
	public function forum($id){
	      $chat = DB::table('forum')
            ->select('*')
            ->where('id_book','=',$id)
            ->orderBy('id', 'asc')
            ->get();
    	return view('admin.forum', ['chat' => $chat,'id_book' => $id]);
    	// return redirect('/admin/templateepub');
	}
	public function postReply(Request $request){
		$this->validate($request, [
            'message' => 'required',
            'id' => 'required',
        ]);

        $idadmin = Auth::guard('admins')->user()->id;
        $message = $request->input('message');
        $id_book = $request->input('id');
        $save = new forum;
        $save->id_book = $id_book;
        $save->id_author = 0;
        $save->id_admin = $idadmin;
        $save->message = $message;
        $save->writer = 'admin';
        $save->save();

        $t='/admin/forum/'.$request->input('id');
        return redirect($t);
    }
    
}
