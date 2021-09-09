@extends('base')

@section('title','About us |'. config('app.name'))



@section('content')
    <img src="/img/about.png" alt="about.png">

<p>Build with &heartsuit; By blandine</p>
<p><a href="{{route('home')}}">Revenir a la page d'acceuil</a></p>

@endsection