<header class="header-desktop" id="custom_header_ntd">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <form class="form-header" action="" method="POST">
                    <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                    <button class="au-btn--submit" type="submit">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </form>
                <div class="header-button">
                    <div class="noti-wrap">
                        <a href="/" class="noti__item " id="custom-btn">
                            <i class="zmdi zmdi-home"></i>
                            <p>Trang chủ</p>
                        </a>

                        <a href="/job"class="noti__item " id="custom-btn">
                            <i class="zmdi zmdi-case-check"></i>
                            <p>Tuyển dụng</p>
                        </a>

                        <a href="#"class="noti__item " id="custom-btn">
                            <i class="zmdi zmdi-accounts-list"></i>
                            <p>Ứng viên</p>
                        </a>
                        
                        <div class="noti__item js-item-menu" title="Thông báo">
                            <?php $count=0; ?>
                            @foreach ($ungtuyen as $item)
                                <?php $count+=1; ?>
                            @endforeach
                            <i class="zmdi zmdi-notifications"></i>
                            <span class="quantity"><?=$count;?></span>
                            <div class="notifi-dropdown js-dropdown">
                                <div class="notifi__title">
                                    <p>Bạn có <?=$count;?> thông báo mới</p>
                                </div>
                                @foreach ($ungtuyen as $item)
                                <a href="/nha-tuyen-dung/ung-tuyen/{{{$item->idCongviec}}}">
                                    <div class="notifi__item">
                                        <div class="bg-c2 img-cir img-40">
                                            <i class="zmdi zmdi-account-box"></i>
                                        </div>
                                        <div class="content">
                                            <p><strong>{{$item->hoTen}}</strong> đã gửi đơn ứng tuyển công việc của bạn.</p>
                                            <span class="date">{{$item->date}}</span>
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                                <div class="notifi__footer">
                                    <a href="#">Xem tất cả</a>
                                </div>
                            </div>
                        </div>

                        <a href="/logout_ntd" class="noti__item" title="Đăng xuất">
                            <i class="zmdi zmdi-sign-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>