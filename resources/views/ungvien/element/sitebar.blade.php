<aside class="menu-sidebar2">
	<div class="logo">
		<a href="#">
			<img src="{{ asset('home') }}/img/logo.png" alt="">
		</a>
	</div>
	<div class="menu-sidebar2__content js-scrollbar1">
		<div class="account2">
			<div class="image img-cir img-120">
				<img src="{{ asset('images') }}/51679309_714918532235468_4688277981238394880_o.jpg" alt="Đoàn Quốc Dũng" />
			</div>
			<h4 class="name">Đoàn Quốc Dũng</h4>
			
			<a href="#">Sign out</a>
			
		</div>
		{{-- <p>Hoàn thiệ hồ sơ</p>
		<div class="progress mr-2">
			<div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
		</div> --}}


		<nav class="navbar-sidebar2">
			<ul class="list-unstyled navbar__list">
				<li class="active has-sub">
					<a class="js-arrow" href="/ung-vien">
						<i class="fa fa-line-chart" aria-hidden="true"></i>Quản lý chung
					</a>
				</li>
				
				<li>
					<a href="/quan-ly-ho-so">
						<i class="fa fa-search-plus" aria-hidden="true"></i>Quản lý hồ sơ</a>
				</li>
				
				<li class="has-sub">
					<a class="js-arrow" href="#">
						<i class="fa fa-users" aria-hidden="true"></i>Quản lý việc làm
						<span class="arrow">
							<i class="fas fa-angle-down"></i>
						</span>
					</a>
					<ul class="list-unstyled navbar__sub-list js-sub-list">
						<li>
							<a href="/viec-lam-da-ung-tuyen">
								<i class="fa fa-paper-plane" aria-hidden="true"></i>Việc làm đã ứng tuyển</a>
						</li>
						<li>
							<a href="/viec-lam-da-luu">
								<i class="fa fa-bookmark" aria-hidden="true"></i>Việc làm đã lưu</a>
						</li>
						<li>
							<a href="/viec-lam-da-xem">
								<i class="fa fa-eye" aria-hidden="true"></i>Việc làm đã xem</a>
						</li>
					</ul>
				</li>

				<li class="has-sub">
					<a class="js-arrow" href="#">
						<i class="fa fa-user-circle" aria-hidden="true"></i>Thông tin cá nhân
						<span class="arrow">
							<i class="fas fa-angle-down"></i>
						</span>
					</a>
					<ul class="list-unstyled navbar__sub-list js-sub-list">
						<li>
							<a href="/cap-nhat-thong-tin">
								<i class="fa fa-pencil-square-o" aria-hidden="true"></i>Cập nhật thông tin</a>
						</li>
						<li>
							<a href="/doi-mat-khau">
								<i class="fa fa-key" aria-hidden="true"></i>Đổi mật khẩu</a>
						</li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</aside>