@extends('layoutsadmin.apphome')

@section('content')



<div class="row">
    <div class="col-lg-12">
    <section class="panel">
            <header class="panel-heading">
                           Sửa sản phẩm
             </header>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="position-center">
                        <form method="POST" action="{{route('sanpham.update',[$sanpham->id])}}"  enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
                                <input type="text" name="tensanpham" value="{{$sanpham->tensanpham}}" class="form-control" id="slug" onkeyup="ChangeToSlug();" placeholder="Tên sản phẩm...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Slug sản phẩm</label>
                                <input type="text" name="slug_sanpham" value="{{$sanpham->slug_sanpham}}" class="form-control" id="convert_slug" placeholder="Slug sản phẩm...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2" class="form-label">Mô tả sản phẩm</label>
                                <textarea class="form-control" name="mota" rows="5" style="resize: none" id="ckeditor_motasua">
                                    {!!$sanpham->mota!!}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Hình ảnh</label>
                                <input type="file" name="hinhanh" class="form-control-flie">
                                <img src="{{asset('public/upload/sanpham/'.$sanpham->hinhanh)}}" width="200" height="160">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Đơn giá</label>
                                <input type="text" name="dongia" value="{{$sanpham->dongia}}" class="form-control" placeholder="Đơn giá...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Số lượng</label>
                                <input type="text" name="soluong" value="{{$sanpham->soluong}}" class="form-control" placeholder="Số lượng...">
                            </div>
                            <div class="form-group">
                            <label for="exampleInputEmail3" class="form-label">Danh mục sản phẩm</label>
                                <select name="danhmuc_id" class="form-control" aria-label="Default select example">
                                    @foreach($danhmucsanpham as $key =>$item)
                                    <option {{$item->id_danhmuc==$sanpham->danhmuc_id ? 'selected': ''}} value="{{$item->id_danhmuc}}">{{$item->tendanhmuc}}</option>\
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                            <label for="exampleInputEmail3" class="form-label">Trạng thái</label>
                                <select name="kichhoat" class="form-control" aria-label="Default select example">
                                    @if($sanpham->kichhoat==0)
                                    <option selected value="0">Kích hoạt</option>
                                    <option value="1">Không kích hoạt</option>
                                    @else
                                    <option value="0">Kích hoạt</option>
                                    <option selected value="1">Không kích hoạt</option>
                                    @endif
                                </select>
                            </div>
                            <button type="submit" name="themsanpham" class="btn btn-primary">Cập nhật</button>
                        </form>

                </div>
            </div>
        </section>
    </div>
</div>
<span style="background-color: yellow;float:left;display:block;"><button><a href="{{URL::to('/admincp/sanpham')}}" style="font-size: 26px;"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>  </a></button><span>
@endsection
