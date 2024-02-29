<section class="section brand" aria-label="brand">
    <div class="container">
        <h4>Thương Hiệu Nổi Bật</h4>
        <p class="thanhp">Mặt hàng giày các thương hiệu nổi
            bật</p>

        <div class="bran__list">
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
        </div>

    </div>
    <div class="image_res">
        <img src="https://cdn.authentic-shoes.com/wp-content/uploads/2023/09/Adidas-Yeezy-Slide-2048x648.webp" alt />
    </div>
</section>
