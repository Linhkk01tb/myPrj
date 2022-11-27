@extends('layoutsadmin.apphome')

@section('content')


<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                           Thêm danh mục sản phẩm
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
                        <form method="POST" action="{{route('danhmuc.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Tên danh mục</label>
                                <input type="text" name="tendanhmuc" class="form-control" id="slug" onkeyup="ChangeToSlug();" aria-describedby="emailHelp" placeholder="Tên danh mục...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Slug danh mục</label>
                                <input type="text" name="slug_danhmuc" class="form-control" id="convert_slug" aria-describedby="emailHelp" placeholder="Slug danh mục...">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2" class="form-label">Mô tả danh mục</label>
                                <input type="text" name="mota" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mô tả danh mục...">
                            </div>
                            <div class="form-group">
                            <label for="exampleInputEmail3" class="form-label">Trạng thái</label>
                                <br>
                                <select name="kichhoat" class="form-control" aria-label="Default select example">
                                    <option value="0">Kích hoạt</option>
                                    <option value="1">Không kích hoạt</option>
                                </select>
                            </div>
                            <button type="submit" name="them" class="btn btn-primary" >Thêm</button>
                        </form>

             </div>
        </div>
        </section>
    </div>
</div>
<span style="background-color: yellow;float:left;display:block;"><button><a href="{{URL::to('/admincp/danhmuc')}}" style="font-size: 26px;"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>  </a></button><span>
@endsection

