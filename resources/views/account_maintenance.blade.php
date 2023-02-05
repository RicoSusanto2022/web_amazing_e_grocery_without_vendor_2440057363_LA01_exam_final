@extends('web_template')
@section('web_content')
<div>
    @if (count($accs)<1)
        <div class="d-flex justify-content-center flex-column align-items-center h-100">
            <div class="fs-3 text-secondary fw-bold">
                {{__("tranlate.acc.no_data")}}
            </div>
            <a href="{{route("back")}}" class="text-decoration-none">
                <div class="fw-semibold custom-txt-green">
                    {{__("translate.acc.desc")}}
                </div>
            </a>
        </div>
    @else
    <table class="table">
        <thead>
            <tr>
                <th class="text-center" scope="col">{{__("translate.acc.account")}}</th>
                <th class="text-center" scope="col">{{__("translate.acc.action")}}</th>
            </tr>
        </thead>
        <tbody>
            <div style="display: none">
                {{$grand_total = 0}}
            </div>
            @foreach ($accs as $acc)
            <tr>
                @if ($acc->role_id == 1)
                    <td class="text-center">{{$acc->first_name ." ". $acc->last_name . " - User" }}</td>
                @else
                    <td class="text-center">{{$acc->first_name ." ". $acc->last_name . " - Admin"}}</td>
                @endif
                <td class="d-flex justify-content-center align-items-center">
                    <form action="{{route("delete_acc", ["id"=>$acc->id])}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">{{__("translate.acc.action_1")}}</button>
                    </form>
                    <a href="{{route('acc_update', ["id"=>"$acc->id"])}}" class="ms-2 text-decoration-none text-white">
                        <div class="btn btn-warning">
                            {{__("translate.acc.action_2")}}
                        </div>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection