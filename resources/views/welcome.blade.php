<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Laptop 88</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('pubic/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset('frontend/js/html5shiv.js')}}"></script>
    <script src="{{asset('frontend/js/respond.min.js')}}"></script>
    <![endif]-->       

</head><!--/head-->

<body>
	<header id="header"><!--header-->
	
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<img src="{{asset('public/frontend/images/logo1.png')}}" width="139px" height="39px" alt="" />
						</div>											
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							
							<ul class="nav navbar-nav">
							<?php
								$id_khachhang = Session::get('id_khachhang');
								$hoten_khachhang = Session::get('hoten_khachhang');
								if(isset($id_khachhang)){
							?>
							<ul class="nav pull-right top-menu">
							<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
									<span class="username">
										<?php
										echo 'Tài khoản: '. $hoten_khachhang;
										?>
									</span>
									<b class="caret"></b>
								</a>
								<ul class="dropdown-menu extended logout">
									<li><a href="{{URL::to('/dangxuat')}}">Đăng xuất</a></li>
								</ul>
							</li>
							</ul>
							
							<?php
								}else
								{
							?>
								<li><a href="{{URL::to('/dangnhapthanhtoan')}}">Đăng nhập</a></li>
								<li><a href="{{URL::to('/dangky')}}">Đăng ký</a></li>
								<?php
								}
								?>
                                
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="{{route('pages.home')}}">Trang chủ</a></li>
								<?php
									$id_khachhang = Session::get('id_khachhang');
									$hoten_khachhang = Session::get('hoten_khachhang');
									if(isset($id_khachhang)){
									?>
									<li><a href="{{URL::to('/hienthigiohang')}}">Giỏ hàng</a></li>
									
									<?php
										}else
										{
									?>
									<li><a href="{{URL::to('/dangnhapthanhtoan')}}">Giỏ hàng</a></li>
									<?php
										}
									?>					
								
								
								<li><a href="#">Liên hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
                        
							<form action="{{URL::to('/timkiem')}}" method="post">
								{{csrf_field()}}
							<div class="search-box pull-right" >
                            <input type="search" name="tukhoa" placeholder="Tìm kiếm sản phẩm" aria-label="Search" aria-describedby="search-addon" />
                            <input type="submit" name="timkiem" class="btn btn-default btn-sm" value="Tìm kiếm">
							</div>
							</form>
                        
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Laptop</span>88</h1>
									<h2>Mua hàng trực tuyến miễn phí</h2>
									<p>Website laptop uy tín hàng đầu Châu Á</p>
									
								</div>
								<div class="col-sm-6">
									<img src="{{asset('public/frontend/images/maytinh1.jpg')}}" width="484px" height="350px" alt="" />
									
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Laptop</span>88</h1>
									<h2>100% chất lượng cao</h2>
									<p>Vượt tầm châu Á, vươn ra toàn cầu</p>
									
								</div>
								<div class="col-sm-6">
									<img src="{{asset('public/frontend/images/maytinh2.jpg')}}" width="484px" height="350px"alt="" />
	
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Laptop</span>88</h1>
									<h2>Đỉnh cao công nghệ</h2>
									<p>Với sự đồng hành của các gã khổng lồ trong lĩnh vực công nghệ </p>
									
								</div>
								<div class="col-sm-6">
									<img src="{{asset('public/frontend/images/maytinh3.jpg')}}" width="484px" height="350px" alt="" />
									
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <img src="{{asset('public/frontend/images/nhohon.jpg')}}" width="20px" height="20px" alt="" />
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <img src="{{asset('public/frontend/images/lonhon.jpg')}}" width="20px" height="20px" alt="" />
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			
			<div class="row">
					@yield('noslider')
				<div class="col-sm-3">
					@yield('slider')
				</div>
				<div class="col-sm-9 padding-right">
					@yield('content')
					
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<div class="companyinfo">
							<h2><span>laptop</span>88</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-9">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('public/frontend/images/laptop1.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('public/frontend/images/laptop1.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('public/frontend/images/laptop1.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{asset('public/frontend/images/laptop1.png')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>			
				</div>
			</div>
		</div>
	</footer><!--/Footer-->
	

  
    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
	<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
</body>
</html>