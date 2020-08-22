@extends('layouts.admin')
@section('main_admin')
<section class="content">
    <div class="row">
        <div class="col-md-4">
            <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Thêm mới giá trị thuộc tính</h3>
                </div>
                <div class="box-body">
                    <form action="{{route('admin.attribute_value.update',$atb_value->id)}}" method="POST" role="form">
                        @csrf @method('PUT')
                        <div class="form-group">
                            <label for="">Gía trị</label>
                            <input type="text" class="form-control" id="" name="name" value="{{$atb_value->name}}">
                        </div>
                        <div class="form-group">
                            <label>Color picker with addon</label>
                            <div class="input-group my-colorpicker2 colorpicker-element">
                              <input type="text" class="form-control" name="ma_color" value="{{$atb_value->ma_color}}">
                              <div class="input-group-addon">
                                <i></i>
                              </div>
                            </div>
                          </div>
                        <div class="form-group">
                            <label>Attribute</label>
                            <select name="attribute_id" id="input" class="form-control">
                                <option value="">Chọn một</option>
                                @foreach ($atb as $item)
                                    <option value="{{$item->id}}" {{$item->id==$atb_value->attribute_id?'selected':''}}>{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                    </form>
                </div>
              </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="panel-title">Danh sách giá trị thuộc tính</h3>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Preview</th>
                                <th>Name</th>
                                <th>Attribute</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$atb_value->id}}</td>
                                <td>
                                    <div class="block-color input-group-addon">
                                        <i style="background-color: {{$atb_value->ma_color}}"></i>
                                    </div>
                                </td>
                                <td>{{$atb_value->name}}</td>
                                <td>{{$atb_value->attribute->name}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
