<section class="section brand" aria-label="brand">
    <div class="container">
        <h4>Tin Tức - Sự Kiện</h4>
        <p class="thanhp">Tin tức phổ biến</p>

        <div class="new__list">
            @foreach ($events as $event)
                <div class="new__item">
                    <div class="new__top">
                        <div class="new__image">
                            <img src="{{ $event->Anh_Events }}" alt="{{ $event->Ten_Events }}" />
                        </div>
                    </div>
                    <h5 class="new__name">
                        <p>
                            <b>{{ $event->Ten_Events }}</b>
                        </p>
                    </h5>
                </div>
            @endforeach
        </div>
    </div>
</section>
