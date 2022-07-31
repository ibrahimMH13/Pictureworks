@extends('layout.master')
@section('title')
   - {!! $user->name??'' !!}
@endsection
@section('content')
    <header>
        <span class="avatar"><img src="{{$user->avatar()}}" alt=""/></span>
        <h1>{{$user->name}}</h1>
        <p>{{nl2br($user->comments)}}</p>
    </header>
@endsection
