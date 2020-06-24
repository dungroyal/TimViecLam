<!DOCTYPE html>
<html lang="en">
@include('home.element.head')

<body class="ov-hid">
    <div id="preloder">
        <div class="loader"></div>
    </div>

    @include('home.element.header')
    @include('home.element.sitebar')

    <section class="listing nice-scroll">
        <div class="listing__text__top">
            <div class="listing__text__top__left">
                <h5>Danh Sách Việc Làm</h5>
                <span>125 Công việc được tìm thấy</span>
            </div>
            <div class="listing__text__top__right">Nearby <i class="fa fa-sort-amount-asc"></i></div>
        </div>
        <div class="listing__list">
            @foreach ($list_job as $item)
                <div class="list-items job-item">
                    <div class="list-items__img">
                        <img src="{{ asset('images') }}/{{ $item->logoCty }}" alt="Avatar">
                    </div>
                    <div class="list-items-content">
                        <div class="list-items-content__title text_ellipsis"><a href="/job/{{{ $item->id }}}" title="Nhận viên thiết kế web chuyên nghiệp (Laravel, HTML, CSS)"> {{ $item->tenCongViec }}</a></div>
                        <div class="list-items-content__cty"><a href="/cong-ty/{{{ $item->idNTD }}}"  title="Công Ty Cổ Phần Đầu Tư Hai Lúa">{{ $item->tenCty }}</a></div>
                        <div class="list-items-content-subinfo">
                            <div class="list-items-content-subinfo__wage"><i class="fa fa-money" aria-hidden="true"></i> {{ $item->mucLuong }} triệu</div>
                            <div class="list-items-content-subinfo__time"><i class="fa fa-clock-o" aria-hidden="true"></i> {{ $item->deadline }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
    </section>
    @include('home.element.script')
</body>
</html>