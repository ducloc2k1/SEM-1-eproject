<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{url('public/admin')}}/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{url('public/admin')}}/css/bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="{{url('public/admin')}}/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{url('public/admin')}}/css/AdminLTE.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css'>
  <link rel="stylesheet" href="{{url('public/admin')}}/css/_all-skins.min.css">
  <link rel="stylesheet" href="{{url('public/admin')}}/css/jquery-ui.css">
  <link rel="stylesheet" href="{{url('public/admin')}}/css/style.css" />
  <style>
    .block-color.input-group-addon{
        border-radius: 0;
        background-color: #fff;
        width: auto;
        border:1px solid #d2d6de;
        padding: 6px;
    }
    .block-color.input-group-addon i{
        display: inline-block;
        cursor: pointer;
        height: 16px;
        vertical-align: text-top;
        width: 16px;
    }
  </style>
  <script src="{{url('public/admin')}}/js/angular.min.js"></script>
  <script src="{{url('public/admin')}}/js/app.js"></script>
  <script type="text/javascript">
    var base_url = function (){
        return "{{url('')}}";
    }
    {{--  var akey = function (){
        return 'zpouGWh1v4acrwKBOsA4rLPcghewjRLvjUucQzfCPM';
    }  --}}
  </script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <a href="index.html" class="logo">
        <span class="logo-mini"><b>A</b>LT</span>
        <span class="logo-lg"><b>Admin</b> Shop</span>
      </a>
      <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown messages-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i>
                <span class="label label-success">4</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 4 messages</li>
                <li>
                </li>
                <li class="footer"><a href="#">See All Messages</a></li>
              </ul>
            </li>
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                  <ul class="menu">
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <li class="dropdown tasks-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-flag-o"></i>
                <span class="label label-danger">9</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 9 tasks</li>
                <li>
                  <ul class="menu">
                    <li>
                      <a href="#">
                        <h3>
                          Design some buttons
                          <small class="pull-right">20%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                          aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="https://cdn.myanimelist.net/r/360x360/images/characters/16/47183.jpg?s=eb756519c94e252b23cae8ff2d8916fb" class="user-image" alt="User Image">
              <span class="hidden-xs">{{Auth::user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="https://cdn.myanimelist.net/r/360x360/images/characters/16/47183.jpg?s=eb756519c94e252b23cae8ff2d8916fb" class="img-circle" alt="User Image">
                <p>
                    {{Auth::user()->name}}
                </p>
              </li>
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{route('admin.logout')}}"  onclick="return confirm('Bạn có chắc không ?')" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="https://cdn.myanimelist.net/r/360x360/images/characters/16/47183.jpg?s=eb756519c94e252b23cae8ff2d8916fb" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
        </div>
      </div>
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </form>

      <?php

        $user=Auth::user();
        $menus=config('menu');

      ?>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="">
            <a href="{{route('admin.index')}}">
                <i class="fa fa-home"></i>
                <span>Trang chủ</span>
            </a>
        </li>
        @foreach ($menus as $item)
        <?php $class=!empty($item['items'])?'treeview':'';?>
            @if ($user->can($item['route']))
                <li class="{{$class}}">
                    <a href="{{Route::has($item['route']) ? route($item['route']) : '#'}}" >
                        <i class="{{$item['icon']}}"></i>
                        <span>{{$item['name']}}</span>
                        <span class="pull-right-container">
                            @if (!empty($item['items']))
                                <i class="fa fa-angle-left pull-right"></i>
                            @endif
                        </span>
                    </a>
                    @if ( !empty($item['items'] ))
                    <ul class="treeview-menu">
                        @foreach ($item['items'] as $subMenu)
                        <?php $class3=!empty($subMenu['items'])?'treeview':''; ?>
                        @if ($user->can($subMenu['route']))
                            <li class="{{$class3}}">
                                <a href="{{Route::has($subMenu['route']) ? route($subMenu['route']) : '#'}}" >
                                    <i class="{{$subMenu['icon']}}"></i>
                                    <span>{{$subMenu['name']}}</span>
                                    <span class="pull-right-container">
                                        @if (!empty($subMenu['items']))
                                            <i class="fa fa-angle-left pull-right"></i>
                                        @endif
                                    </span>
                                </a>
                                @if ( !empty($subMenu['items'] ))
                                <ul class="treeview-menu">
                                    @foreach ($subMenu['items'] as $subMenu2)
                                        @if ($user->can($subMenu2['route']))
                                            <li>
                                                <a href="{{Route::has($subMenu2['route']) ? route($subMenu2['route']) : '#'}}" >
                                                <i class="{{$subMenu2['icon']}}"></i>
                                                <span>{{$subMenu2['name']}}</span>
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                        @endif
                        @endforeach
                    </ul>
                    @endif
                </li>
            @endif
        @endforeach
      </ul>
    </section>
  </aside>
  <div class="content-wrapper" style="overflow:hidden">
    @if (Session::has('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{Session::get('success')}}
    </div>
    @endif
    @if (Session::has('error'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{Session::get('error')}}
        </div>
    @endif
    @yield('main_admin')
</div>

<script src="{{url('public/admin')}}/js/jquery.min.js"></script>
<script src="{{url('public/admin')}}/js/jquery-ui.js"></script>
<script src="{{url('public/admin')}}/js/bootstrap.min.js"></script>
<script src="{{url('public/admin')}}/js/adminlte.min.js"></script>
<script src="{{url('public/admin')}}/js/dashboard.js"></script>
<script src="{{url('public/admin')}}/tinymce/tinymce.min.js"></script>
<script src="{{url('public/admin')}}/tinymce/config.js"></script>
<script src="{{url('public/admin')}}/js/function.js"></script>
<script src="{{url('public/admin')}}/js/bootstrap-colorpicker.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.js'></script>
<script src="{{url('public/ckeditor/ckeditor.js')}}"></script>
<script src="{{url('public/ckfinder/ckfinder.js')}}"></script>
<script src="{{url('public/ckeditor/config.js')}}"></script>
<script src="{{url('public/admin/js/app.js')}}"></script>
<script>
    $(function () {
      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()
    })
  </script>
@yield('js')
</body>
</html>
