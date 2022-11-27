@extends('pages.taikhoan.form_taikhoan')
@section('form')
<div class="reg-w3">
<div class="w3layouts-main">
	<h2>Đăng ký</h2>
		<form action="{{URL::to('/luukhachhang')}}" method="post" >
            {{csrf_field()}}
			<input type="text" class="ggg" name="hoten" placeholder="Họ tên" required="">
			<input type="email" class="ggg" name="email" placeholder="Email" required="@">
			<input type="text" class="ggg" name="sodienthoai" placeholder="Số điện thoại" maxlength="10" minlength="10" required="">
            <input type="text" class="ggg" name="diachi" placeholder="Địa chỉ" required="">
			<input type="password" class="ggg" name="password" placeholder="Mật khẩu" required="">
			
				<div class="clearfix"></div>
				<input type="submit" value="Đăng ký" name="register">
		</form>
		<p>Bạn đã có tài khoản?<a href="{{URL::to('/dangnhapthanhtoan')}}">Đăng nhập ngay</a></p>
</div>
</div>
@endsection
