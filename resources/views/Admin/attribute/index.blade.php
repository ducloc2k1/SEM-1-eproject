@extends('layouts.admin')
@section('main_admin')
<section class="content">
    <div class="row">
        <div class="col-md-4">
            <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Thêm mới thuộc tính</h3>
                </div>
                <div class="box-body">
                    <form action="{{route('admin.attribute.store')}}" method="POST" role="form">
                        @csrf
                        <div class="form-group">
                            <label for="">Tên</label>
                            <input type="text" class="form-control" id="" name="name">
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
                        <div class="col-md-12">
                            <h3 class="panel-title">Danh sách thuộc tính</h3>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>values</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($atb as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>
                                        @foreach ($atb_vl as $vl)
                                            @if ($item->id==$vl->attribute_id)
                                                <span>{{$vl->name}} ,</span>
                                            @endif
                                        @endforeach
                                        <p><a href="{{route('admin.attribute_value.index')}}">Cấu hình thuộc tính</a></p>
                                </td>
                                <td>
                                    <form action="{{route('admin.attribute.destroy',$item->id)}}" method="POST" class="form-inline" role="form">
                                        @csrf @method('DELETE')
                                        
                                        @if (Auth::user()->can('admin.attribute.edit'))
                                            <a href="{{route('admin.attribute.edit',$item->id)}}">
                                                <i class="btn btn-xs btn-danger fa fa-edit"></i>
                                            </a>
                                        @endif
                                        @if (Auth::user()->can('admin.attribute.destroy'))
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
                            {{ $atb->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
