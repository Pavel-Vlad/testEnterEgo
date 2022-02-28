@extends('layouts.main_layout')
@section('title', $title)
@section('content')
    <ul>
        @foreach($categories as $cat)
            <li><a href="/category/{{$cat->id}}">{{$cat->title}}</a></li>
        @endforeach
    </ul>
@endsection
