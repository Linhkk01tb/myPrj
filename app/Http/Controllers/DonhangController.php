<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Cart;
session_start();
class DonhangController extends Controller
{
    //
    public function donhang(){
        $admin_account  = Session()->get('admin_name');
        if($admin_account){
            $hienthihoadon = DB::table('hoadon')->join('khachhang','hoadon.id_khachhang','=','khachhang.id_khachhang')
            ->select('hoadon.*','khachhang.*')->orderBy('hoadon.id_hoadon','desc')->paginate(10);
            $quanlyhoadon = view('admincp.donhang.quanlydonhang')->with('hienthihoadon',$hienthihoadon);
            return view('admincp.home')->with('quanlyhoadon',$quanlyhoadon);
            
        }
        else{
            return view('admincp.loginadmin');
        }
    }
    public function chitietdonhang($id_donhang){
        $admin_account  = Session()->get('admin_name');
        if($admin_account){
            $chitiethoadon = DB::table('hoadon')
                ->join('khachhang','hoadon.id_khachhang','=','khachhang.id_khachhang')
                ->join('chitiethoadon','hoadon.id_hoadon','=','chitiethoadon.id_hoadon')
                ->join('thongtinnhanhang','hoadon.id_nhanhang','=','thongtinnhanhang.id_nhanhang')
                ->select('hoadon.*','khachhang.*','chitiethoadon.*','thongtinnhanhang.*')
                ->first();
            $nguoinhan = DB::table('hoadon')->join('thongtinnhanhang','thongtinnhanhang.id_nhanhang','=','hoadon.id_nhanhang')->where('hoadon.id_hoadon',$id_donhang)->first();
            $hang_theo_id = DB::table('chitiethoadon')->join('hoadon','hoadon.id_hoadon','=','chitiethoadon.id_hoadon')->where('chitiethoadon.id_hoadon',$id_donhang)->get();
            return view('admincp.donhang.xemchitiet')->with('chitiethoadon',$chitiethoadon)->with('hang_theo_id',$hang_theo_id)->with('nguoinhan',$nguoinhan);
            
        }
        else{
            return view('admincp.loginadmin');
        }
    }
    public function huydon($id_donhang){
        $admin_account  = Session()->get('admin_name');
        if($admin_account){
            DB::table('hoadon')->where('hoadon.id_hoadon',$id_donhang)->update(['hoadon.trangthai'=>2]);
            return Redirect::to('/admincp/donhang');
            
        }
        else{
            return view('admincp.loginadmin');
        }
    }
    public function duyetdon($id_donhang){
        $admin_account  = Session()->get('admin_name');
        if($admin_account){
            DB::table('hoadon')->where('hoadon.id_hoadon',$id_donhang)->update(['hoadon.trangthai'=>1]);
            return Redirect::to('/admincp/donhang');
        }
        else{
            return view('admincp.loginadmin');
        }
    }
    public function khoiphuc($id_donhang){
        $admin_account  = Session()->get('admin_name');
        if($admin_account){
            DB::table('hoadon')->where('hoadon.id_hoadon',$id_donhang)->update(['hoadon.trangthai'=>0]);
            return Redirect::to('/admincp/donhang');
        }
        else{
            return view('admincp.loginadmin');
        }
    }
}
