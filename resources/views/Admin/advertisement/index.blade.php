@extends('layouts.admin')
@section('main_admin')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-7">
                            <h3 class="panel-title">Danh sách quảng cáo</h3>
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
                                <th>Mô tả</th>
                                <th>Ngày thêm mới</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($advertisement as $model)
                            <tr>
                                <td>{{$model->id}}</td>
                                <td>
                                    <img src="{{url('uploads')}}/{{$model->image}}" width="120px" alt="">
                                </td>
                                <td>{{$model->key}}</td>
                                <td>{{$model->description}}</td>
                                <td>{{$model->created_at}}</td>
                                <td>
                                    <form action="{{route('admin.advertisement.destroy',$model->id)}}" method="POST" class="form-inline" role="form">
                                        @csrf @method('DELETE')
                                        @if (Auth::user()->can('admin.advertisement.edit'))
                                            <a href="{{route('admin.advertisement.edit',$model->id)}}">
                                                <i class="btn btn-xs btn-danger fa fa-edit"></i>
                                            </a>
                                        @endif
                                        @if (Auth::user()->can('admin.advertisement.destroy'))
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
                            {{ $advertisement->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
