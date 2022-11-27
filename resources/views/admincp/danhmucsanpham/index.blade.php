@extends('layoutsadmin.apphome')

@section('content')



<div class="table-agile-info">
    <div class="anel panel-default">
        
    <div class="panel-heading">
      Danh mục sản phẩm
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
                            <th>STT</th>
                            <th >Tên danh mục</th>
                            <th >Slug danh mục</th>
                            <th >Mô tả</th>
                            <th >Kích hoạt</th>
                            <th >Quản lý</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($danhmucsanpham as $key => $item)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$item->tendanhmuc}}</td>
                                <td>{{$item->slug_danhmuc}}</td>
                                <td>{{$item->mota}}</td>
                                <td>
                                    @if($item->kichhoat==0)
                                        <span class="text text-success">Kích hoạt</span>
                                    @else
                                    <span class="text text-danger">Không kích hoạt</span>
                                    @endif
                                </td>
                                <td>
                                    <a onclick="return confirm('Bạn có muốn sửa danh mục sản phẩm này không?');" href="{{route('danhmuc.edit',[$item->id_danhmuc])}}" class="active" ui-toggle-class="" style="font-size: 30px;"><i class="fa fa-pencil-square-o text-success text-active"></i></a>
                                    <a onclick="return confirm('Bạn có muốn xoá danh mục sản phẩm này không?');" href="{{route('danhmuc.destroy',[$item->id_danhmuc])}}" class="active" ui-toggle-class="" style="font-size: 30px;"><i class="fa fa-trash text-danger text"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
               
        </div>
    </div>
</div>
@endsection

