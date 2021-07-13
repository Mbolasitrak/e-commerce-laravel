@extends('master')
@section("content")
    <div class="container custom-login">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <form action="register" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="inputMail">User Name</label>
                        <input type="email" name="name" class="form-control" id="inputMail" placeholder="User Name">
                    </div>
                    <div class="form-group">
                        <label for="inputMail">Email address</label>
                        <input type="email" name="email" class="form-control" id="inputMail" placeholder="mail">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
@endsection
