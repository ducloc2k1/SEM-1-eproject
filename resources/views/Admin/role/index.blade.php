@extends('layouts.admin')
@section('main_admin')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-7">
                            <h3 class="panel-title">Danh sách nhóm quyền</h3>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $v)
                            <tr>
                                <td>{{$v->id}}</td>
                                <td>{{$v->name}}</td>
                                <td>{{$v->created_at}}</td>
                                <td>
                                    <form action="{{route('admin.role.destroy',$v->id)}}" method="POST" class="form-inline" role="form">
                                        @csrf @method('DELETE')
                                            @if (Auth::user()->can('admin.role.edit'))
                                                <a href="{{route('admin.role.edit',$v->id)}}">
                                                    <i class="btn btn-xs btn-danger fa fa-edit"></i>
                                                </a>
                                            @endif
                                            @if (Auth::user()->can('admin.role.destroy'))
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
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
