@extends('layoutsadmin.apphome')

@section('content')



<div class="table-agile-info">
    <div class="anel panel-default">
        
    <div class="panel-heading">
      Danh sách sản phẩm
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
                            <th scope="col">STT</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Slug sản phẩm</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Mô tả</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Đơn giá</th>
                            <th scope="col">Danh mục</th>
                            <th scope="col">Kích hoạt</th>
                            <th scope="col">Quản lý</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($sanpham as $key => $item)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$item->tensanpham}}</td>
                                <td>{{$item->slug_sanpham}}</td>
                                <td><img src="{{asset('public/upload/sanpham/'.$item->hinhanh)}}" width="200" height="160"></td>
                                <td>{!!$item->mota!!}</td>
                                <td>{{$item->soluong}}</td>
                                <td>{{$item->dongia}}</td>
                                <td>{{$item->danhmucsanpham->tendanhmuc}}</td>
                                <td>
                                    @if($item->kichhoat==0)
                                        <span class="text text-success">Kích hoạt</span>
                                    @else
                                    <span class="text text-danger">Không kích hoạt</span>
                                    @endif
                                </td>
                                <td>
                                    <a onclick="return confirm('Bạn có muốn sửa sản phẩm này không?');" href="{{route('sanpham.edit',[$item->id])}}" class="active" ui-toggle-class="" style="font-size: 30px;"><i class="fa fa-pencil-square-o text-success text-active"></i></a>
                                    <a onclick="return confirm('Bạn có muốn xoá sản phẩm này không?');" href="{{route('sanpham.destroy',[$item->id])}}" class="active" ui-toggle-class="" style="font-size: 30px;"><i class="fa fa-trash text-danger text"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                      <div class="row">
        
                            <div class="col-sm-5 text-center">
                            
                            </div>
                            <div class="col-sm-6 text-right text-center-xs">                
                            <ul class="pagination pagination-sm m-t-none m-b-none">
                                <nav aria-label="Page navigation">{!!$sanpham->links()!!}</nav>
                            </ul>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
@endsection