<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>相場の記録</h1>

<p>＜画面上部＞[＃米国市場][＃日本市場][＃話題（トヨタなど）][ #今日の相場まとめ ]←クリックしたらmainに#カードが追加される</p>

@foreach($values as $value)
{{$value->id}}<br>
{{$value->text}}
@endforeach




<p>＜画面左側＞</p>
<p>ブックマーク一覧</p>
<p>ブックマークされたページを表示（左にしまうこともできる）</p>

<p>＜画面右側＞</p>
<!-- カードの中にはURL保存蘭とコメント記入欄 -->

<form action="">
<textarea name="" id="" cols="30" rows="10"></textarea>
</form>



</body>
</html>




