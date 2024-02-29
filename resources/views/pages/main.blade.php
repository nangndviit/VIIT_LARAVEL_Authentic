<main>
    <article>
        <!--- #giới thiệu-->
        @include('pages.main_list.slider')

        <!-- hãng sản phẩm -->

        @include('pages.main_list.wrapper')

        <!-- Sản phẩm1-->

        <section class="section brand" aria-label="brand">
            <div class="container">
                <h4>Giày chính hãng Nike 2023</h4>
                <p class="thanhp">
                    Mẫu giày Nike Jordan 1, Air Force 1, các sản phẩm
                    bóng rổ,… mới
                    nhất 2023 với giá cực tốt
                </p>

                <ul class="grid-list">
                    @foreach ($products as $product)
                        @if ($product->category->Name_Catogory == 'Giày Nike')
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
                        @endif
                    @endforeach
                </ul>

                <div class="xem">
                    <button class="btnn">
                        <a>Xem Tất Cả</a><i class="fa-solid fa-angle-right"></i>
                    </button>
                </div>
            </div>
        </section>

        <!-- Thương hiệu -->

        @include('pages.main_list.brand')

        <!-- sản phẩm3 -->

        <section class="section brand" aria-label="brand">
            <div class="container">
                <h4>Giày Sneaker nổi bật</h4>
                <p class="thanhp">Mặt hàng giày các thương hiệu nổi
                    bật</p>

                <ul class="grid-list">
                    @foreach ($products as $product)
                        @if ($product->category->Name_Catogory == 'Giày Sneaker')
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
                        @endif
                    @endforeach
                </ul>

                <div class="xem1">
                    <button class="btnn">
                        <b>Xem Tất Cả</b>
                        <i class="fa-solid fa-angle-right"></i>
                    </button>
                </div>
                <div class="image_res">
                    <img src="https://cdn.authentic-shoes.com/wp-content/uploads/2023/11/retro-4-olive-3-1-2048x1331.webp"
                        alt />
                </div>
            </div>

        </section>

        <!-- sản phẩm4 -->

        <section class="section brand" aria-label="brand">
            <div class="container">
                <h4>Yeezy by Kanye West</h4>
                <p class="thanhp">Yeezy 350 và dép Yeezy cho mùa hè
                    2023</p>

                <ul class="grid-list">
                    @foreach ($products as $product)
                        @if ($product->category->Name_Catogory == 'Giày Adidas')
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
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="xem1">
                <button class="btnn">
                    <a>Xem Tất Cả</a>
                    <i class="fa-solid fa-angle-right"></i>
                </button>
            </div>
            <div class="image_res">
                <img src="https://bazaarvietnam.vn/wp-content/uploads/2022/09/top-3-thuong-hieu-giay-sneaker-noi-dia-duoc-long-gioi-tre-viet-8.jpg"
                    alt />
            </div>
        </section>

        <!-- phụ kiện -->

        <section class="section brand" aria-label="brand">
            <div class="container">
                <h4>Phụ kiện</h4>
                <p class="thanhp">Mặt hàng phụ kiện các thương hiệu nổi
                    bật</p>

                <ul class="grid-list">
                    @foreach ($products as $product)
                        @if ($product->category->Name_Catogory == 'Phụ Kiện')
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
                        @endif
                    @endforeach
                </ul>
                <div class="xem">
                    <button class="btnn">
                        <a>Xem Tất Cả</a>
                        <i class="fa-solid fa-angle-right"></i>
                    </button>
                </div>
            </div>
        </section>

        <!-- sự kiện -->

        @include('pages.main_list.new')
    </article>
</main>
