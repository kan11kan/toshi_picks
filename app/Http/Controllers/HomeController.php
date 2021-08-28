<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');

    // }

        public function index()
    {
        $memos = DB::table('memos')
        ->where('publicFlag','=',1)
        ->select('id','memotext1','memotext2','memotext3','memotext4','memotext5','memotext6','updated_at','created_at')
        ->orderBy('created_at','desc')
        ->get();
        // dd($memos);
        return view('home',compact('memos'));
    }




}
