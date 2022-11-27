@extends('slider')
@section('content')		
<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Sản phẩm mới nhất</h2>
						@foreach($sanpham as $key => $sp)
						<a href="{{URL::to('chitietsanpham/'.$sp->id)}}">
							<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="{{URL::to('public/upload/sanpham/'.$sp->hinhanh)}}" alt="" height="200px" width="300px"/>
										<h4 style="color:orange">{{number_format($sp->dongia).' VNĐ'}}</h4>
										<p style="color: blue; font-size:15px">{{ $sp->tensanpham}}</p>
										<a href="{{URL::to('chitietsanpham/'.$sp->id)}}" class="btn btn-default add-to-cart">Xem chi tiết</a>
									</div>
									
								</div>
							</div>
							</div>
						@endforeach
					</div><!--features_items-->
					</a>
					<div class="row">
        
						<div class="col-sm-5 text-center">
						
						</div>
						<div class="col-sm-7 text-right text-center-xs">                
						<ul class="pagination pagination-sm m-t-none m-b-none">
							<nav aria-label="Page navigation">{!!$sanpham->links()!!}</nav>
						</ul>
						</div>
					</div>
@endsection
