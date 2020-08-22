@extends('layouts.admin')
@section('main_admin')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm mới banner</h3>
                </div>
               <div class="box-body">
                <form action="{{route('admin.banner.store')}}" method="POST" role="form" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="row">
                        <div class="col-md-6">
                            <div class="form-group @error('image') has-error @enderror">
                                <label for="">Hình ảnh của banner</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="image" name="image" value="">
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
							<div class="form-group @error('sort') has-error @enderror">
								<label for="">Sắp xếp</label>
								<input type="text" class="form-control"  name="sort">
								@error('sort')
								    <small class="error help-block">{{$message}}</small>
								@enderror()
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Slogan</label>
								<input type="text" class="form-control"  name="slogan">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Caption</label>
								<input type="text" class="form-control" name="caption">
							</div>
						</div>
					</div>
					<div class="form-group  @error('description') has-error @enderror">
						<label for="">Mô tả</label>
						<textarea name="description" style="width: 100%; height: 80px">
						</textarea>
						@error('description')
								<small class="error help-block">{{$message}}</small>
						@enderror()
					</div>
                    <div class="box-footer">
                        <a href="{{route('admin.banner.index')}}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary pull-right">Thêm mới</button>
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

