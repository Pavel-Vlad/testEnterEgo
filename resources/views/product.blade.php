@extends('layouts.main_layout')
@section('title', $product->title)
@section('content')
    <div class="row">
        <div class="col-6">
            <div class="row">
                @foreach($product->images as $image)
                    <div class="col-12 col-md-6 center-block mb-3 ">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img" src="/upload/images/{{$image}}" alt="Изображение {{$product->title}}">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-6">
            <h2>{{$product->title}}</h2>
            <p>{{$product->description}}</p>
            <h4>Категории:</h4>
            <ul>
                @foreach($categories as $cat)
                    <li><a href="/category/{{$cat->id}}">{{$cat->title}}</a></li>
                @endforeach
            </ul>
            <h4>Цена: {{$product->price}}</h4>
            <h6>Остаток: {{$product->stock}}</h6>
            @if($product->stock)
                <a href="/cart/{{$product->id}}" class="btn btn-primary">buy</a>
            @endif
        </div>

    </div>
@endsection
