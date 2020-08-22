@extends('layouts.admin')
@section('main_admin')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-7">
                            <h3 class="panel-title">Danh sách sản phẩm</h3>
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
                                <th>#</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Sale price</th>
                                <th>Quantity</th>
                                <th>Category</th>
                                <th>status</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pro as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>
                                    <img src="{{url('uploads')}}/{{$item->image}}" alt="" width="70px">
                                </td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->sale_price}}</td>
                                <td>{{$item->quantity}}</td>
                                <td>{{$item->category_product->name}}</td>
                                <td>
                                    {{$item->status?'Còn hàng':'Hết hàng'}}
                                </td>
                                <td>{{$item->created_at}}</td>
                                <td>
                                    <form action="{{route('admin.product.destroy',$item->id)}}" method="POST" class="form-inline" role="form">
                                        @csrf @method('DELETE')
                                        @if (Auth::user()->can('admin.product.edit'))
                                            <a href="{{route('admin.product.edit',$item->id)}}">
                                                <i class="btn btn-xs btn-danger fa fa-edit"></i>
                                            </a>
                                        @endif
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
                            {{$pro->appends(request()->only('key'))->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
