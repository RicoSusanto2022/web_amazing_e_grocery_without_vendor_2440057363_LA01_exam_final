@extends('web_template')
@section('web_content')
    <div>
        <div class="my-4"></div>
        @if (count($item)<1)
            <div class="text-center fw-bold fs-3">
                No Data
            </div>
        @else
            @foreach ($item as $items)
                <div class="d-flex py-4">
                    <div class="me-4">
                        <img src="{{'/assets/' . $items->item_picture}}" class="rounded" alt="{{$items->item_picture}}" style="height: 350px; width: 450px">
                    </div>
                    <div class="w-50 position-relative">
                        <div class="d-flex align-items-center">
                            <div class="fs-3 fw-bold text-secondary me-3">
                                {{$items->item_name}}
                            </div>
                            <div class="bg-warning fitty p-1 rounded text-dark fw-bold">
                                Rp{{$items->price}},00
                            </div>
                        </div>
                        @if (app()->getLocale() == "id")
                            <div>{{$items->item_desc_id}}</div>
                        @else
                            <div>{{$items->item_desc_en}}</div>
                        @endif
                        <div class="d-flex position-absolute bottom-0 w-100">
                            <a href="{{route("back")}}" class="d-block w-50 me-2 fw-bold text-center btn-in-actv text-decoration-none custom-txt-green">{{__("translate.product_detail.back")}}</a>
                            <form action="{{route("add_item")}}" enctype="multipart/form-data" method="POST" class="d-block w-50 fw-bold" style="cursor: pointer;">
                                @csrf
                                <input type="number" name="item_id" style="display:none;" value="{{$items->item_id}}">
                                <input type="number" name="price" style="display:none;" value="{{$items->price}}">
                                <button type="submit" class="text-decoration-none text-light border-0 fw-semibold custom-bg-green rounded h-100 w-100">{{__("translate.product_detail.buy")}}</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection