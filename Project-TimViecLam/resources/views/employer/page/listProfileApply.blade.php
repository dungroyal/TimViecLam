@extends('layouts.admin')

@section('title', 'Hồ sơ ứng tuyển | ')

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
                <h4 class="mb-0 font-size-18">Danh sách hồ sơ ứng tuyển</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Trang quản lý</a></li>
                        <li class="breadcrumb-item active">Danh sách hồ sơ ứng tuyển</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Tất cả hồ sơ ứng tuyển mới!</h4>
                <table class="table table-bordered" id="all-profile-apply">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên ứng viên</th>
                            <th>Tên công việc</th>
                            <th>Trạng thái</th>
                            <th>Thời gian</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>

    <!--  Modal -->
    <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div id="profile-job-seeker" class="modal-dialog modal-xl modal-dialog-scrollable">
            {{-- Load Ajax --}}
        </div>
    </div>
    <!-- /.modal -->
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
            ajax: '{!! route('employer.listProfileApply.data') !!}',
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: true, searchable: false},
                { data: 'name_jsk', name: 'name_jsk' },
                { data: 'name_job', name: 'name_job' },
                { data: 'status', name: 'status', searchable: false},
                { data: 'date', name: 'date', orderable: true, searchable: false},
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
    });

    function deleteConfirmation(id) {
        swal({
            title: "Xóa tin tuyển dụng?",
            text: "Tin bạn xóa sẽ không khôi phục lại được!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Xóa",
            cancelButtonText: "Hủy bỏ!",
            reverseButtons: !0
        }).then(function (e) {
            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: 'POST',
                    url: "{!! route('employer.delJobPost') !!}",
                    data: {
                        _token: CSRF_TOKEN,
                        id: id
                    },
                    dataType: 'JSON',
                    success: function (results) {
                        $('#users-table').DataTable().ajax.reload();
                        if (results.success === true) {
                            swal({
                                title: "Chúc mừng!",
                                text: results.message,
                                type: "success",
                                showConfirmButton: false,
                                toast: true,
                                position: "bottom-end",
                                timer: 3000
                            })
                        } else {
                            swal("Xóa không thành công!", results.message, "error");
                        }
                    }
                });
            } else {
                e.dismiss;
            }
        }, function (dismiss) {
            return false;
        })
    }

    function showModal(id) {
        $.ajax({
            type: 'get',
            dataType: 'html',
            url: 'job-seeker-by-id/'+id,
            success:function(response){
                $('#profile-job-seeker').html(response);
            }
        });
    }
</script>
@endpush
