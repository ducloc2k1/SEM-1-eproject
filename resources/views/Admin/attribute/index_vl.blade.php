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
                    <form action="{{route('admin.attribute_value.store')}}" method="POST" role="form">
                        @csrf
                        <div class="form-group">
                            <label for="">Gía trị</label>
                            <input type="text" class="form-control" id="" name="name">
                        </div>
                        <div class="form-group">
                            <label>Color picker with addon</label>
                            <div class="input-group my-colorpicker2 colorpicker-element">
                              <input type="text" class="form-control" name="ma_color">
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
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($atb_value as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>
                                    @if ($item->ma_color)
                                    <div class="block-color input-group-addon">
                                        <i style="background-color: {{$item->ma_color}}"></i>
                                    </div>
                                    @endif
                                </td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->attribute->name}}</td>
                                <td>
                                    <form action="{{route('admin.attribute_value.destroy',$item->id)}}" method="POST" class="form-inline" role="form">
                                        @csrf @method('DELETE')
                                        @if (Auth::user()->can('admin.attribute_value.edit'))
                                        <a href="{{route('admin.attribute_value.edit',$item->id)}}">
                                            <i class="btn btn-xs btn-danger fa fa-edit"></i>
                                        </a>
                                        @endif
                                        @if (Auth::user()->can('admin.attribute_value.destroy'))
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
                            {{ $atb_value->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
