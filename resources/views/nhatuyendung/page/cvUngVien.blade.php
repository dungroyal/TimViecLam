@extends('nhatuyendung.main')
@section('content')

<section class="au-breadcrumb m-t-75">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Hồ sơ chi tiết ứng viên: {{ $listungVien->hoTen }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="show">
    {{-- {{ $listungVien }} --}}
</section>
@endsection
