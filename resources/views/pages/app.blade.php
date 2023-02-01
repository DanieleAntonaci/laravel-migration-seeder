@extends('layout.main-layout')

@section('list-train')
    <ul>
        @foreach ($trains as $train)
            <li>
                {{$train -> place_of_departure}}
            </li>
        @endforeach
    </ul>

@endsection