@extends('layouts.admin')

@section('title', 'Danh sách tin | ')

@section('header')
@include('employer.element.header')
@endsection

@section('sidebar')
@include('employer.element.sidebar')
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Cập nhật thông tin</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Trang quản lý</a></li>
                        <li class="breadcrumb-item active">Cập nhật thông tin chung</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Danh sách tin tuyển dụng</h4>
                <table class="table table-bordered" id="users-table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã bài đăng</th>
                            <th>Tên công việc</th>
                            <th>Ngành nghề</th>
                            <th>Lược xem</th>
                            <th>Trạng thái</th>
                            <th>Ngày cập nhật</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection

@push('scripts')
<script>
    $(function() {
        $('#users-table').DataTable({
            "language": {"url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/Vietnamese.json"},
            "processing": true,
            "retrieve": true,
            "serverSide": true,
            'paginate': true,
            'searchDelay': 700,
            "bDeferRender": true,
            "responsive": true,
            "autoWidth": true,
            "pageLength": 5,
            "lengthMenu": [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
            ajax: '{!! route('jobs.anyData') !!}',
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: true, searchable: false},
                { data: 'job_code', name: 'job_code' },
                { data: 'name_job', name: 'name_job' },
                { data: 'career', name: 'career'},
                { data: 'views', name: 'views', searchable: false},
                { data: 'status', name: 'status', orderable: false, searchable: false},
                { data: 'update_at', name: 'update_at', orderable: true, searchable: false},
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
    });
</script>
@endpush
