@extends('layouts.admin')
@section('main_admin')
<section class="content">
    <div class="row">
        <div class="col-md-4">
            <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Thêm mới phương thức giao hàng</h3>
                </div>
                <div class="box-body">
                    <form action="{{route('admin.shipping.store')}}" method="POST" role="form">
                        @csrf
                        <div class="form-group">
                            <label for="">Tên :</label>
                            <input type="text" class="form-control" id="" name="name">
                        </div>
                        <div class="form-group">
                            <label for="">Gía :</label>
                            <input type="text" class="form-control" id="" name="price">
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
                            <h3 class="panel-title">Danh sách phương thức giao hàng</h3>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($shippings as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>
                                    {{number_format($item->price,2)}}
                                </td>
                                <td>
                                    <form action="{{route('admin.shipping.destroy',$item->id)}}" method="POST" class="form-inline" role="form">
                                        @csrf @method('DELETE')
                                        @if (Auth::user()->can('admin.shipping.edit'))
                                            <a href="{{route('admin.shipping.edit',$item->id)}}">
                                                <i class="btn btn-xs btn-danger fa fa-edit"></i>
                                            </a>
                                        @endif
                                        @if (Auth::user()->can('admin.shipping.destroy'))
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
                            {{ $shippings->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
