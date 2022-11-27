@extends('slider')
@section('content')		
<div class="features_items"><!--features_items-->
                        @foreach($danhmuc_tenhienthi as $key => $tenhienthi)
						<h2 class="title text-center">{{$tenhienthi->tendanhmuc}}</h2>
                        @endforeach
						@foreach($danhmuc_theo_id as $key => $sp)
                        <a href="{{URL::to('chitietsanpham/'.$sp->id)}}">
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="{{URL::to('public/upload/sanpham/'.$sp->hinhanh)}}" width="300px" height="200px" alt="" />
										<h4 style="color:orange">{{number_format($sp->dongia).' VNĐ'}}</h4>
										<p style="color: blue; font-size:15px">{{ $sp->tensanpham}}</p>
										<a href="{{URL::to('chitietsanpham/'.$sp->id)}}" class="btn btn-default add-to-cart">Xem chi tiết</a>
									</div>
									
								</div>
							</div>
						</div>
					</a>
						@endforeach
					</div><!--features_items-->
					<div class="row">
						
						<div class="col-sm-5 text-center">
						
						</div>
						<div class="col-sm-7 text-right text-center-xs">                
						<ul class="pagination pagination-sm m-t-none m-b-none">
							<nav aria-label="Page navigation">{!!$danhmuc_theo_id->links()!!}</nav>
						</ul>
						</div>
					</div>
                    
@endsection
