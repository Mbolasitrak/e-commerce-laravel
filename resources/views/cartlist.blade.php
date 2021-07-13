@extends('master')
@section("content")
    <div class="container custom-product">

        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h2>Result for Products</h2>
                @foreach($products as $item)
                    <div class="row searched-item card-list-devider">
                        <div class="col-sm-3">
                            <a href="detail/{{$item->id}}">
                                <img class="trending-image" src="{{$item->gallery}}">
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <div class="">
                                <h3>{{$item->name}}</h3>
                                <h5>{{$item->description}}</h5>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <button href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove to Cart</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
