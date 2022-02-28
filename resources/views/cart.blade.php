@extends('layouts.main_layout')
@section('title', $title)
@section('content')
    @if (isset($products))
        <ul class="list-group">
            @foreach($products as $product)
                <li class="list-group-item ">
                    <a href="/product/{{$product->id}}" class="d-flex justify-content-between align-items-center link">
                        <div>
                            <img height="100" width="100" class="" src="/upload/images/{{$product->images[0]}}"
                                 alt="Изображение {{$product->title}}">
                        </div>
                        <strong>{{$product->title}}</strong>
                        <span class="">{{$product->price}}</span>
                        <span class="badge bg-primary">{{$data_cart[$product->id]}}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <p>Cart contains 0 products.</p>
    @endif

@endsection
