@extends('base')

@section('title')

@section('content')
    <img src="/img/drapeau.jpg" alt="drapeau.jpg">

    <h1>hello from Senegal</h1>
        <p> it's currently {{date('H:i A')}}</p>
@endsection
@section('footer') &middot; <a href="{{route('about')}}">About us </a>@endsection
