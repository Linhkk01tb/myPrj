@extends('slider')
@section('content')
@foreach($chitietsp as $key => $dtl)
<div class="product-details"><!--product-details-->
<h2 class="title text-center">Chi tiết sản phẩm</h2>
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{URL::to('public/upload/sanpham/'.$dtl->hinhanh)}}" alt="" />
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								  <div class="carousel-inner">
										<div class="item active">
										  <img src="{{URL::to('public/frontend/images/similar4.jpg')}}" width="85px" height="84px" alt="">
										  <img src="{{URL::to('public/frontend/images/similar5.jpg')}}" width="85px" height="84px" alt="">
										  <img src="{{URL::to('public/frontend/images/similar6.jpg')}}" width="85px" height="84px" alt="">
										</div>
										<div class="item">
										  <img src="{{URL::to('public/frontend/images/similar4.jpg')}}" width="85px" height="84px" alt="">
										  <img src="{{URL::to('public/frontend/images/similar5.jpg')}}" width="85px" height="84px" alt="">
										  <img src="{{URL::to('public/frontend/images/similar6.jpg')}}" width="85px" height="84px" alt="">
										</div>
										<div class="item">
											<img src="{{URL::to('public/frontend/images/similar4.jpg')}}" width="85px" height="84px" alt="">
										  <img src="{{URL::to('public/frontend/images/similar5.jpg')}}" width="85px" height="84px" alt="">
										  <img src="{{URL::to('public/frontend/images/similar6.jpg')}}" width="85px" height="84px" alt="">
										</div>
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev" style="text-decoration:none ;">
                                  <
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next" style="text-decoration:none ;">
                                  >
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								
							<form action="{{URL::to('/themgiohang')}}" method="post">
								{{csrf_field()}}
								<span>
								<p style="color:blue;font-weight:bold;font-size:24px">{{$dtl->tensanpham}}</p>
									<span>Giá: {{number_format($dtl->dongia).' VNĐ'}}</span>
                                    <br>
									<br>
									<br>
									<label>Số lượng:</label>
									<input name="soluongmua" type="number" value="1" min="1" max="{{$dtl->soluong}}"/>
                                    <input name="id_sanpham" type="hidden" value="{{$dtl->id}}"/>
									<?php
									$id_khachhang = Session::get('id_khachhang');
									$hoten_khachhang = Session::get('hoten_khachhang');
									if(isset($id_khachhang)){
									?>
									
									<br>
									<br>
									<button type="submit" class="btn btn-fefault cart">
										Thêm vào giỏ hàng
									</button>
									<?php
										}else
										{
									?>
									<br>
									<br>
									<a class="btn btn-default check_out" href="{{URL::to('/dangnhapthanhtoan')}}">
									
										Thêm vào giỏ hàng
									
									</a>
									<?php
										}
									?>
									
								</span>
								</form>
								
							
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
@endforeach
                    <div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Chi tiết</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >
								<p>{!!$dtl->mota!!}</p>	
							</div>
						</div>
					</div><!--/category-tab-->
                   <div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Sản phẩm liên quan</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
								@foreach($sp_lienquan as $key => $lq)
								<a href="{{URL::to('chitietsanpham/'.$lq->id)}}">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{URL::to('public/upload/sanpham/'.$lq->hinhanh)}}" width="300px" height="200px" alt="" />
													<h4 style="color:orange">{{number_format($lq->dongia).' VNĐ'}}</h4>
													<p style="color: blue; font-size:15px">{{ $lq->tensanpham}}</p>
													<a href="{{URL::to('chitietsanpham/'.$lq->id)}}" class="btn btn-default add-to-cart">Xem chi tiết</a>
												</div>
											</div>
										</div>
										
									</div>
								</a>
									@endforeach
								</div>
							</div>
							
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev" style="text-decoration: none;">
								<
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next" style="text-decoration: none;">
                              	>
							  </a>			
						</div>
					</div><!--/recommended_items--> 	
@endsection