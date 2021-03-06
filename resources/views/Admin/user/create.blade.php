@extends('layouts.admin')
@section('main_admin')
<section class="content">
    <div class="row">
        <div class="col-md-12">

            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#activity" data-toggle="tab" aria-expanded="true">Thông tin tài khoản</a></li>
                  <li class=""><a href="#change_pass" data-toggle="tab" aria-expanded="false">Mật khẩu</a></li>
                  <li class=""><a href="#change_role" data-toggle="tab" aria-expanded="false">Phân quyền</a></li>
                </ul>
                <form action="{{route('admin.user.store')}}" method="POST" role="form">
                    @csrf
                <div class="tab-content">
                  <div class="tab-pane active" id="activity">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                                @if ($errors->has('name'))
                                    <small style="color:red">{{$errors->first('name')}}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="email">
                                @if ($errors->has('email'))
                                    <small style="color:red">{{$errors->first('email')}}</small>
                                @endif
                            </div>
                        </div>
                  </div>
                  <div class="tab-pane" id="change_pass">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password">
                            @if ($errors->has('password'))
                                <small style="color:red">{{$errors->first('password')}}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Confirm password</label>
                            <input type="password" class="form-control" name="confirm_password">
                            @if ($errors->has('confirm_password'))
                                <small style="color:red">{{$errors->first('confirm_password')}}</small>
                            @endif
                        </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="change_role">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="">Roles</label>
                            @foreach ($roles as $role)
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="role[]" value="{{$role->id}}">
                                        {{$role->name}}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                  </div>
                </div>
                <div class="box-footer">
                    <a href="{{route('admin.user.index')}}" class="btn btn-default">Cancel</a>
                    <button type="submit" class="btn btn-primary pull-right">Thêm mới</button>
                </div>
            </form>
            </div>
        </div>
</section>
@endsection
@section('js')
    <script src="{{url('/public/admin')}}/dist/js/slug.js"></script>
@endsection
