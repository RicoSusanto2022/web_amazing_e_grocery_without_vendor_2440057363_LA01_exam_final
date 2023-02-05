@extends('web_template')
@section('web_content')
<div style="height: fit-content;">
    @if (count($item) < 1)
        <div class="text-center fw-bold my-3">
            Sorry We're out of stock
        </div>
    @else
        <div class="row d-flex justify-content-center gap-3">
        @foreach ($item as $items)
            <div class="col-sm-3 shadow-sm rounded custom-ol-green my-2 p-3 d-flex justify-content-center flex-column align-items-center" style="width: 16rem">
                <img src="{{'/assets/' . $items->item_picture}}" class="rounded" alt="" style="height: 150px; width: 220px">
                <div class="fs-5 text-secondary fw-bold">{{$items->item_name}}</div>
                <a href="{{route("display_detail", ["item_id" => "$items->item_id"])}}" class="w-100 text-center btn-actv text-decoration-none text-light">{{__("translate.home.btn")}}</a>
            </div>
        @endforeach
        <div class="w-100 d-flex justify-content-center">
            {{$item->links()}}
        </div>
    </div>
    @endif
</div>
@endsection