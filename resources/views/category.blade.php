@extends('layouts.main_layout')
@section('title', $category->title)
@section('content')
    <div class="row">
        @foreach($category->products as $product)
            <div class="col-12 col-md-3 center-block mb-3 ">
                <div class="card" style="width: 18rem;">
                    <img class="card-img" src="/upload/images/{{$product->images[0]}}" alt="Изображение {{$product->title}}">
                    <div class="card-img-overlay">
                        <h5 class="card-title bg-primary p-1">{{$product->title}}</h5>
                        <p class="bg-primary p-1">{{$product->price}}</p>
                        <a href="/product/{{$product->id}}" class="btn btn-primary">go product</a>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
@endsection
