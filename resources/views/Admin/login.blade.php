<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{url('public/admin')}}/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{url('public/admin')}}/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{url('public/admin')}}/css/AdminLTE.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{url('public/admin')}}/css/_all-skins.min.css">
  <link rel="stylesheet" href="{{url('public/admin')}}/css/jquery-ui.css">
  <link rel="stylesheet" href="{{url('public/admin')}}/css/style.css" />
  <link rel="stylesheet" href="{{url('public/admin')}}/css/form_login.css" />
  <script src="{{url('public/admin')}}/js/angular.min.js"></script>
  <script src="{{url('public/admin')}}/js/app.js"></script>
  <script type="text/javascript">
    var base_url = function (){
        return "{{url('')}}";
    }
    var akey = function (){
        return 'zpouGWh1v4acrwKBOsA4rLPcghewjRLvjUucQzfCPM';
    }
  </script>
</head>
<body >
    <div class="container">
		<header>Login Form</header>
		<form method="post">
            @csrf
			<div class="input-field">
				<input type="text"  name="email">
                <label>Email</label>
                @if ($errors->has('email'))
                    <small style="color:red;">{{$errors->first('email')}}</small>
                @endif
			</div>
			<div class="input-field">
				<input class="pswrd" type="password"  name="password">
				<span class="show">SHOW</span>
                <label>Password</label>
                @if ($errors->has('password'))
                    <small style="color:red">{{$errors->first('password')}}</small>
                @endif
            </div>
            <div class="input-remember">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">
                      Remember Me
                </label>
            </div>
			<div class="button">
				<div class="inner">
				</div>
				<button type="submit">LOGIN</button>
			</div>
		</form>
		<div class="auth">
		<div class="signup">
			Not a member? <a href="#">Signup now</a>
		</div>
	</div>

<script src="{{url('public/admin')}}/js/jquery.min.js"></script>
<script src="{{url('public/admin')}}/js/jquery-ui.js"></script>
<script src="{{url('public/admin')}}/js/bootstrap.min.js"></script>
<script src="{{url('public/admin')}}/js/adminlte.min.js"></script>
<script src="{{url('public/admin')}}/js/dashboard.js"></script>
<script src="{{url('public/admin')}}/tinymce/tinymce.min.js"></script>
<script src="{{url('public/admin')}}/tinymce/config.js"></script>
<script src="{{url('public/admin')}}/js/function.js"></script>
<script>
    var input = document.querySelector('.pswrd');
    var show = document.querySelector('.show');
    show.addEventListener('click', active);
    function active(){
      if(input.type === "password"){
        input.type = "text";
        show.style.color = "#1DA1F2";
        show.textContent = "HIDE";
      }else{
        input.type = "password";
        show.textContent = "SHOW";
        show.style.color = "#111";
      }
    }
  </script>

</body>
</html>
