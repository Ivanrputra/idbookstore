<?php

namespace App\Http\Controllers\Author;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;
use Alert;
use Illuminate\Support\Facades\Storage;

class TemplateController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth.author');
    }
    public function downepub(){
	      $template = DB::table('template')
            ->select('*')
            ->where("template","=","Epub")
            ->get();
    	return view('author.templateepub', ['template' => $template]);
    	// return redirect('/admin/templateepub');
	}
	public function downcover(){
		$template = DB::table('template')
            ->select('*')
            ->where("template","=","Cover")
            ->get();
    	return view('author.templatecover', ['template' => $template]);
	}
	public function downsample(){
		$template = DB::table('template')
            ->select('*')
            ->where("template","=","Sample")
            ->get();
    	return view('author.sample', ['template' => $template]);
	}
}
