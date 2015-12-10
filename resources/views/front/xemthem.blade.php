@extends('front.layouts.base')

@section('head.title')
Trang xem thêm sản phẩm
@stop

@section('body.content')
<?php
	//$data = $datas->book;
	$route_detail = 'home.detail';
	$route_bestseller = 'home.bestseller';
	$route_newbook	=	'home.newbook';
	$route_comming	=	'home.comming';
	$route_discount	=	'home.discount';
	$route_author     =	'home.author';
	$route_publisher  =	'home.publisher';
?>
	<div class="contain detai">
		<!--Này là thống kê lúc click xem thêm-->
		<div class="ltbanner">

			{{ $name or 'Default' }}
		</div>
		<div class="filterbox wrap is-box">
			<div class="filterbar mxClrAft wrap">
				<div class="link left">
					<div class="listlink">
						<a href="{!!asset(' ')!!}" class="cat">
							Trang chủ
							<span class="fa fa-angle-double-right"></span>
						</a>
						<a  class="cat">
							{{ $name or 'Default' }}
							<span class="fa fa-angle-double-right"></span>
						</a>
					</div>
					<div class="clear"></div>
				</div>
				<div class="fil slfilter right">
					<select name="TenDanhSach" class="is-sl" value="Sắp xếp">
						<option value="Sách mới">Sách mới</option>
						<option value="a-z">Sắp xếp theo: A - Z</option>
						<option value="">Sắp xếp theo: Z - A</option>
						<option value="">Giá: cao đến thấp</option>
						<option value="">Giá: thấp đến cao</option>
						<option value="">Giá giảm: cao đến thấp</option>
						<option value="">Giá giảm: thấp đến cao</option>
						<option value="">Bán chạy nhất</option>
					</select>
				</div>
				<div class="numbook slfilter right">
					<select name="Soluong" class="is-sl" value="Sắp xếp">
						<option value="5">Hiển thị: 5</option>
						<option value="10">Hiển thị: 10</option>
						<option value="20">Hiển thị: 20</option>
						<option value="">Hiển thị: Tất cả</option>
					</select>
				</div>
				<div class="viewmode right">
					<div class="fa fa-th atv"></div>
					<div class="fa fa-list"></div>
					<div class="clear"></div>
				</div>
			</div>
			<div class="gridbook wrap">
				<div class="grid mxClrAft">
					@foreach($data as $item)
						@include('front.partials.book_item_info')
					@endforeach
				</div>
				<div class="page_number">
	        <div class="page_num">
	        	<div class="num numprev fa fa-angle-double-left hide"></div>
	        	<div class="num numpage atv">1</div>
	        	<div class="num numpage">2</div>
	        	<div class="num numpage">3</div>
	        	<div class="num numpage">4</div>
	        	<div class="num numpage">5</div>
	        	<div class="num numnext fa fa-angle-double-right"></div>
	        	<div class="clear"></div>
	        </div>
	      </div>
			</div>
		</div>
	</div>
@stop