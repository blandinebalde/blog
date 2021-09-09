@extends('base')

@section('title','About us |'. config('app.name'))



@section('content')
    <img src="{{asset('/img/about.png')}}" alt="about.png " class="rounded shadow-lg">

<p class="mt-5 ">Build with <span class="text-pink-500">&heartsuit;</span>  By blandine</p>
<p><a href="{{route('home')}}" class="text-indigo-400 hover:text-indigo-700 mt-2">Revenir a la page d'acceuil</a></p>

@endsection