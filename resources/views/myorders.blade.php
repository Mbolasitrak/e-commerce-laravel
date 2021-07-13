@extends('master')
@section("content")
    <div class="container custom-product">

        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h4>my orders</h4>
                @foreach($orders as $item)
                    <div class="row searched-item card-list-devider">
                        <div class="col-sm-3">
                            <a href="detail/{{$item->id}}">
                                <img class="trending-image" src="{{$item->gallery}}">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <div class="">
                                <h5>Name : {{$item->name}}</h5>
                                <h5>Delivery Status : {{$item->description}}</h5>
                                <h5>Adress : {{$item->address}}</h5>
                                <h5>Payment status : {{$item->payment_status}}</h5>
                                <h5>Payment Method : {{$item->payment_method}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
