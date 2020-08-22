@extends('layouts.admin')
@section('main_admin')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="panel-title">Danh sách bài viết</h3>
                        </div>
                        <div class="col-md-4">
                            <form class="input-form" action="" method="GET" role="form">
                                <div class="input-group">
                                    <input class="form-control" type="search" placeholder="Search" name="key"
                                        aria-label="Search">
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
                                <th>Hình ảnh</th>
                                <th>Tiều đề</th>
                                <th>Comment <i class="fa fa-comments"></i></th>
                                <th>Loại tin tức</th>
                                <th>Ngày đăng</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                            <tr>
                                <td>{{$index++}}</td>
                                <td>
                                    <img src="{{url('uploads')}}/{{$blog->thumbnail_image}}" alt="" width="70px">
                                </td>
                                <td>{{$blog->title}}</td>
                                <td>
                                    {{$blog->comments()->count()}}
                                </td>
                                <td>{{$blog->catBlog->name}}</td>
                                <td>{{$blog->created_at}}</td>
                                <td>
                                    <form style="display: inline-block" method="POST" action="{{route('admin.blog.destroy',$blog->id)}}">
                                        @method('DELETE') @csrf
                                        @if (Auth::user()->can('admin.blog.edit'))
                                        <a href="{{route('admin.blog.edit',$blog->id)}}">
                                            <i class="btn btn-xs btn-danger fa fa-edit"></i>
                                        </a>
                                        @endif
                                        @if (Auth::user()->can('admin.blog.destroy'))
                                        <button type="submit" class="btn btn-xs btn-warning fa fa-trash"></button>
                                        @endif
                                    </form>
                                    <a href="{{route('user.blog',$blog->slug)}}">
                                        <i class="btn btn-xs btn-success fa fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-center">
                        <ul class="pagination">
                            {{$blogs->links()}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
