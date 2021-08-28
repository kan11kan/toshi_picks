@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="{{route('memos.create') }}">相場記録画面へ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        @foreach($memos as $memo)
            <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $memo->updated_at }}</div>
                    <div class="card-body">
            {{ $memo->id }}
            {{ $memo->memotext1 }}<br>
            {{ $memo->memotext2 }}<br>
            {{ $memo->memotext3 }}<br>
            {{ $memo->memotext4 }}<br>
            {{ $memo->memotext5 }}<br>
            {{ $memo->memotext6 }}<br>
            </div>
            </div>
            </div>
            </div>
            <p></p>
        @endforeach
    </div>

@endsection
