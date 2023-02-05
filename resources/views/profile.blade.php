@extends('web_template')
@section('web_content')
<div class="d-flex h-100 justify-content-center align-items-center">
    <div class="shadow bg-white w-50 rounded py-3">
        <h4 class="fw-semibold custom-txt-green text-center my-2">{{__("translate.register_profile.title_2")}}</h4>
        <div class="w-100 px-4 d-flex justify-content-center">
            <div class="w-100 custom-bg-green rounded" style="height: 0.3vh"></div>
        </div>
        <br>
        <form action="{{route("update")}}" class="px-4" enctype="multipart/form-data" method="POST">
            @method("patch")
            @csrf
            <div class="d-flex justify-content-center mb-4">
                <img class="rounded p-2 custom-ol-green" src="{{asset("storage/display_picture/".Auth::user()->display_picture_link)}}" style="width:100px; height:100px">
            </div>
            <div class="d-flex justify-content-between">
                <div class="w-50 me-5">
                    <label for="fn" class="d-block fw-semibold text-secondary">{{__("translate.register_profile.first")}}</label>
                    <input name="first_name" value="{{Auth::user()->first_name}}" id="fn" type="text" class="p-1 w-100 border border-secondary rounded">
                    <div class="text-danger">
                        @error('first_name')
                            {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="w-50">
                    <label for="ln" class="d-block fw-semibold text-secondary">{{__("translate.register_profile.last")}}</label>
                    <input name="last_name" value="{{Auth::user()->last_name}}" id="ln" type="text" class="p-1 w-100 border border-secondary rounded">
                    <div class="text-danger">
                        @error('last_name')
                            {{$message}}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="w-50 me-5">
                    <label for="em" class="d-block fw-semibold text-secondary">{{__("translate.register_profile.email")}}</label>
                    <input name="email" value="{{Auth::user()->email}}" id="em" type="text" class="p-1 w-100 border border-secondary rounded">
                    <div class="text-danger">
                        @error('email')
                            {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="w-50">
                    <label class="d-block fw-semibold text-secondary">{{__("translate.register_profile.role")}}</label>
                    <input name="" readonly value="{{Auth::user()->has_role->role_name}}" id="em" type="text" style="background-color: rgb(190, 190, 190)" class="text-center p-1 w-100 border border-secondary rounded">
                    <input style="display: none" name="role" value="{{Auth::user()->role_id}}" id="em" type="text">
                    
                </div>
            </div>
            <div class="d-flex justify-content-between mt-3">
                <div class="w-50 me-5">
                    <label class="d-block fw-semibold text-secondary">{{__("translate.register_profile.gender")}}</label>
                    <div class="d-flex">
                        <div>
                            <input style="display: none" type="radio" id="ml" name="gender" value="{{Auth::user()->role_id}}" class="text-secondary">
                        </div>
                        @if (Auth::user()->gender_id == 1)
                            <div class="me-3">
                                <input type="radio" checked  id="ml" name="gender" value="1" class="text-secondary">
                                <label for="ml">{{__("translate.register_profile.gender_1")}}</label><br>
                            </div>
                            <div>
                                <input type="radio"  id="fm" name="gender" value="2" class="text-secondary">
                                <label for="fm">{{__("translate.register_profile.gender_2")}}</label><br>
                            </div>
                        @else
                            <div class="me-3">
                                <input type="radio" id="ml" name="gender" value="1" class="text-secondary">
                                <label for="ml">{{__("translate.register_profile.gender_1")}}</label><br>
                            </div>
                            <div>
                                <input type="radio" checked id="fm" name="gender" value="2" class="text-secondary">
                                <label for="fm">{{__("translate.register_profile.gender_2")}}</label><br>
                            </div>
                        @endif

                        <div class="text-danger">
                            @error('gender')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="w-50">
                    <label for="pc" class="d-block fw-semibold text-secondary">{{__("translate.register_profile.pict")}}</label>
                    <input name="picture" id="pc" type="file" class="p-1 w-100 border border-secondary rounded">
                    <div class="text-danger">
                        @error('picture')
                            {{$message}}
                        @enderror
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between mt-3">
                <div class="w-50 me-5">
                    <label for="pw" class="d-block fw-semibold text-secondary">{{__("translate.register_profile.pw")}}</label>
                    <input name="password" id="pw" type="password" class="p-1 w-100 border border-secondary rounded">
                    <div class="text-danger">
                        @error('password')
                            {{$message}}
                        @enderror
                    </div>
                </div>
                <div class="w-50">
                    <label for="c-pw" class="d-block fw-semibold text-secondary">{{__("translate.register_profile.c_pw")}}</label>
                    <input name="confirm_password" id="c-pw" type="password" class="p-1 w-100 border border-secondary rounded">
                    <div class="text-danger">
                        @error('confirm_password')
                            {{$message}}
                        @enderror
                    </div>
                </div>
            </div>

            <br>
            <div class="text-warning fst-italic">
                {{__("translate.register_profile.msg_pro")}}
            </div>

            <div class="mt-4 w-100">
                <button type="submit" class="w-100 btn-actv text-light fw-semibold">{{__("translate.register_profile.save")}}</button>
            </div>
        </form>
    </div>
</div>
@endsection