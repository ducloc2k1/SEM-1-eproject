@extends('layouts.admin')
@section('main_admin')
<?php
    $code= isset($errors['code']) ? $errors['code'] : 404;
    $title= isset($errors['title']) ? $errors['title'] : 'Page Not found';
    $message= isset($errors['message']) ? $errors['message'] : ' We could not find the page you were looking for.';

?>
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">404 error</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="error-page">
        <h2 class="headline text-yellow"> {{$code}}</h2>

        <div class="error-content">
          <h3><i class="fa fa-warning text-yellow"></i> Oops! {{$title}}.</h3>

          <p>
            {{$message}}
          </p>
          
        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    </section>
@endsection
