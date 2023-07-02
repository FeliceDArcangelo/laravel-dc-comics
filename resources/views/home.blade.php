@extends('layouts.base')

@section('contents')
    
    <ul>
        @foreach ($comics as $comic)
            <li>{{ $comic->title }}</li>
        @endforeach
    </ul>

@endsection