@extends('layouts.admin')

@section('title', 'Danh sách tin | ')

@section('header')
@include('admin.element.header')
@endsection

@section('sidebar')
@include('admin.element.sidebar')
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
                <h4 class="card-title">Danh sách công ty chờ duyệt</h4>
                <table class="table table-bordered" id="users-table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên công ty</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Tỉnh thành</th>
                            <th>Công việc</th>
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
</div>
@endsection

@push('scripts')
<script>

    $(function() {
        $('#users-table').DataTable({
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
            ajax: '{!! route('admin.new.company.data') !!}',
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: true, searchable: false},
                { data: 'name_company', name: 'name_company' },
                { data: 'email_contact', name: 'email_contact' },
                { data: 'phone_contact', name: 'phone_contact' },
                { data: 'city', name: 'city', orderable: false, searchable: false},
                { data: 'count_post', name: 'count_post' },
                { data: 'update_at', name: 'update_at', orderable: true, searchable: false},
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
    });
</script>
@endpush
