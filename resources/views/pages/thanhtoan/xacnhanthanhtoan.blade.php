@extends('welcome')
@section('noslider')
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->
					
				
			
			<div class="review-payment">
				<h2>Xem lại giỏ hàng</h2>
                <div class="table-responsive cart_info">
                <?php
                $content = Cart::content();
                ?>
               
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image" width="250px">Tên sản phẩm</td>
                            <td >Hình ảnh</td>
							<td class="price">Giá</td>
							<td class="quantity" >Số lượng</td>
							<td>Thành tiền</td>
                            <td>Quản lý</td>
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
								<form action="{{URL::to('/capnhatsoluong')}}" method="post">
									{{csrf_field()}}
									<input class="cart_quantity_input" type="number" name="soluongmua" value="{{$value->qty}}" min="1" max="{{$value->soluong}}" autocomplete="off">
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
			</div>
            <div class="review-payment">
            <h4>Hình thức thanh toán</h4>
                <form action="{{URL::to('/dathang')}}" method="post">
                    {{csrf_field()}}
                    <span>
                        <label><input type="radio" name="hinhthuc" value="1" checked>Trực tiếp</label>
                    </span>
                    <br>
                    <input type="submit" class="btn btn-primary btn-sm" value="Thanh Toán">
                    <br>
                    <br>
                    <br>
                </form>
			</div>
		</div>
	</section> <!--/#cart_items-->


@endsection