@extends('layouts.admin')
@section('main_admin')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Cập nhật quảng cáo</h3>
                </div>
               <div class="box-body">
                <form action="{{route('admin.advertisement.update',$advs->id)}}" method="POST" role="form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @method('PUT')
					<div class="row">
                        <div class="col-md-6">
                            <div class="form-group @error('image') has-error @enderror">
                                <label for="">Hình ảnh </label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="image" name="image" value="{{$advs->image}}">
                                    <span class="input-group-btn">
                                        <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Select!</a>
                                    </span>
                                </div>
                                @error('image')
                                    <small class="error help-block">{{$message}}</small>
                                @enderror()
                            </div>
                        </div>
						<div class="col-md-6">
							<div class="form-group @error('key') has-error @enderror">
								<label for="">Key</label>
								<input type="text" class="form-control" name="key" value="{{$advs->key}}">
								@error('key')
								    <small class="error help-block">{{$message}}</small>
								@enderror()
							</div>
						</div>
					</div>

					<div class="form-group  @error('description') has-error @enderror">
						<label for="">Mô tả</label>
						<textarea name="description" style="width:100%;height:80px">
                            {{$advs->description}}
						</textarea>
						@error('description')
								<small class="error help-block">{{$message}}</small>
						@enderror()
					</div>
                    <div class="box-footer">
                        <a href="{{route('admin.advertisement.index')}}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary pull-right">Cập nhật</button>
                    </div>
				</form>
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

