@extends('master')
@section('content')
    <div class="custom-product">
        <div class="col-sm-10">
            <table class="table table-hover">
                <tbody>
                <tr>
                    <td>Amount</td>
                    <td>{{$total}}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$ 0</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>$ 10</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td> $ {{$total+10}}</td>
                </tr>
                </tbody>
            </table>
            <div>
                <form action="/action_page.php">
                    <div class="form-group">
                        <textarea type="email" placeholder="enter your address" class="form-control" ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Payement Method:</label> <br>
                        <input type="radio" name="payment"><span>online payment</span><br><br>
                        <input type="radio" name="payment"><span>EMI payment</span><br><br>
                        <input type="radio" name="payment"><span>Payment Delivery</span><br><br>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
