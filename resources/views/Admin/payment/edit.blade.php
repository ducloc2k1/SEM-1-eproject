@extends('layouts.admin')
@section('main_admin')
<section class="content">
    <div class="row">
        <div class="col-md-4">
            <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Thêm mới phương thức thanh toán</h3>
                </div>
                <div class="box-body">
                    <form action="{{route('admin.payment.update',$sp->id)}}" method="POST" role="form">
                        @csrf @method('PUT')
                        <div class="form-group">
                            <label for="">Tên :</label>
                            <input type="text" class="form-control" id="" name="name" value="{{$sp->name}}">
                        </div>
                        <div class="form-group">
                            <label for="">Hình ảnh :</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="image" name="image" value="{{$sp->image}}">
                                <span class="input-group-btn">
                                    <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Select!</a>
                                </span>
                            </div>
                            <img src="{{url('uploads')}}/{{$sp->image}}" alt="{{$sp->name}}" id="show_img" width="240px" height="auto">
                        </div>
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </form>
                </div>
              </div>
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
                                <th>Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$sp->id}}</td>
                                <td>{{$sp->name}}</td>
                                <td>
                                    <img src="{{url('uploads')}}/{{$sp->image}}" alt="" width="140px" >
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="modal-id">
    <div class="modal-dialog" style="width:85%">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Quản lý File</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <iframe src="{{url('file')}}/dialog.php?akey=zpouGWh1v4acrwKBOsA4rLPcghewjRLvjUucQzfCPM&field_id=image" frameborder="0" width="100%" height="600px" style="overflow-y: auto;border:0;"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script type="text/javascript">
        $('#modal-id').on('hide.bs.modal',function(){
            var _img=$('input#image').val();
            $('img#show_img').attr('src',_img);
        });
    </script>
@endsection
