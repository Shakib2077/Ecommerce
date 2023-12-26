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
        <td>{{$total * 2 / 100}}TK</td>
      </tr>
      <tr>
        <td>Delivary Charge</td>
        <td>{{$total * 0.3 / 100}}</td>
      </tr>
      <tr>
        <td>Total Payble Amount</td>
        <td>{{$total+($total * 2 / 100)+($total * 0.3 / 100)}}</td>
      </tr>
    </tbody>
  </table>

        <form>
        <div class="form-group">
            <textarea class="form-control" ></textarea>
        </div>
        <div class="form-group">
            <label for="">Payment Method</label>
            <p><input type="radio" name="payment"><span> Visa Card Payment</span></p>
            <p><input type="radio" name="payment"><span> Bkash/Nagad/Rocket</span></p>
            <p><input type="radio" name="payment"><span> Cash On Delivery</span></p>
        </div>
        <button type="submit" class="btn btn-danger">order Now</button>
        </form>

    </div>
</div>
@endsection 

