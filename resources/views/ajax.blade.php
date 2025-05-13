@extends('layouts.app')

@section('content')
<div class="container">
    <h1>AJAX Example</h1>
    <button id="fetchData" class="btn btn-primary">Fetch Data</button>
    <div id="data" class="mt-3"></div>
</div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
document.getElementById('fetchData').addEventListener('click', function () {
    axios.get('/ajax/data')
        .then(function (response) {
            document.getElementById('data').innerHTML = response.data.message;
        })
        .catch(function (error) {
            console.error('Error fetching data:', error);
        });
});
</script>
@endsection

