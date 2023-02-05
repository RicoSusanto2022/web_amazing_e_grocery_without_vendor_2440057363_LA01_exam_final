@extends('web_template')
@section('web_content')
    <div>
        <div class="my-4"></div>
        @if (count($acc)<1)
            <div class="text-center fw-bold fs-3">
                No Account
            </div>
        @else
            @foreach ($acc as $ac)
            <form action="{{route('role_updated')}}" enctype="multipart/form-data" method="POST">
                @method("patch")
                @csrf
                <div>
                    <div class="my-2 p-2 fw-bold text-light custom-bg-green rounded">
                        {{__("translate.detail_acc.first")}} {{$ac->first_name}}
                    </div>
                    <div class="my-2 p-2 fw-bold text-light custom-bg-green rounded">
                        {{__("translate.detail_acc.last")}} {{$ac->last_name}}
                    </div>
                    <input type="number" value="{{$ac->id}}" name="acc_id" style="display:none">
                    <label class="d-block fw-semibold text-secondary">{{__("translate.detail_acc.role")}}</label>
                    <select name="role" class="w-100 border border-secondary rounded" style="padding: 1%">
                        <option value="" disabled selected>{{__("translate.detail_acc.role_lbl")}}</option>
                        <option value="1">User</option>
                        <option value="2">Admin</option>
                    </select>
                </div>
                <button type="submit" class="btn-in-actv fw-semibold custom-txt-green w-100 my-4">{{__("translate.detail_acc.save")}}</button>
            </form>
            @endforeach
        @endif
    </div>
@endsection