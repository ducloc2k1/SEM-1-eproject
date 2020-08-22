<h1>Hi {{$cus_name}} !</h1>
<p>
    <b>Cảm ơn quý khách hàng đã mua hàng tại cửa hàng ZONEX.</b>
</p>
<h4>Hóa đơn của quý khách vừa được phát hành với thông tin chi tiết như sau:</h4>
<h5>Mã đơn hàng: {{$bill->id}}</h5>
<h5>Ngày đặt hàng: {{$bill->created_at}}</h5>
<h5>Phương thức giao hàng: {{$bill->shipping->name}}</h5>
<h5>Phương thức thanh toán: {{$bill->payment->name}}</h5>
<h5>Tổng tiền thanh toán: {{ number_format($bill->total_price,2) }}</h5>
<h5>Trạng thái: đang xử lý</h5>

<h4>Chi tiết sản phẩm:</h4>
<table  class="table table-bordered table-hover">
    <thead>
    <tr role="row">
        <th >STT</th>
        <th >Tên sản phẩm</th>
        <th >Số lượng</th>
        <th >Giá tiền</th>
    </thead>
    <tbody>
    @foreach($items as $key => $pro)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $pro['name'] }}</td>
            <td>{{ $pro['quantity'] }}</td>
            <td>$ {{ number_format($pro['price'],2) }}</td>
        </tr>
    @endforeach
    <tr>
        <td colspan="3"><b>Tổng tiền</b></td>
        <td colspan="1"><b style="color: red">$ {{ number_format($bill->total_price,2) }}</b></td>
    </tr>
    </tbody>
</table>

<p>Nếu có vấn đề cần hỗ trợ về nội dung hóa đơn của Qúy khách vui lòng liên hệ lại vs chúng tôi qua số điện thoại 0123.456.789</p>
<h2>Trân trọng !</h2>
