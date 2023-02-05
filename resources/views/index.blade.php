@extends('web_template')
@section('web_content')
<div class="dflt-h d-flex flex-column justify-content-center align-items-center">
    <div class="text-center d-flex">
        <h1 class="fw-bold custom-txt-green title-r">{{__("translate.index.title")}}</h1> 
    </div>
    <div class="bar-mov rounded"></div>
    <div class="mt-3 fw-semibold">
        {{__("translate.index.create")}}
    </div>
    <div class="mt-2 w-50 text-center">
        {{__("translate.index.desc")}}
    </div>
</div>
@endsection