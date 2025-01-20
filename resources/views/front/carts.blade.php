@extends('layouts.front')
@section('content')

    <div class="container my-5 py-5">
        <h3 class="text-center py-3"> My Shopping Carts</h3>
        <div class="table-responsive">
            <table class="table table-border">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Item Name</th>
                        <th>Item Image</th>
                        <th>Item Price</th>
                        <th>Item Discount</th>
                        <th>Qty</th>
                        <th>Account</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                    
                </tbody>
            </table>
        </div>

        <div class="d-grid gat-2">
        @guest
        <a href="/login" class="btn btn-primary">Login</a>
        @else
        <form action="" id="paymentForm" class="row" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
                <label for="payment_slip">Payment Slip</label>
                <input type="file" name="payment_slip" id="payment_slip" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="payment_method">Payment Method</label>
                <select type="file" name="payment_method" id="payment_slip" class="form-select">
                <option value="">Choose Payment Method</option>
                @foreach($payments as $payment)
                <option value="{{$payment->id}}">{{$payment->name}}</option>
                @endforeach
                </select>
            </div>
            <div class="col-md-12">
                <label for="note">Note</label>
                <textarea name="note" id="" class="form-control"></textarea>
            </div>
            <button class="btn btn-success my-3" type="submit" id="order-now">Order Now</button>
        </form>
        @endif
    </div>
    </div>
    
@endsection
@section('script')
<script>
    $(document).ready(function(){
        // ajax setup
        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// $('#order-now').click(function(){
//     let itemString = localStorage.getItem('shops');
//     $.post("{{route('orderNow')}}",{data:itemString},function(response){
//         console.log(response);
//     })
// })

$('#paymentForm').on('submit', function(e){
    e.preventDefault();
    var formData = new FormData(this);
    console.log(formData);

    let itemString = localStorage.getItem('shops');
    formData.append('orderItems',itemString);
    // processData = false,
    // contentType = false
    // form data သယ်ဖို့

    $.ajax({
        type: 'POST',
        url: "{{route('orderNow')}}",
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            console.log(response);
            if(response){
                alert('Order Successful');
                localStorage.clear('shops');
                location.href = '/';
            }
        }
    })

})
    })
</script>
@endsection