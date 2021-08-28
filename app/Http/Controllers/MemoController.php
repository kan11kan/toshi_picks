<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\test;

use Illuminate\Support\Facades\DB;

class MemoController extends Controller
{
    public function index(){

        $values =Test::all();

        $tests  =DB::table('tests')->get();
        // dd($tests); 
        return view ('tests.memo',compact('values'));

    }
}
