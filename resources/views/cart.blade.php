@extends('web_template')
@section('web_content')
<div>
    @if (count($carts)<1)
        <div class="d-flex justify-content-center flex-column align-items-center h-100">
            <div class="fs-3 text-secondary fw-bold">
                {{__("translate.cart_tran.cart_empty")}}
            </div>
            <a href="{{route("back")}}" class="text-decoration-none">
                <div class="fw-semibold custom-txt-green">
                    {{__("translate.cart_tran.cart_msg")}}
                </div>
            </a>
        </div>
    @else
    <table class="table">
        <thead>
            <tr>
                <th class="text-center" scope="col">{{__("translate.cart_tran.img")}}</th>
                <th class="text-center" scope="col">{{__("translate.cart_tran.name")}}</th>
                <th class="text-center" scope="col">{{__("translate.cart_tran.price")}}</th>
                <th class="text-center" scope="col">{{__("translate.cart_tran.action")}}</th>
            </tr>
        </thead>
        <tbody>
            <div style="display: none">
                {{$grand_total = 0}}
            </div>
            @foreach ($carts as $cart)
            <tr>
                <td class="text-center"><img style="height: 38px; width:38px;" class="rounded" src="{{"/assets/".$cart->has_item->item_picture}}"></td>
                <td class="text-center">{{$cart->has_item->item_name}}</td>
                <td class="text-center">{{$cart->price}}</td>
                <td class="text-center">
                    <form action="{{route("remove_from_cart", ["cart_id" => $cart->cart_id])}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">{{__("translate.cart_tran.del")}}</button>
                    </form>
                </td>
                <div style="display: none">
                    {{$grand_total += $cart->price}}
                </div>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex flex-column align-items-end" style="margin-right: 13%">
        <div class="fs-4 fw-semibold">
            Total: {{$grand_total}},-
        </div>
        <a href="{{route("order_added")}}" class="text-end text-decoration-none text-light fw-semibold">
            <div class="btn-actv fitty">
                {{__("translate.cart_tran.co")}}
            </div>
        </a>
    </div>
    
    @endif
</div>
@endsection