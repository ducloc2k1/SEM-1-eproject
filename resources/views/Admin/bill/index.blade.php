@extends('layouts.admin')
@section('main_admin')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-7">
                            <h3 class="panel-title">Danh sách đơn hàng</h3>
                        </div>
                        <div class="col-md-4">
                            <form class="input-form" action="" method="GET" role="form">
                                @csrf
                                <div class="input-group">
                                    <input class="form-control" name="key" type="search" placeholder="Search" aria-label="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-navbar" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên người order</th>
                                <th>Địa chỉ</th>
                                <th>Email</th>
                                <th>Ngày đặt hàng</th>
                                <th>Trạng thái</th>
                                <th>Action</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bill as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->customer->display_name}}</td>
                                <td>{{$item->customer->address}}</td>
                                <td>{{$item->customer->email}}</td>
                                <td>{{$item->created_at}}</td>
                                <td>
                                    @if ($item->status==2)
                                        Đang giao hàng
                                    @elseif($item->status==3)
                                        Đã giao hàng
                                    @elseif($item->status==1)
                                        Chưa giao hàng
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('admin.bill.edit',$item->id)}}">Detail</a>
                                </td>
                                <td>
                                    <form action="{{route('admin.bill.destroy',$item->id)}}" method="POST" class="form-inline" role="form">
                                        @csrf @method('DELETE')
                                        @if (Auth::user()->can('admin.product.destroy'))
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
                            {{ $bill->appends(request()->only('key'))->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
