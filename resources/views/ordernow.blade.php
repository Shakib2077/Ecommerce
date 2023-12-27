@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-6">
    <table class="table table-striped">
    <tbody>
      <tr>
        <td>Price</td>
        <td>{{$total}} TK</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>{{$total * 1 / 100}}TK</td>
      </tr>
      <tr>
        <td>Delivary Charge</td>
        <td>{{$total * 0.3 / 100}}TK </td>
      </tr>
      <tr>
        <td>Total Payble Amount</td>
        <td>{{$total+($total * 1 / 100)+($total * 0.3 / 100)}}TK</td>
      </tr>
    </tbody>
  </table>

        <form method="POST" action="orderplace">
          @csrf
        <div class="form-group">
            <textarea placeholder="Enter your address" name="address" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="">Payment Method</label>
            <p><input type="radio" value="card" name="payment"><span> Visa Card Payment</span></p>
            <p><input type="radio" value="Bkash/Nagad" name="payment"><span> Mobile Banking</span></p>
            <p><input type="radio" value="cash" name="payment"><span> Cash On Delivery</span></p>
        </div>
        <button type="submit" class="btn btn-danger">order Now</button>
        </form>

    </div>
</div>
@endsection 

