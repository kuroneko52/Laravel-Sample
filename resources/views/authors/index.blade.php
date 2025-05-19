@extends('layouts.app')

@section('content')
    <h1>作者の一覧</h1>
    <a href="{{ route('authors.create') }}">作者を追加</a>
    <br>
    <a href="{{ route('books.create') }}">本を追加</a>
    <br>
    <a href="{{ route('books.index') }}">本の一覧</a>
    <ul>
        @foreach ($authors as $author)
            <li>{{ $author->name }}</li>
            <ul>
                @foreach ($author->books as $book)
                    <li>{{ $book->title }}</li>
                @endforeach
            </ul>
        @endforeach
    </ul>
@endsection
