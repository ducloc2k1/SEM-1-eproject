@extends('layouts.admin')
@section('main_admin')
<section class="content" ng-app="role" ng-controller="roleController">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm mới nhóm quyền</h3>
                </div>
                <form action="{{route('admin.role.store')}}" method="POST" role="form" >
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="">Tên nhóm</label>
                            <input type="text" class="form-control" name="name">
                            @if ($errors->has('name'))
                                <small style="color:red">{{$errors->first('name')}}</small>
                            @endif
                        </div>
                        <div class="form-group" >
                            <label for="">Phân quyền</label>
                            <input type="text" class="form-control" ng-model="role_name" placeholder="Search ...">
                            <br>
                            <label for=""><input type="checkbox" id="check-all"> Check all</label>
                            <div style="height: 300px;overflow-y:auto;">
                                    <div class="checkbox" ng-repeat="role in roles | filter:role_name">
                                        <label>
                                            <input type="checkbox" class="role-item" name="route[]" value="@{{role}}">
                                            @{{role}}
                                        </label>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <a href="{{route('admin.role.store')}}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary pull-right">Thêm mới</button>
                    </div>
                </form>
            </div>
        </div>
</section>
@endsection
@section('js')
<script>

    var app=angular.module('role',[]);
    app.controller('roleController', function($scope){

        var roles='<?php echo json_encode($routes); ?>';
        $scope.roles=angular.fromJson(roles);
    });

    //jquery

    $("#check-all").click(function(){
        $('input.role-item').not(this).prop('checked', this.checked);
    });

</script>
@endsection
