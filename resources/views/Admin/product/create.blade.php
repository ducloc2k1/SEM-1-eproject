@extends('layouts.admin')
@section('main_admin')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm mới sản phẩm</h3>
                </div>
                <form action="{{route('admin.product.store')}}" method="POST" role="form" enctype="multipart/form-data" >
                    @csrf
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="">Tên</label>
                                    <input type="text" class="form-control" name="name">
                                    @if ($errors->has('name'))
                                        <small style="color:red">{{$errors->first('name')}}</small>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Price</label>
                                    <input type="text" class="form-control" name="price">
                                    @if ($errors->has('price'))
                                        <small style="color:red">{{$errors->first('price')}}</small>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Sale price</label>
                                    <input type="text" class="form-control" name="sale_price">
                                    @if ($errors->has('sale_price'))
                                        <small style="color:red">{{$errors->first('sale_price')}}</small>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea name="desciption"  cols="30" class="form-control" rows="10" style="width="100%"" ></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Content</label>
                                    <textarea name="content" id="content" class="form-control" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Các ảnh khác :</label>
                                    <input type="hidden" name="image_list" id="image_list">
                                    <span class="input-group-btn">
                                        <a class="btn btn-default btn-sm" data-toggle="modal" href='#modal-files'>Select</a>
                                    </span>
                                    <div class="row"id="img_Show_List"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Category</label>
                                    <select name="category_pro_id" id="input" class="form-control">
                                        <option value="">Chọn một</option>
                                        @foreach ($cats as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('category_pro_id'))
                                        <small style="color:red">{{$errors->first('category_pro_id')}}</small>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="">Quantity</label>
                                    <input type="text" class="form-control" name="quantity">
                                    @if ($errors->has('quantity'))
                                        <small style="color:red">{{$errors->first('quantity')}}</small>
                                    @endif
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="status" id="input" value="0" checked="checked">
                                        Hết hàng
                                    </label>
                                    <label>
                                        <input type="radio" name="status" id="input" value="1">
                                        Còn hàng
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="">Thuộc tính</label>
                                    @foreach ($atb as $atb1)
                                        <p><b>{{$atb1->name}}</b></p>
                                        <select multiple name="attribute_value_id[]" id="input" class="form-control">
                                            @foreach ($atb_vl as $item)
                                                @if ($atb1->id==$item->attribute_id)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                        <br>
                                    @endforeach
                                </div>
                                <div class="form-group">
                                    <label for="">Tags</label>
                                    <select multiple name="tag_id[]" id="input" class="form-control">
                                        @foreach ($tags as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group"
                                    <label for="">Image</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="image" name="image" >
                                        <span class="input-group-btn">
                                            <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Select!</a>
                                        </span>
                                    </div>
                                    <img src="" alt="" id="show_img" width="100%" height="auto">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <a href="{{route('admin.product.index')}}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary pull-right">Thêm mới</button>
                    </div>
                </form>
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
<div class="modal fade" id="modal-files">
    <div class="modal-dialog" style="width:85%">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Quản lý File</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <iframe src="{{url('file')}}/dialog.php?akey=zpouGWh1v4acrwKBOsA4rLPcghewjRLvjUucQzfCPM&field_id=image_list" frameborder="0" width="100%" height="600px" style="overflow-y: auto;border:0;"></iframe>
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

        $('#modal-files').on('hide.bs.modal',function(){
            var _imgs=$('input#image_list').val();
            var img_list=$.parseJSON(_imgs);
            var _html='';
            for(var i=0;i<img_list.length;i++){
                _html+='<div class="col-md-3 col-lg-3 thumbnail">';
                _html+='<img src="'+img_list[i]+'" width="100%" height="auto" alt="">';
                _html+='</div>';
            }
            $('#img_Show_List').html(_html);
        });
    </script>
@endsection
