@extends('component.navbar')
@section('content')
    <div class="container mt-5">
        <h1>Hallo Nama saya {{$name}} lahir di {{$lahir}}</h1>
    <a href="{{url('profile')}}"class="btn btn-primary">profile</a>
    <a href="{{url('univ')}}"class="btn btn-primary">univ</a>
    </div>
@endsection

