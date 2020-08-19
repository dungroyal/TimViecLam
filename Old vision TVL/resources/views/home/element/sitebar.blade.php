<div class="filter nice-scroll">
	<div class="filter__title">
		<h5><i class="fa fa-filter"></i> Bộ lọc thần kỳ</h5>
	</div>
	<form action="/search_CongViec" method="post">
		@csrf
		<div class="filter__search">
			<input type="text" name="keyword"  placeholder="Tìm kiếm ....">
		</div>
		<div class="filter__select">
			<select>
				<option value="">Ngành nghề</option>
				@foreach ($Nghanhnghe as $item)
					<option value="{{ $item->id }}">{{ $item->name }}</option>
				@endforeach
			</select>
		</div>

		<div class="filter__select">
			<select>
				<option value="">Nơi làm việc</option>
				@foreach ($tinhThanhPho as $item)
					<option value="{{ $item->matp }}">{{ $item->name }}</option>
				@endforeach
			</select>
		</div>

		{{-- <div class="filter__select">
			<select>
				<option value="">Mức lương</option>
				<option value="">Dưới 5 triệu</option>
				<option value="">5 triệu đến 10 triệu</option>
				<option value="">10 triệu đến 15 triệu</option>
				<option value="">15 triệu đến 20 triệu</option>
				<option value="">Trên 20 triệu</option>
			</select>
		</div> --}}
		{{-- <div class="filter__location">
			<input type="text" placeholder="Location">
			<i class="fa fa-map-marker"></i>
		</div> --}}
		<div class="filter__btns">
			<button type="submit">Lọc công việc</button>
			<a type="submit" class="remove_filter" href="/job">Xóa bộ lọc</a>
		</div>
	</form>
</div>
