@extends('layoutsadmin.apphome')

@section('content')



<div class="table-agile-info">
    <div class="panel panel-default">
        
    <div class="panel-heading">
      Thông tin khách hàng
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-4">
      </div>
      
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
                            <th >Người nhận</th>
                            <th >Email</th>
                            <th >Số điện thoại</th>
                            <th >Địa chỉ</th>
                          </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                
                                <td>{{$nguoinhan->tennguoinhan}}</td>
                                <td>{{$nguoinhan->email}}</td>
                                <td>{{$nguoinhan->sodienthoai}}</td>
                                <td>{{$nguoinhan->diachinhanhang}}</td>
                            </tr>
                            
                        </tbody>
                      </table>
                               
        </div>
        
    </div>
</div>
<br>
<br>
<div class="table-agile-info">
<div class="panel panel-default">
        
        <div class="panel-heading">
          Chi tiết hoá đơn
        </div>
        <div class="row w3-res-tb">
          <div class="col-sm-4">
          </div>
          
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
                                
                                <th >Tên sản phẩm</th>
                                <th >Đơn giá</th>
                                <th >Số lượng</th>
                                <th >Thành tiền</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($hang_theo_id as $value)
                                <tr>
                                    
                                <td>{{$value->tensanpham}}</td>
                                <td>{{number_format($value->dongia)}} VND</td>
                                <td>{{$value->soluong}}</td>
                                <td>{{number_format($value->dongia*$value->soluong)}} VNĐ</td>
                                </tr>
                            @endforeach
                            
                            
                            </tbody>
                          </table>
                       
            </div>
          </div>
    </div>
    <span style="background-color: yellow;float:left;display:block;"><button><a href="{{URL::to('/admincp/donhang')}}" style="font-size: 26px;"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>  </a></button><span>
@endsection

