@extends('pages.taikhoan.form_taikhoan')
@section('form')

<div class="log-w3">

<div class="w3layouts-main">
	<h2>Đăng nhập</h2>
	    <form action="{{URL::to('/dangnhap')}}" method="post">
            {{csrf_field()}}
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Tài khoản') }}</label>
            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" required autofocus placeholder="Email">
            <br>
            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Mật khẩu') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
            <span><input type="checkbox" />Nhớ mật khẩu</span>
			<h6><a href="#">Quên mật khẩu?</a></h6>
				<div class="clearfix"></div>
				<input type="submit" value="Đăng nhập" name="login">
                <p>Bạn chưa có tài khoản?<a href="{{URL::to('/dangky')}}">Đăng ký ngay</a></p>
                
		</form>
</div>
</div>
@endsection