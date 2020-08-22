@extends('layouts.admin')
@section('main_admin')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm mới danh mục</h3>
                </div>
                <form action="{{route('admin.category_product.store')}}" method="POST" role="form" >
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="">Tên</label>
                            <input type="text" class="form-control" name="name" id="name">
                            @if ($errors->has('name'))
                                <small style="color:red">{{$errors->first('name')}}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Slug</label>
                            <input type="text" class="form-control" name="slug" id="slug">
                            @if ($errors->has('slug'))
                                <small style="color:red">{{$errors->first('slug')}}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Meta key</label>
                            <input type="text" class="form-control" name="meta_key">
                            @if ($errors->has('meta_key'))
                                <small style="color:red">{{$errors->first('meta_key')}}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Meta title</label>
                            <input type="text" class="form-control" name="meta_title">
                            @if ($errors->has('meta_title'))
                                <small style="color:red">{{$errors->first('meta_title')}}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Meta description</label>
                            <input type="text" class="form-control" name="meta_description">
                            @if ($errors->has('meta_description'))
                                <small style="color:red">{{$errors->first('meta_description')}}</small>
                            @endif
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="status" id="input" value="0" checked="checked">
                                Ẩn
                            </label>
                            <label>
                                <input type="radio" name="status" id="input" value="1">
                                Hiện
                            </label>
                        </div>
                    </div>
                    <div class="box-footer">
                        <a href="{{route('admin.category_product.index')}}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary pull-right">Thêm mới</button>
                    </div>
                </form>
            </div>
        </div>
</section>
@endsection
@section('js')
    <script src="{{url('/public/admin')}}/dist/js/slug.js"></script>
@endsection
