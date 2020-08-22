@extends('layouts.admin')
@section('main_admin')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-7">
                            <h3 class="panel-title">Cấu hình</h3>
                        </div>
                        <div class="col-md-4">
                            <form class="input-form" action="" method="GET" role="form">
                                @csrf
                                <div class="input-group">
                                    <input class="form-control" name="search" type="search" placeholder="Search" aria-label="Search">
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
                                <th>Key</th>
                                <th>Link</th>
                                <th>Dữ liệu</th>
                                <th>Ngày thêm mới</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($config as $model)
                            <tr>
                                <td>{{$model->id}}</td>
                                <td>
                                    <img src="{{url('uploads')}}/{{$model->image}}" width="120px" alt="">
                                </td>
                                <td>{{$model->key}}</td>
                                <td>{{$model->link}}</td>
                                <td>{{$model->data}}</td>
                                <td>{{$model->created_at}}</td>
                                <td>
                                    <form action="{{route('admin.config.destroy',$model->id)}}" method="POST" class="form-inline" role="form">
                                        @csrf @method('DELETE')
                                        @if (Auth::user()->can('admin.config.edit'))
                                            <a href="{{route('admin.config.edit',$model->id)}}">
                                                <i class="btn btn-xs btn-danger fa fa-edit"></i>
                                            </a>
                                        @endif
                                        @if (Auth::user()->can('admin.config.destroy'))
                                            <button type="submit" class="btn btn-xs btn-warning fa fa-trash"></button>
                                        @endif
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-center">
                        <div class="clearfix">
                            {{ $config->appends(request()->only('search'))->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
