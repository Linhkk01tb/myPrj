<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanphamController;
use App\Http\Controllers\DanhmucsanphamController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});







//route đăng nhập admin
Route::get('/admincp/login','App\Http\Controllers\AdminLoginController@login')->name('admincp.login');
//route đăng nhập admin
Route::get('/admincp/logout','App\Http\Controllers\AdminLoginController@logout')->name('admincp.logout');
//route check tk mk admin
Route::post('/admincp','App\Http\Controllers\AdminLoginController@loginPost')->name('admincp');

Route::get('/admincp','App\Http\Controllers\AdminLoginController@login')->name('admincp');

//trang chủ trang adminn
Route::get('/admincp/home','App\Http\Controllers\AdminLoginController@home')->name('admincp.home');
//route quản lý danh mục
Route::resource('/admincp/danhmuc', DanhmucsanphamController::class);
//route quản lý sản phẩm
Route::resource('/admincp/sanpham', SanphamController::class);
//quản lý đơn hàng
Route::get('/admincp/donhang','App\Http\Controllers\DonhangController@donhang');
//xem chi tiết đơn hàng
Route::get('/admincp/chitietdonhang/{id_donhang}','App\Http\Controllers\DonhangController@chitietdonhang');
//duyệt đơn
Route::get('/admincp/duyetdon/{id_donhang}','App\Http\Controllers\DonhangController@duyetdon');
//huỷ đơn
Route::get('/admincp/huydon/{id_donhang}','App\Http\Controllers\DonhangController@huydon');
//Khôi phục đơn hàng
Route::get('/admincp/khoiphuc/{id_donhang}','App\Http\Controllers\DonhangController@khoiphuc');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//trang chủ trang người dùng
Route::get('/','App\Http\Controllers\SanphamController@hienthi')->name('pages.home');
Route::post('/','App\Http\Controllers\SanphamController@hienthi')->name('pages.home');
//sản phẩm theo danh mục
Route::get('/danhmucsanpham/{id_danhmuc}','App\Http\Controllers\DanhmucsanphamController@show_danhmuc');
//chi tiết
Route::get('/chitietsanpham/{id_sanpham}','App\Http\Controllers\SanphamController@chitietsanpham');
//thêm giỏ hàng
Route::post('/themgiohang','App\Http\Controllers\GiohangController@themgiohang');
//hiển thị giỏ hàng
Route::get('/hienthigiohang','App\Http\Controllers\GiohangController@hienthigiohang');
//xoá hàng khỏi giỏ
Route::get('/xoahangkhoigio/{rowId}','App\Http\Controllers\GiohangController@xoahangkhoigio');
//cập nhật số lượng
Route::post('/capnhatsoluongmua','App\Http\Controllers\GiohangController@capnhatsoluongmua');


//Thanh toán giỏ hàng
//Đăng nhập
Route::get('/dangnhapthanhtoan','App\Http\Controllers\ThanhtoanController@dangnhapthanhtoan');
Route::post('/dangnhap','App\Http\Controllers\ThanhtoanController@dangnhap');
//Đăng ký
Route::get('/dangky','App\Http\Controllers\ThanhtoanController@dangky');
//Đăng xuất
Route::get('/dangxuat','App\Http\Controllers\ThanhtoanController@dangxuat');
//Thêm tài khoản khách hàng
Route::post('/luukhachhang','App\Http\Controllers\ThanhtoanController@luukhachhang');
//thanh toán
Route::get('/thanhtoan','App\Http\Controllers\ThanhtoanController@thanhtoan');
//điền thông tin nhận hàng
Route::post('/luuhoadon','App\Http\Controllers\ThanhtoanController@luuhoadon');
//
Route::get('/xacnhanthanhtoan','App\Http\Controllers\ThanhtoanController@xacnhanthanhtoan');
//Tìm kiếm
Route::post('/timkiem','App\Http\Controllers\SanphamController@timkiem');
//đặt hàng
Route::post('/dathang','App\Http\Controllers\ThanhtoanController@dathang');
//cập nhật
Route::post('/capnhatsoluong','App\Http\Controllers\GiohangController@capnhatsoluongmua1');