@extends('home')
@section('brand_content')
    @foreach ($brands as $brand)
        <div class="bran__item">
            <div class="bran__top">
                <div class="bran__image">
                    <img src="{{ $brand->Anh_Brand }}" alt="{{ $brand->Name_Brand }}" />
                </div>
            </div>
            <h3 class="bran__name">{{ $brand->Name_Brand }}</h3>
        </div>
    @endforeach
@endsection
