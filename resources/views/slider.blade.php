@extends('welcome')
@section('slider')
                    <div class="left-sidebar">
						<h2>Danh mục sản phẩm</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							@foreach($danhmuc as $key => $cate)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{URL::to('/danhmucsanpham/'.$cate->id_danhmuc)}}">{{$cate->tendanhmuc}}</a></h4>
								</div>
							</div>
                            @endforeach
						</div><!--/category-products-->
					
					</div>
@endsection