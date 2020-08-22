@extends('layouts.admin')
@section('main_admin')
<section class="content">
    <div class="box box-primary">
        <form action="{{route('admin.blog.store')}}" id="form_post" method="POST" role="form"
            enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Thêm tin tức</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="">Tiêu đề</label>
                                <input name="title" type="text" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Slug</label>
                                <input name="slug" id="slug" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Tóm tắt</label>
                                <input name="summary" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Nội dung</label>
                                <textarea id="content_post" name="content"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Danh mục</h3>
                        </div>
                        <div class="panel-body">
                            <select name="cat_blog_id" form="form_post" id="input" class="form-control"
                                required="required">
                                @foreach ($cat_posts as $cat_post)
                                <option value="{{$cat_post->id}}">{{$cat_post->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Thẻ bài viết</h3>
                        </div>
                        <div class="panel-body">
                            <select id="foo_select" class="select-tag" name="tag_blog[]" form="form_post" multiple
                                data-placeholder="Click to select an option...">
                                @foreach ($tags as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Ảnh banner</h3>
                        </div>
                        <div class="panel-body">
                            <div class="input-group">
                                <input type="text" class="form-control" id="image_big" name="image">
                                <span class="input-group-btn">
                                    <a class="btn btn-primary" data-toggle="modal" href='#modal-id-big'>Select!</a>
                                </span>
                            </div>
                            <img src="" alt="" id="show_img_big" width="100%" height="auto">
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Ảnh thumbnail</h3>
                        </div>
                        <div class="panel-body">
                            <div class="input-group">
                                <input type="text" class="form-control" id="image_small" name="thumbnail">
                                <span class="input-group-btn">
                                    <a class="btn btn-primary" data-toggle="modal" href='#modal-id-small'>Select!</a>
                                </span>
                            </div>
                            <img src="" alt="" id="show_img_small" width="100%" height="auto">
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Trạng thái</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" value="0" name="status" checked>
                                <label class="form-check-label" for="exampleCheck1">Ẩn</label>
                                <input type="radio" class="form-check-input" value="1" name="status">
                                <label class="form-check-label" for="exampleCheck1">Hiện</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <a href="{{route('admin.blog.index')}}" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-primary pull-right">Thêm mới</button>
            </div>
        </form>
    </div>
</section>
<div class="modal fade" id="modal-id-small">
    <div class="modal-dialog" style="width:85%">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Quản lý File</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <iframe src="{{url('file')}}/dialog.php?akey=zpouGWh1v4acrwKBOsA4rLPcghewjRLvjUucQzfCPM&field_id=image_small"
                    frameborder="0" width="100%" height="600px" style="overflow-y: auto;border:0;"></iframe>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-id-big">
    <div class="modal-dialog" style="width:85%">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Quản lý File</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <iframe src="{{url('file')}}/dialog.php?akey=zpouGWh1v4acrwKBOsA4rLPcghewjRLvjUucQzfCPM&field_id=image_big"
                    frameborder="0" width="100%" height="600px" style="overflow-y: auto;border:0;"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{url('/public/admin')}}/dist/js/slug.js"></script>
<script type="text/javascript">
    $('#modal-id-small').on('hide.bs.modal', function () {
        var _img = $('input#image_small').val();
        $('img#show_img_small').attr('src', _img);
    });

    $('#modal-id-big').on('hide.bs.modal', function () {
        var _img = $('input#image_big').val();
        $('img#show_img_big').attr('src', _img);
    });

    $(function () {
        $('.select-tag').chosen();
    })


    //config ckeditor
    var editor = CKEDITOR.replace('content', {
        height: 300,
        filebrowserBrowseUrl : '/fashion_project/file/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/fashion_project/file/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/fashion_project/file/dialog.php?type=1&editor=ckeditor&fldr='
    });

</script>
@endsection
