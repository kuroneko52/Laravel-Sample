@extends('layouts.app')

@section('content')
<div class="container">
    <h1>File Upload</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
            <p>Path: {{ session('path') }}</p>
        </div>
    @endif
    <form action="/upload" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <input type="file" name="file" class="form-control">
            @error('file')
                <small class="text-danger"> {{ $message }} </small>
            @enderror
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>
@endsection
