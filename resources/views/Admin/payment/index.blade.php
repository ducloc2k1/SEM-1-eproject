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
                    <form action="{{route('admin.payment.store')}}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Tên :</label>
                            <input type="text" class="form-control" id="" name="name">
                        </div>
                        <div class="form-group">
                            <label for="">Hình ảnh :</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="image" name="image" >
                                <span class="input-group-btn">
                                    <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Select!</a>
                                </span>
                            </div>
                            <img src="" alt="" id="show_img" width="240px" height="auto">
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </form>
                </div>
              </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="panel-title">Danh sách phương thức thanh toán</h3>
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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payments as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>
                                    <img src="{{url('uploads')}}/{{$item->image}}" alt="" width="140px" >
                                </td>
                                <td>
                                    <form action="{{route('admin.payment.destroy',$item->id)}}" method="POST" class="form-inline" role="form">
                                        @csrf @method('DELETE')
                                        @if (Auth::user()->can('admin.payment.edit'))
                                            <a href="{{route('admin.payment.edit',$item->id)}}">
                                                <i class="btn btn-xs btn-danger fa fa-edit"></i>
                                            </a>
                                        @endif
                                        @if (Auth::user()->can('admin.payment.destroy'))
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
                            {{ $payments->links() }}
                        </div>
                    </div>
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
