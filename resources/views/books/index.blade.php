@extends('layouts.book')

@section('content')
    <div class="container">
        <div class="column">
            <h1>本の一覧</h1>
            <a href="{{ route('books.create') }}">本を追加</a>            
            <ul>
            <br>
                @foreach ($books as $book)
                    <li>{{ $book->title }} - {{ $book->author->name }}</li>
                @endforeach
            </ul>
        </div>

        <div class="column">
            <h1>作者の一覧</h1>
            <a href="{{ route('authors.create') }}">作者を追加</a>
            <br>
            <a href="{{ route('authors.index') }}">作者一覧</a>
            <ul>
            
                @foreach ($authors as $author)
                    <li>{{ $author->name }}</li>
                @endforeach
            
            </ul>
        </div>
    </div>
@endsection

