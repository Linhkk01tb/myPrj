<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Cart;
session_start();
class GiohangController extends Controller
{
    //
    public function themgiohang(Request $request){
      //  $danhmuc = DB::table('danhmuc')->where('kichhoat','0',)->orderBy('danhmuc.id_danhmuc','desc')->get();
        $id_sanpham = $request->id_sanpham;
        $soluongmua = $request->soluongmua;
        $thongtinsanpham = DB::table('sanpham')->where('sanpham.id',$id_sanpham)->first();
        $data['id'] = $thongtinsanpham->id;
        $data['qty'] = $soluongmua;
        $data['name'] = $thongtinsanpham->tensanpham;
        $data['price'] = $thongtinsanpham->dongia;
        $data['weight'] = $thongtinsanpham->dongia;
        $data['options']['hinhanh'] = $thongtinsanpham->hinhanh;
        Cart::add($data);

       return Redirect::to('/hienthigiohang');
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
    }
    public function hienthigiohang(){
       
        return view('pages.giohang.hienthigiohang');
    }
    public function xoahangkhoigio($rowId){
        Cart::update($rowId, 0);
        return Redirect::to('/hienthigiohang');
    }
    public function capnhatsoluongmua(Request $request){
        $rowId = $request->rowId;
        $soluongmua = $request->soluongmua;
        Cart::update($rowId, $soluongmua);
        return Redirect::to('/hienthigiohang');
    }
    public function capnhatsoluongmua1(Request $request){
        $rowId = $request->rowId;
        $soluongmua = $request->soluongmua;
        Cart::update($rowId, $soluongmua);
        return Redirect::to('/xacnhanthanhtoan');
    }
}
