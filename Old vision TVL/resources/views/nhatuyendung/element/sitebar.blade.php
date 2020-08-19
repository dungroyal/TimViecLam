<aside class="menu-sidebar2">
	<div class="logo">
		<a href="/"  title="Quay về trang chủ">
			<img src="{{ asset('home') }}/img/logo.png" alt="">
		</a>
	</div>
	<div class="menu-sidebar2__content js-scrollbar1">
		<div class="account2">
			<div class="image img-cir img-120">
				<img src="{{ asset('images') }}/{{$info_cty[0]->logoCty }}" alt="" />
			</div>
			<h4 class="name">{{ Auth::guard('nhatuyendung')->user()->tenCty}}</h4>
					
			{{-- <a href="#">Sign out</a> --}}
		</div>
		<nav class="navbar-sidebar2">
			<ul class="list-unstyled navbar__list">
				<li class="active has-sub">
					<a class="js-arrow" href="{{ Route("nhatuyendung") }}">
						<i class="fa fa-line-chart" aria-hidden="true"></i>Quản lý chung
					</a>
				</li>
				<li class="has-sub">
					<a class="js-arrow" href="#">
						<i class="fa fa-handshake-o" aria-hidden="true"></i>Tuyển dụng
						<span class="arrow">
							<i class="fas fa-angle-down"></i>
						</span>
					</a>
					<ul class="list-unstyled navbar__sub-list js-sub-list">
						<li>
							<a href="/nha-tuyen-dung/add-tuyen-dung">
								<i class="fa fa-plus-circle" aria-hidden="true"></i>Đăng tuyển dụng mới</a>
						</li>
						<li>
							<a href="/nha-tuyen-dung/tin-tuyen-dung">
								<i class="fa fa-list-alt" aria-hidden="true"></i>Tất cả tin tuyển dụng</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="/job">
						<i class="fa fa-search-plus" aria-hidden="true"></i>Tìm kiếm ứng viên</a>
				</li>
				<li class="has-sub">
					<a class="js-arrow" href="#">
						<i class="fa fa-users" aria-hidden="true"></i>Quản lý hồ sơ
						<span class="arrow">
							<i class="fas fa-angle-down"></i>
						</span>
					</a>
					<ul class="list-unstyled navbar__sub-list js-sub-list">
						<li>
							<a href="button.html">
								<i class="fa fa-bookmark" aria-hidden="true"></i>Hồ sơ đã lưu</a>
						</li>
						<li>
							<a href="button.html">
								<i class="fa fa-eye" aria-hidden="true"></i>Hồ sơ đã xem</a>
						</li>
						<li>
							<a href="{{ Route("HoSoCongViec") }}">
								<i class="fa fa-paper-plane" aria-hidden="true"></i>Hồ sơ ứng tuyển</a>
						</li>
					</ul>
				</li>

				<li class="has-sub">
					<a class="js-arrow" href="#">
						<i class="fa fa-info-circle" aria-hidden="true"></i>Thông tin công ty
						<span class="arrow">
							<i class="fas fa-angle-down"></i>
						</span>
					</a>
					<ul class="list-unstyled navbar__sub-list js-sub-list">
						<li>
							<a href="button.html">
								<i class="fa fa-pencil-square-o" aria-hidden="true"></i>Cập nhật thông tin</a>
						</li>
						<li>
							<a href="button.html">
								<i class="fa fa-key" aria-hidden="true"></i>Đổi mật khẩu</a>
						</li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</aside>


