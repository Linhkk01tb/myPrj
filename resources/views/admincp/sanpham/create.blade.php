@extends('layoutsadmin.apphome')

@section('content')


<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                           Thêm sản phẩm
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
                        <form method="POST" action="{{route('sanpham.store')}}"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
                                <input type="text" name="tensanpham" class="form-control" id="slug" onkeyup="ChangeToSlug();" placeholder="Tên sản phẩm...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Slug sản phẩm</label>
                                <input type="text" name="slug_sanpham" class="form-control" id="convert_slug" placeholder="Slug sản phẩm...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2" class="form-label">Mô tả sản phẩm</label>
                                <textarea class="form-control" name="mota" rows="5" style="resize: none" id="ckeditor_motathem">

                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Hình ảnh</label>
                                <input type="file" name="hinhanh" class="form-control-flie">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Đơn giá</label>
                                <input type="text" name="dongia" class="form-control" id="convert_slug" placeholder="Đơn giá...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Số lượng</label>
                                <input type="text" name="soluong" class="form-control" id="convert_slug" placeholder="Số lượng...">
                            </div>
                            <div class="form-group">
                            <label for="exampleInputEmail3" class="form-label">Danh mục sản phẩm</label>
                                <select name="danhmuc_id" class="form-control" aria-label="Default select example">
                                    @foreach($danhmucsanpham as $key =>$item)
                                    <option value="{{$item->id_danhmuc}}">{{$item->tendanhmuc}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                            <label for="exampleInputEmail3" class="form-label">Trạng thái</label>
                                <select name="kichhoat" class="form-control" aria-label="Default select example">
                                    <option value="0">Kích hoạt</option>
                                    <option value="1">Không kích hoạt</option>
                                </select>
                            </div>
                            
                            
                                <button type="submit" name="themsanpham" class="btn btn-primary">Thêm</button>
                            
                        </form>
                        
                </div>
                </div>
                </section>
    </div>
</div>
<span style="background-color: yellow;float:left;display:block;"><button><a href="{{URL::to('/admincp/sanpham')}}" style="font-size: 26px;"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>  </a></button><span>
@endsection
