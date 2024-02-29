@extends('home')
@section('content')
    @foreach ($products as $product)
        <li>
            <div class="product-card">
                <div class="card-banner">
                    <div class="like-img">
                        <img src="{{ $product->Anh_SP1 }}" />
                    </div>
                    <div class="top-img">
                        <img src="{{ $product->Anh_SP2 }}" alt="Commodo leo sed porta" />
                    </div>
                    <i class="fa-regular fa-heart"></i>
                </div>
                <div class="card-content">
                    <p>{{ $product->category->Name_Catogory }}</p>
                    <a href="#">{{ $product->Ten_SP }}</a>
                    <bdi>{{ $product->Gia_SP }} VNĐ</bdi>
                </div>
            </div>
        </li>
    @endforeach
@endsection
