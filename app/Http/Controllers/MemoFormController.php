<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Memo;

use Illuminate\Support\Facades\DB;

class MemoFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //エロクワントORマッパー
        // $memos = Memo::all();
        //クエリビルダ
        $memos = DB::table('memos')
        ->select('id','memotext1','memotext2','memotext3','memotext4','memotext5','memotext6','updated_at','created_at')
        ->orderBy('created_at','desc')
        ->get();
        // dd($memos);
        return view('memos.index',compact('memos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('memos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $memo = new Memo;
        $memo ->id = $request->input('id');
        $memo ->memotext1 = $request->input('memotext1');
        $memo ->memotext2 = $request->input('memotext2');
        $memo ->memotext3 = $request->input('memotext3');
        $memo ->memotext4 = $request->input('memotext4');
        $memo ->memotext5 = $request->input('memotext5');
        $memo ->memotext6 = $request->input('memotext6');
        $memo ->publicFlag = $request->input('publicFlag');
        // dd($component);
        $memo->save();
        return redirect('memos/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
