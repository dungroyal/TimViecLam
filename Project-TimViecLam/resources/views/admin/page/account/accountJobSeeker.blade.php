@extends('layouts.admin')

@section('title', 'Tài khoản người tìm việc | ')

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
                <h4 class="mb-0 font-size-18">Tài khoản người tìm việc</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Trang quản lý</a></li>
                        <li class="breadcrumb-item active">Tài khoản người tìm việc</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                {{-- <h4 class="card-title">Danh sách tài khoản người tìm việc</h4> --}}
                <table class="table table-bordered" id="users-table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Họ và tên</th>
                            <th>Địa chỉ Mail</th>
                            <th>Số điện thoại</th>
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

    <!--  Modal -->
    <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myExtraLargeModalLabel">Tin tuyển dụng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias corporis doloribus placeat nisi. Reprehenderit corrupti inventore, quae architecto sunt doloremque! Aliquam ut et ab impedit voluptatibus! Nostrum deleniti voluptatum aliquid animi, laboriosam, vero, provident cumque maiores repellendus tempora repudiandae commodi. Nulla eligendi sapiente exercitationem. Expedita culpa hic eum! Alias eveniet ipsum fugit illum nulla eius id inventore. Quod ipsa voluptate aspernatur doloribus tempora harum nam ab, magni optio iusto numquam excepturi. Officia odio dignissimos suscipit dolor, consectetur delectus illo soluta voluptatem distinctio aliquam excepturi deserunt voluptates nobis eaque, vitae commodi harum? Accusantium ab odio eos repudiandae asperiores consequuntur, aspernatur, quod exercitationem sed praesentium velit sit architecto commodi ex qui dolorem cupiditate accusamus tempora? Ullam esse illo doloribus, deleniti deserunt cumque. Quibusdam maxime ad quod tempore cum praesentium eaque possimus voluptas veritatis autem a laboriosam saepe ab, reprehenderit sequi in, eius fugiat beatae. In aut ipsum inventore voluptate mollitia unde libero deleniti illo tempora quam, id sunt debitis ullam assumenda tenetur qui eaque! Atque omnis accusamus cumque, commodi enim ducimus laboriosam necessitatibus! Rerum quibusdam quam ut nesciunt id, voluptatibus cupiditate quos cum voluptate, iusto rem magni praesentium maxime assumenda dolorem impedit consectetur molestiae consequatur consequuntur quasi aperiam ab sapiente ex autem? Itaque deserunt accusantium pariatur dolor voluptatem consequatur molestias saepe necessitatibus numquam accusamus vel hic cum autem, vero, blanditiis iure rerum praesentium ab quasi! Placeat tempore saepe a, impedit unde accusantium aperiam aut consectetur laudantium, obcaecati, eius nihil repudiandae! Nulla minus, ex ab blanditiis voluptatem doloribus eveniet, possimus, modi aperiam odio sit. Eaque minus enim quos facere iste non pariatur ab quas alias quia est eveniet, amet culpa corporis ullam tempore, fuga necessitatibus. Numquam, impedit reprehenderit cumque, harum ratione consequuntur autem, soluta ipsa illum repellat doloribus consectetur ea sint laudantium beatae fugit. Assumenda reprehenderit iusto impedit veniam asperiores velit, dolorum sequi. Vitae similique sint iusto aspernatur exercitationem tempore voluptates architecto consectetur vel odio necessitatibus, cumque sit sed rem aut laborum incidunt laboriosam tenetur deleniti consequuntur nulla quisquam velit commodi. Eum quam vero dolorum dolores? Distinctio fugiat molestias nesciunt sequi, natus deleniti sunt non laborum perferendis quisquam, voluptas quasi ad eveniet unde cupiditate sint fugit eius est delectus nisi libero voluptatem doloribus consectetur dicta! Odit ducimus voluptatum dolor a porro dicta quos dolorum quo odio recusandae vero molestias quaerat iusto sed, non consequatur repudiandae cumque, nisi laudantium itaque deserunt eos earum iure. Dignissimos inventore odit aut ducimus itaque? Id atque officiis vitae labore fuga illum ea fugiat mollitia nulla culpa explicabo omnis ratione in sapiente laborum, corporis at aliquam ducimus minima dolores. Molestias obcaecati quo commodi officiis iusto, debitis ab velit. Pariatur ipsam dolor quo provident cupiditate reprehenderit eveniet quasi, ducimus perspiciatis obcaecati veniam voluptatum quod iste tempora non tempore commodi voluptatibus quidem possimus molestiae error praesentium consectetur rem. Animi, ipsum esse recusandae eos delectus ullam doloribus nam unde vel eius ad officiis vitae ea aspernatur modi quod cum voluptates ab ipsa. Aliquam voluptas, enim odit numquam natus excepturi quo dolores quae aspernatur molestias? Quas eaque sit voluptates tempora. Aperiam, explicabo qui.</p>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary">Cập nhật tin</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.modal -->
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
            ajax: '{!! route('admin.account.job_seeker.data') !!}',
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: true, searchable: false},
                { data: 'name', name: 'name' },
                { data: 'checkEmail', name: 'checkEmail' },
                { data: 'phone', name: 'phone',orderable: false },
                { data: 'status', name: 'status', orderable: true, searchable: false},
                { data: 'update_at', name: 'update_at', orderable: true, searchable: false},
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
    });
</script>
@endpush
