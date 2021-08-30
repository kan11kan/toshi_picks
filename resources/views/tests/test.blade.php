@extends('layouts.app')
@section('sidebar')
<div>
    <p>ここはメインのサイドバーに追加される</p><br>
    <!-- <p>ここによくみるサイトを登録できますタブで押下できる感じ？</p> -->
    <select name="" id="" name=''label='ブックマーク'>
        <option value = 'ブックマーク1'>ブックマーク1</option>
        <option value = 'ブックマーク2'>ブックマーク2</option>
    </select>
                    <iframe width ='650px' height='600px' src="https://nikkei225jp.com/cme/" frameborder="0"></iframe><br> 
                    <iframe width ='650px' height='500px' src="https://www.traders.co.jp/" frameborder="0"></iframe> 
</div>
@endsection