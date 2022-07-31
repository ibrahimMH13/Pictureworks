@extends('layout.master')
@section('title')
    - {!! $user->name??'' !!}
@endsection
@section('content')
    <header>
        <div>
            <label>
                User Id
                <input type="text" name="id" />
            </label>
        </div>
        <div>
            <label>
                password
                <input type="text" name="password" />
            </label>
        </div>
        <div>
            <label>
                comments
                <textarea name="comments" ></textarea>
            </label>
        </div>
     </header>
@endsection
