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
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p>Nhập thông tin mua hàng</p>
							<div class="form-two">
								<form action="{{URL::to('/luuhoadon')}}" method="post">
									{{csrf_field()}}
									<input type="text" name="email" placeholder="Email" required>
									<input type="text" name="hoten" placeholder="Họ và tên" required>
									<input type="text" name="sodienthoai" placeholder="Số điện thoại" min="10" max="10" required>
									<input type="text" name="diachi" placeholder="Địa chỉ" required>
									<input type="submit" class="btn btn-primary btn-sm" value="Xác nhận" >
								</form>
							</div>
							
						</div>
					</div>
									
				</div>
			
			<div class="review-payment">
				<br>
			</div>

		</div>
	</section> <!--/#cart_items-->


@endsection