@extends('web_template')
@section('web_content')
<div>
    @if (count($orders)<1)
        <div class="d-flex justify-content-center flex-column align-items-center h-100">
            <div class="fs-3 text-secondary fw-bold">
                {{__("translate.cart_tran.order_empty")}}
            </div>
            <a href="{{route("back")}}" class="text-decoration-none">
                <div class="fw-semibold custom-txt-green">
                    {{__("translate.cart_tran.order_msg")}}
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
            </tr>
        </thead>
        <tbody>
            <div style="display: none">
                {{$grand_total = 0}}
            </div>
            @foreach ($orders as $order)
            <tr>
                <td class="text-center"><img style="height: 38px; width:38px;" class="rounded" src="{{"/assets/".$order->has_item_order->item_picture}}"></td>
                <td class="text-center">{{$order->has_item_order->item_name}}</td>
                <td class="text-center">{{$order->price}}</td>
            </tr>
            <div style="display: none">
                {{$grand_total += $order->price}}
            </div>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex flex-column align-items-end" style="margin-right: 13%">
        <div class="fs-4 fw-semibold">
            Total: {{$grand_total}},-
        </div>
    </div>
    
    @endif
</div>
@endsection