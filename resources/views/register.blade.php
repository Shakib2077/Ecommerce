@extends('master')
@section('content')

<div class="container custom-register">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
          <form action="register" method="POST">
                <div class="form-group">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="form-label">User Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your Email">
                    </div>
                    <label for="username" class="form-label">User Name</label>
                    <input type="name" name="name" class="form-control" id="username" placeholder="User Name">
                </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>
@endsection