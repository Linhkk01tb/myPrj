<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Cart;
use Ramsey\Uuid\Type\Decimal;

session_start();
class ThanhtoanController extends Controller
{
    //
    public function dangnhapthanhtoan(){
        return view('pages.taikhoan.dangnhapthanhtoan');
    }
    public function dangky(){
        return view('pages.taikhoan.dangky');
    }
    public function luukhachhang(Request $request){
        $data = array();
        $data['hoten_khachhang'] = $request->hoten;
        $data['email_khachhang'] = $request->email;
        $data['password_khachhang'] = md5($request->password);
        $data['sodienthoai_khachhang'] = $request->sodienthoai;
        $data['diachi_khachhang'] = $request->diachi;

        $id_khachhang = DB::table('khachhang')->insertGetId($data);
        Session::put('id_khachhang',$id_khachhang);
        Session::put('hoten_khachhang',$request->hoten);

        return Redirect::to('/dangnhapthanhtoan');
    }
    
    public function dangxuat(){
        Session::flush();
        return Redirect::to('/');
    }
    public function dangnhap(Request $request){
        $email = $request->email;
        $password = md5($request->password);
        $result = DB::table('khachhang')->where('email_khachhang',$email)->where('password_khachhang',$password)->first();

       
        if($result){
            Session::put('id_khachhang',$result->id_khachhang);
            Session::put('hoten_khachhang',$result->hoten_khachhang);
            return Redirect::to('/');
        }
        else{
            return Redirect::to('/dangnhapthanhtoan');
        }
        
    }


    //
    public function thanhtoan(){
        return view('pages.thanhtoan.thanhtoan');
    }
    public function xacnhanthanhtoan(){
       	
        return view('pages.thanhtoan.xacnhanthanhtoan');
        
    }
    public function luuhoadon(Request $request){
        $data = array();
        $data['tennguoinhan'] = $request->hoten;
        $data['email'] = $request->email;
        $data['sodienthoai'] = $request->sodienthoai;
        $data['diachinhanhang'] = $request->diachi;

        $id_nhanhang = DB::table('thongtinnhanhang')->insertGetId($data);
        Session::put('id_nhanhang',$id_nhanhang);

        return Redirect::to('/xacnhanthanhtoan');
    }


    public function dathang(Request $request){
        //hình thức thanh toán
        $data = array();
        $data['hinhthuc'] = $request->hinhthuc;
        $data['trangthai'] = 0;
        $id_thanhtoan = DB::table('thanhtoan')->insertGetId($data);
        //hoá đơn
        $id_nhanhang = DB::table('thongtinnhanhang')->orderBy('thongtinnhanhang.id_nhanhang','desc')->first();
        $data_hoadon = array();
        $data_hoadon['id_khachhang'] = Session::get('id_khachhang');
        $data_hoadon['id_nhanhang'] = Session::get('id_nhanhang');
        $data_hoadon['id_thanhtoan'] = $id_thanhtoan;
        $data_hoadon['tongtien'] = Cart::subtotalFloat();
        $data_hoadon['trangthai'] = 0;
        $id_hoadon = DB::table('hoadon')->insertGetId($data_hoadon);
        
        //chi tiết hoá đơn
        $content = Cart::content();
        foreach($content as $value){
         $data_chitiethoadon = array();
        $data_chitiethoadon['id_hoadon'] = $id_hoadon;
        $data_chitiethoadon['id_sanpham'] = $value->id;
        $data_chitiethoadon['tensanpham'] = $value->name;
        $data_chitiethoadon['dongia'] = $value->price;
        $data_chitiethoadon['soluong'] = $value->qty;
        DB::table('chitiethoadon')->insert($data_chitiethoadon);
        }

        if($data['hinhthuc'] ==1){
            Cart::destroy();
            $danhmuc = DB::table('danhmuc')->where('kichhoat','0',)->orderBy('danhmuc.id_danhmuc','desc')->get();
            return view('pages.thanhtoan.tratienmat')->with('danhmuc',$danhmuc);
        }
        if($data['hinhthuc'] ==2){
            echo 'Thanh toán trực tuyến';
        }
        

    }
}
