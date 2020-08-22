@extends('layouts.admin')
@section('main_admin')
<section class="content-header">
    <h1>
      Danh mục
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Danh mục</a></li>
      <li class="active">Thêm mới danh mục</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-4">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Thêm mới danh mục</h3>
          </div>
          <div class="panel-body">
            <form action="{{route('admin.category_blog.update',$cat_blogs->id)}}" method="POST" role="form">
              @csrf @method('PUT')
              <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Nhập tên danh mục" value="{{$cat_blogs->name}}">
              </div>
              <div class="form-group">
                <label for="">Slug danh mục</label>
                <input type="text" name="slug" class="form-control" id="slug" placeholder="nhập Slug" value="{{$cat_blogs->slug}}">
              </div>
              <div class="form-check">
                <input type="radio" class="form-check-input" id="status" value="0" name="status" {{$cat_blogs->status==0?'checked':''}}>
                <label class="form-check-label" for="exampleCheck1">Ẩn</label>
                <input type="radio" class="form-check-input" id="status" value="1" name="status" {{$cat_blogs->status==1?'checked':''}}>
                <label class="form-check-label" for="exampleCheck1">Hiện</label>
              </div>
              <button type="submit" class="btn btn-success">Cập nhật</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="row">
              <div class="col-md-7">
                <h3 class="panel-title">Danh sách danh mục</h3>
              </div>
            </div>
          </div>
          <div class="panel-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Tên danh mục</th>
                  <th>Trạng thái</th>
                  <th>Ngày thêm mới</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{$cat_blogs->id}}</td>
                  <td>{{$cat_blogs->name}}</td>
                  <td>{{$cat_blogs->status == 1 ? 'hiện' : 'ẩn'}}</td>
                  <td>{{$cat_blogs->created_at}}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
@section('js')
    <script src="{{url('/public/admin')}}/dist/js/slug.js"></script>
@endsection
