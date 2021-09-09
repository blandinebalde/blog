@extends('base')

@section('title')

@section('content')
    <img src="{{asset('/img/drapeau.jpg')}}" alt="drapeau.jpg" class="rounded shadow-md">

    <h1 class="text-red-300 text-5xl font-semibold mt-5 col-md-3">hello from Senegal</h1>
        <p class="text-lg text-grey-800 mt-2"> it's currently {{date('H:i A')}}</p>
@endsection
@section('footer') &middot; <a class="text-indigo-500 hover:text-indigo-700 underline"href="{{route('about')}}">About us </a>@endsection
