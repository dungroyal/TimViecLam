
    <div class="float-left">
        <svg width="3rem" height="4rem" viewBox="0 0 16 16"
            class="bi bi-book-half p-2" fill="currentColor"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M8.5 2.687v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
        </svg>
        
    </div>
    <div class="col-8">
        <div class="mb-1 text-left">
            <strong>{{$request->university}}</strong> 
            (Từ {{$request->month_start}}/{{$request->year_start}} - {{$request->graduation_month}}/{{$request->graduation_year}})
        </div>
        <div class="row font-size-14">
            <div class="col-md-6 mb-1 text-left">
                <strong>Tên chứng chỉ:</strong> {{$request->certificate}}
            </div>
            <div class="col-md-6 mb-1 text-left">
                <strong>Khoa:</strong> {{$request->faculty}}
            </div>
            <div class="col-md-6 text-left">
                <strong>Ngành:</strong> {{$request->major}}
            </div>
            <div class="col-md-6 text-left">
                <strong>Xếp loại:</strong> {{$request->ranked}}
            </div>
        </div>
    </div>
    <div class="ml-auto">
        <a href="" data-toggle="tooltip" title="Chỉnh sửa">
            <svg width="1.4rem" height="2.5rem" viewBox="0 0 16 16" class="bi mt-3 bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
              </svg>
        </a>
        <a href="" data-toggle="tooltip" title="Xóa">
            <svg width="1.4rem" height="1.4rem" viewBox="0 0 16 16" class="bi text-danger ml-2 mr-3 mt-3 bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
              </svg>
        </a>
    </div>