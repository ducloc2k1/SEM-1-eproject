@extends('layouts.admin')
@section('main_admin')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="panel-title">Danh sách nhận xét</h3>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Khách hàng</th>
                                <th>Title</th>
                                <th>Star number</th>
                                <th>Content</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cmt_pro as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{str_replace("@gmail.com","",$item->customer->email)}}</td>
                                <td>{{$item->product->name}}</td>
                                <td>{{$item->star_number}}</td>
                                <td>{{$item->content}}</td>
                                <td>{{date_format($item->created_at,"d/m/Y")}}</td>
                                <td>
                                    <form action="{{route('admin.comment_product.destroy',$item->id)}}" method="POST" class="form-inline" role="form">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-xs btn-warning fa fa-trash"></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-center">
                        <div class="clearfix">
                            {{ $cmt_pro->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
