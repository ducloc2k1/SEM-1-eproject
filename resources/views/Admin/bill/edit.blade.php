@extends('layouts.admin')
@section('main_admin')
<section class="content-header">
    <h1>
        Chi tiết đơn hàng
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Bill</a></li>
        <li class="active">List</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <div class="row">
                <div class="col-md-12">
                    <div class="container123  col-md-6"   style="">
                        <h4></h4>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="col-md-4">Thông tin khách hàng</th>
                                <th class="col-md-6"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Thông tin người đặt hàng</td>
                                @if ($bill->customer->display_name)
                                    <td>{{ $bill->customer->display_name }}</td>
                                @else
                                    <td>{{ $bill->customer->display_name }}</td>
                                @endif
                            </tr>
                            <tr>
                                <td>Ngày đặt hàng</td>
                                <td>{{ $bill->created_at }}</td>
                            </tr>
                            <tr>
                                <td>Số điện thoại</td>
                                <td>{{ $bill->customer->phone }}</td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td>{{ $bill->customer->address }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $bill->customer->email }}</td>
                            </tr>
                            <tr>
                                <td>Công ty</td>
                                <td>{{ $bill->customer->conpany }}</td>
                            </tr>
                            <tr>
                                <td>Quốc gia</td>
                                <td>{{ $bill->customer->country }}</td>
                            </tr>
                            <tr>
                                <td>Thành phố</td>
                                <td>{{ $bill->customer->town }}</td>
                            </tr>
                            <tr>
                                <td>Mã bưu điện</td>
                                <td>{{ $bill->customer->post_code }}</td>
                            </tr>
                            <tr>
                                <td>Ghi chú</td>
                                <td>{{ $bill->bill_note }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <table id="myTable" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                        <thead>
                        <tr role="row">
                            <th class="sorting col-md-1" >STT</th>
                            <th class="sorting_asc col-md-4">Tên sản phẩm</th>
                            <th class="sorting col-md-2">Số lượng</th>
                            <th class="sorting col-md-2">Giá tiền</th>
                        </thead>
                        <tbody>
                        @foreach($bill_detail as $key => $pro)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $pro->product->name }}</td>
                                <td>{{ $pro->quantity }}</td>
                                <td>$ {{ number_format($pro->price,2) }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="3"><b>Tổng tiền</b></td>
                            <td colspan="1"><b class="text-red">$ {{ number_format($bill->total_price,2) }}</b></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-12">
            <form action="{{route('admin.bill.update',$bill->id)}}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                <div class="col-md-8"></div>
                <div class="col-md-4">
                    <div class="form-inline">
                        <label>Trạng thái giao hàng: </label>
                        <select name="status" class="form-control input-inline" style="width: 200px">
                            <option value="1">Chưa giao hàng</option>
                            <option value="2">Đang giao hàng</option>
                            <option value="3">Đã giao hàng</option>
                        </select>

                        <input type="submit" value="Xử lý" class="btn btn-primary">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
