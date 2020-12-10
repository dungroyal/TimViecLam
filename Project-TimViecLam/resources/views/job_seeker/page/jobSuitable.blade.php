@extends('layouts.admin')

@section('title', 'Hồ sơ ứng tuyển | ')

@section('header')
@include('job_seeker.element.header')
@endsection

@section('sidebar')
@include('job_seeker.element.sidebar')
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Công việc phù hợp</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Trang quản lý</a></li>
                        <li class="breadcrumb-item active">Công việc phù hợp</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <table class="table table-bordered" id="all-profile-apply">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Vị trí / Công ty</th>
                            <th>Địa điểm làm việc</th>
                            <th>Mức lương</th>
                            <th>Ngày hết hạn</th>
                        </tr>
                    </thead>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>

    <!--  Modal -->
    {{-- <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div id="profile-job-seeker" class="modal-dialog modal-xl modal-dialog-scrollable">
            {{-- Load Ajax --}}
        </div>
    </div>
    <!-- /.modal --> --}}
</div>

</div>
@endsection

@push('scripts')
<script>

    $(function() {
        $('#all-profile-apply').DataTable({
            "language": {"url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/Vietnamese.json"},
            "processing": true,
            "serverSide": true,
            "lengthMenu": [[8, 15, 25, 50, 100, -1], [8, 15, 25, 50, 100, 'Tất cả']],
            dom: 'lftiprB',
            buttons: [
                { extend: 'excel', text: '<i class="fas fa-file-excel"></i> EXCEL'},
                { extend: 'pdf', text: '<i class="fas fa-file-pdf"></i> PDF' },
                { extend: 'csv', text: '<i class="fas fa-file-csv"></i> CSV'},
                { extend: 'print', text: '<i class="fas fa-print"></i> IN'},
            ],
            ajax: '{!! route('job-seeker.job-suitable') !!}',
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: true, searchable: false},
                { data: 'infoJob', name: 'infoJob' },
                { data: 'location', name: 'location' },
                { data: 'salary', name: 'salary', searchable: false},
                { data: 'last_day', name: 'last_day', orderable: true, searchable: false},
            ]
        });
    });
</script>
@endpush
