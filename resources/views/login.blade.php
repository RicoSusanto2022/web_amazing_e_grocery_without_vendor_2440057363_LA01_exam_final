@extends('web_template')
@section('web_content')
<div class="h-100 d-flex justify-content-center align-items-center">
    <div class="shadow bg-white w-50 rounded py-3">
        <h4 class="fw-semibold custom-txt-green text-center my-2">{{__("translate.login.title")}}</h4>
        <div class="w-100 px-4 d-flex justify-content-center">
            <div class="w-100 custom-bg-green rounded" style="height: 0.3vh"></div>
        </div>
        <br>
        <form action="{{route('login_to_db')}}" method="POST" class="px-4" enctype="multipart/form-data">
            @csrf
            <div class="w-100 me-5 mt-3">
                <label for="em" class="d-block fw-semibold text-secondary">{{__("translate.login.email")}}</label>
                <input name="email" id="em" type="text" class="p-1 w-100 border border-secondary rounded">
            </div>

            <div class="w-100 me-5 mt-3">
                <label for="pw" class="d-block fw-semibold text-secondary">{{__("translate.login.pw")}}</label>
                <input name="password" id="pw" type="password" class="p-1 w-100 border border-secondary rounded">
            </div>
            @error('message_error')
                <div class="text-danger">
                    {{$message}}
                </div>
            @enderror

            <div class="mt-4 w-100">
                <button type="submit" class="w-100 btn-actv text-light fw-semibold">{{__("translate.login.btn")}}</button>
                <a href="{{route("display_regist_form")}}" class="text-decoration-none custom-txt-green">
                    <div class="custom-txt-green text-center">
                        {{__("translate.login.text")}}
                    </div>
                </a>
            </div>
        </form>
    </div>
</div>
@endsection