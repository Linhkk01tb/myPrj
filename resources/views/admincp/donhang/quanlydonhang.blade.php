@extends('layoutsadmin.apphome')

@section('content')



<div class="table-agile-info">
    <div class="anel panel-default">
        
    <div class="panel-heading">
      Danh sách hoá đơn
    </div>

                <div class="table-responsive">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped b-t b-light">
                        <thead>
                          <tr>
                            <th>STT</th>
                            <th >Người đặt</th>
                            <th >Email</th>
                            <th >Số điện thoại</th>
                            <th >Tổng tiền</th>
                            <th >Trạng thái</th>
                            <th width="200px">Chức năng</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($hienthihoadon as $key => $item)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$item->hoten_khachhang}}</td>
                                <td>{{$item->email_khachhang}}</td>
                                <td>{{$item->sodienthoai_khachhang}}</td>
                                <td>{{number_format($item->tongtien)}} VNĐ</td>
                                <td>
                                    @if($item->trangthai==0)
                                        <span class="text text-default" style="color:blue">Đơn hàng mới</span>
                                    @elseif($item->trangthai==1)
                                        <span class="text text-success">Đã duyệt</span>
                                    @else
                                        <span class="text text-danger">Đã huỷ</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{URL::to('/admincp/chitietdonhang/'.$item->id_hoadon)}}" class="active" ui-toggle-class="" style="font-size: 30px;"><i class="fa fa-eye"></i></a>
                                    <a href="{{URL::to('/admincp/duyetdon/'.$item->id_hoadon)}}" class="active" ui-toggle-class="" style="font-size: 30px;color:#00FF00"><i class="fa fa-check-circle-o"></i></a>
                                    <a href="{{URL::to('/admincp/huydon/'.$item->id_hoadon)}}" class="active" ui-toggle-class="" style="font-size: 30px;color:red"><i class="fa fa-times-circle-o"></i></a>
                                    <a href="{{URL::to('/admincp/khoiphuc/'.$item->id_hoadon)}}" class="active" ui-toggle-class="" style="font-size: 30px;color:blue"><i class="fa fa-refresh"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
        </div>
        <div class="row">
        
        <div class="col-sm-5 text-center">
        
        </div>
        <div class="col-sm-6 text-right text-center-xs">                
        <ul class="pagination pagination-sm m-t-none m-b-none">
            <nav aria-label="Page navigation">{!!$hienthihoadon->links()!!}</nav>
        </ul>
        </div>
    </div>
    </div>
</div>

@endsection

