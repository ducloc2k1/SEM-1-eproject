@extends('layouts.admin')
@section('main_admin')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-7">
                            <h3 class="panel-title">Danh sách taì khoản</h3>
                        </div>
                        <div class="col-md-4">
                            <form class="input-form" action="" method="GET" role="form">
                                @csrf
                                <div class="input-group">
                                    <input class="form-control" name="key" type="search" placeholder="Search" aria-label="Search">
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $v)
                                <tr>
                                    <td>{{$v->id}}</td>
                                    <td>{{$v->name}}</td>
                                    <td>{{$v->email}}</td>
                                    <td>{{$v->created_at}}</td>
                                    <td>
                                        <form action="{{route('admin.user.destroy',$v->id)}}" method="POST" class="form-inline" role="form">
                                            @csrf @method('DELETE')
                                            @if (Auth::user()->can('admin.user.edit'))
                                                <a href="{{route('admin.user.edit',$v->id)}}">
                                                    <i class="btn btn-xs btn-danger fa fa-edit"></i>
                                                </a>
                                            @endif
                                            @if (Auth::user()->can('admin.user.destroy'))
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
                            {{ $user->appends(request()->only('key'))->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
