@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-6">
    <table class="table table-bordered border-primary">
    <tbody>
      <tr>
        <td>Price</td>
        <td>{{$total}} TK</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>{{$tax = $total * 1 / 100}}TK</td>
      </tr>
      <tr>
        <td>Delivary Charge</td>
        <td>{{$deliveryCharge = $total * 0.3 / 100}}TK </td>
      </tr>
      <tr>
        <td>Total Payble Amount</td>
        <td>{{$totalAmount = $total + $tax + $deliveryCharge}}TK</td>
      </tr>
    </tbody>
  </table>

        <form method="POST" action="orderplace">
          @csrf
        <div class="form-group">
            <textarea placeholder="Enter your address" name="address" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="paymentMethod">Payment Method</label>
           <p>
              <input type="radio" id="cardPayment" value="card" name="payment">
              <label for="cardPayment">Visa Card Payment</label>
            </p>
            <p>
              <input type="radio" id="mobileBanking" value="Bkash/Nagad" name="payment">
              <label for="mobileBanking">Mobile Banking</label>
            </p>
            <p>
              <input type="radio" id="cashOnDelivery" value="cash" name="payment">
              <label for="cashOnDelivery">Cash On Delivery</label>
            </p>
      </div>


        <button type="submit" class="btn btn-danger">Order Now</button>
        </form>

    </div>
</div>
@endsection 

