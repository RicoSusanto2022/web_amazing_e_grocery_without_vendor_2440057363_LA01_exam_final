<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('CSS/style.css')}}">
    <title>Amazing E Grocery</title>
</head>
<body>
    @if (!Auth::user())
        @include('Navbar.guest_navbar')
    @else
        @if (Auth::user()->role_id == 1)
            @include('Navbar.user_navbar')
        @else
            @include('Navbar.admin_navbar')
        @endif
    @endif
    <div class="px-5 py-3 mb-3" style="min-height: 90vh">
        @yield('web_content')
    </div>
    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>