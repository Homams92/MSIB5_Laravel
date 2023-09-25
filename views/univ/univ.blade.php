@extends('component.navbar')
@section('content')
<div class="container mt-5">
    <img src="https://www.iwu.ac.id/asseet/Thumbnail/13_500_500.jpg" class="rounded mx-auto d-block" alt="...">
<p class="fs-4 mt-5 text-center" >Alamat : {{$alamat}}</p><br>
<p class="fs-4 text-center">Tahun didirikan : {{$tahun}}</p>
</div>
@endsection