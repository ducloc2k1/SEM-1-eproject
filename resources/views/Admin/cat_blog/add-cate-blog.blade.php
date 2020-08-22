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
          <form action="{{route('admin.category_blog.store')}}" method="POST" role="form">
            @csrf
            <div class="form-group">
              <label for="">Tên danh mục</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Nhập tên danh mục">
            </div>
            <div class="form-group">
              <label for="">Slug danh mục</label>
              <input type="text" name="slug" class="form-control" id="slug" placeholder="nhập Slug">
            </div>
            <div class="form-check">
              <input type="radio" class="form-check-input" id="status" value="0" name="status" checked>
              <label class="form-check-label" for="exampleCheck1">Ẩn</label>
              <input type="radio" class="form-check-input" id="status" value="1" name="status">
              <label class="form-check-label" for="exampleCheck1">Hiện</label>
            </div>
            <button type="submit" class="btn btn-primary">Thêm mới</button>
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
            <div class="col-md-4">
              <form class="input-form" action="" method="GET" role="form">
                @csrf
                <div class="input-group">
                  <input class="form-control" type="search" name="key" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fa fa-search"></i>
                    </button>
                  </div>
                </div>
              </form>
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
                <th>#</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($cat_blogs as $cat_blog)
              <tr>
                <td>{{$cat_blog->id}}</td>
                <td>{{$cat_blog->name}}</td>
                <td>{{$cat_blog->status == 1 ? 'hiện' : 'ẩn'}}</td>
                <td>{{$cat_blog->created_at}}</td>
                <td>
                    @csrf @method('DELETE')

                    @if (Auth::user()->can('admin.category_blog.edit'))
                    <a href="{{route('admin.category_blog.edit',$cat_blog->id)}}">
                      <i class="btn btn-xs btn-danger fa fa-edit"></i>
                    </a>
                    @endif
                    @if (Auth::user()->can('admin.category_blog.destroy'))
                    <button type="" class="btn btn-xs btn-warning fa fa-trash" data-target="#exampleModal" data-toggle="modal"></button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                          Bạn chắc chắn muốn xóa không
                          </div>
                          <div class="modal-footer">
                            
                            <form action="{{route('admin.category_blog.destroy',$cat_blog->id)}}" method="POST"
                              class="form-inline" role="form">
                              @method("DELETE")
                              @csrf
                              <div class="form-group">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Có, tôi muốn</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endif
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="text-center">
            <div class="clearfix">
              {{ $cat_blogs->appends(request()->only('key'))->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
@section('js')
<script src="{{url('/public/admin')}}/dist/js/slug.js"></script>
@endsection