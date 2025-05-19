@extends('layouts.book')

@section('content')
    <div class="form-container">
        <h1>作者を追加</h1>
        <form action="{{ route('authors.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">名前:</label>
                <input type="text" name="name" id="name" required>
            </div>
            <button type="submit" class="btn">追加</button>
        </form>
    </div>
@endsection

