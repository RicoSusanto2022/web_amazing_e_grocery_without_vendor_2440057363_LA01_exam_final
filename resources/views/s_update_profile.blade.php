@extends('web_template')
@section('web_content')
    <div class="d-flex justify-content-center flex-column align-items-center h-100">
        <div class="fs-3">
            {{__("translate.success.profile.title")}}
        </div>
        <a href="{{route("back")}}" class="text-decoration-none">
            <div class="fw-semibold custom-txt-green">
                {{__("translate.success.profile.desc")}}
            </div>
        </a>
    </div>
@endsection