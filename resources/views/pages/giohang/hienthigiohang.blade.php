@extends('welcome')
@section('noslider')
<section>
		<div class="container">
			<div class="row">
			
			<div class="col-sm-9 padding-right">
            <section id="cart_items">
            <div class="container">
                <div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{URL::to('/')}}">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
                <?php
                $content = Cart::content();
                ?>
               
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<th class="image" width="250px">Tên sản phẩm</th>
                            <th  width="130px">Hình ảnh</th>
							<th class="price">Giá</th>
							<th class="quantity">Số lượng</th>
							<th>Thành tiền</th>
                            <th>Quản lý</th>
						</tr>
					</thead>
					<tbody>
						@foreach($content as $value)	
						<tr>
							<td class="cart_product">
								<h5>{{$value->name}}</h5>
							</td>
							<td class="cart_description">
                                <img src="{{URL::to('public/upload/sanpham/'.$value->options->hinhanh)}}" width="90" height="70" alt="">
							</td>
							<td class="cart_price">
								<p>{{number_format($value->price)}} VNĐ</p>
							</td>
							<td class="cart_quantity">
								<form action="{{URL::to('/capnhatsoluongmua')}}" method="post">
									{{csrf_field()}}
									<input  class="cart_quantity_input" type="number" name="soluongmua" value="{{$value->qty}}" min="1" autocomplete="off">
                                    <input class="cart_quantity_input" type="hidden" name="rowId" value="{{$value->rowId}}">
									
                                    </form>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">
                                    <?php
                                    $thanhtien = $value->price * $value->qty;
                                    echo number_format($thanhtien).' '.'VNĐ';
                                    ?>
                                </p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{URL::to('/xoahangkhoigio/'.$value->rowId)}}" style="color: black;">Xoá</a>
							</td>
						</tr>
                        @endforeach
					</tbody>
				</table>
			</div>
		</div>
	</section>
    <section id="do_action">
		<div class="container">
			
			<div class="row">

				<div class="col-sm-12">
					<div class="total_area">
						<ul>
							<li>Tổng <span>{{number_format(Cart::subtotalFloat())}} VNĐ</span></li>
							<li>Phí vận chuyển <span>0 VNĐ</span></li>
							<li>Tổng chi phí <span>{{number_format(Cart::subtotalFloat())}} VNĐ</span></li>
						</ul>
                        <div style="text-align: center;">
                        <?php
								$id_khachhang = Session::get('id_khachhang');
								$hoten_khachhang = Session::get('hoten_khachhang');
								if(isset($id_khachhang)){
							?>
							
							<a class="btn btn-default check_out" href="{{URL::to('/thanhtoan')}}">Đặt Hàng</a>
							</ul>
							
							<?php
								}else
								{
							?>
							<a class="btn btn-default check_out" href="{{URL::to('/dangnhapthanhtoan')}}">Đăng nhập</a>
								<?php
								}
							?>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>
@endsection