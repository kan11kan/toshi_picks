@extends('tests.test')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">◯月△日</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('memos.store') }}" method="POST">
                    @csrf
                    <p id='parent'></p>
                    <br>
                    <p id='btn' class='card'>+（ここを押すとモーダル表示→テーマ選択→カード追加）</p><br>
                    <!-- <textarea name="memotext" id="" cols="30" rows="10">ここに相場のメモを残します</textarea> -->
                    
                    <input type="radio" name='publicFlag' checked='checked' value='1'>公開
                    <input type="radio" name='publicFlag' value='2'>非公開<br>
                    <input type="submit" value = 'save'>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






<!-- <p id='parent'>親要素（ここに生成されたものが追加されていく）</p>
<br>
<button id='btn' class='card'>+（ここを押すとモーダル表示→テーマ選択→カード追加）</button><br>
<button>保存</button> -->

<!-- <script>
//準備
let idx = 1;
//まずは'btn'が押下されたときのクリックイベントを作成
const btn = document.querySelector('#btn');
btn.addEventListener('click', function addElement(){

	//次に中身を作成していく
	//①<button></button>タグを作成する
	let element = document.createElement('textarea');
	
	//②<button ></button>の中身を定義する
	element.innerText = idx +'<選択されたテーマ>';
    element.className="card";
    element.setAttribute("name",'memotext'+idx);
    element.id = 'test_'+idx;
	idx++;
	//③生成された要素がクリックされた時のイベントを定義する
	element.addEventListener('click',function(){
		element.innerText = '';//'ボタンの中身'→'クリックされました'になる
	});
	//④追加する親要素の情報を取得
	let parent = document.querySelector('#parent');
	console.log(element)
	//⑤要素を追加する
	parent.appendChild(element);
	parent.appendChild(document.createElement("br"));
	});
</script> -->







<!-- //ここからモーダルテスト -->
<script>
//準備
let idx = 1;
//まずは'btn'が押下されたときのクリックイベントを作成
const btn = document.querySelector('#btn');
btn.addEventListener('click', function addElement(){

	//次に中身を作成していく
	//①<button></button>タグを作成する
	let parentCard   = document.createElement('div');
	let selectNikkei = document.createElement('button');
    let selectNYDow  = document.createElement('button');
    let selectToday  = document.createElement('button');
    
    parentCard.className   = "card";
    parentCard.innerText   = "ここがモーダルになります";
    selectNikkei.innerText = '#日経平均';
    selectNYDow.innerText  = '#NYダウ';
    selectToday.innerText  = '#今日のマーケット';
    



    

    parentCard.appendChild(selectNikkei);
    parentCard.appendChild(selectNYDow);
    parentCard.appendChild(selectToday);
    
    var currentDiv = document.getElementById("#parent");
    document.body.insertBefore(parentCard , currentDiv);



	});
</script>





@endsection


