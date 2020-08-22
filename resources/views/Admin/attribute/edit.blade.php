@extends('layouts.admin')
@section('main_admin')
<section class="content">
    <div class="row">
        <div class="col-md-4">
            <form action="{{route('admin.attribute.update',$atb->id)}}" method="POST" role="form">
                @csrf @method('PUT')
                <legend>Chỉnh sửa thuộc tính</legend>
                <div class="form-group">
                    <label for="">Tên</label>
                    <input type="text" class="form-control" id="" name="name" value="{{$atb->name}}">
                </div>
                <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
            </form>
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
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$atb->id}}</td>
                                <td>{{$atb->name}}</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
