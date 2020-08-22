@extends('layouts.admin')
@section('main_admin')
<section class="content">
    <div class="row">
        <div class="col-md-4">
            <form action="{{route('admin.shipping.update',$sp->id)}}" method="POST" role="form">
                @csrf @method('PUT')
                <legend>Chỉnh sửa phương thức giao hàng</legend>
                <div class="form-group">
                    <label for="">Tên</label>
                    <input type="text" class="form-control" id="" name="name" value="{{$sp->name}}">
                </div>
                <div class="form-group">
                    <label for="">Gía </label>
                    <input type="text" class="form-control" id="" name="price" value="{{$sp->price}}">
                </div>
                <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
            </form>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="panel-title">Phương thức giao hàng</h3>
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
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$sp->id}}</td>
                                <td>{{$sp->name}}</td>
                                <td>{{$sp->price}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
