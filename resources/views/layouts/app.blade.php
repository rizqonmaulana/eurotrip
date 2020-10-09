<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('includes.style')
    @stack('prepend-style-datepicker')
    @stack('addon-style')
</head>
<body>

@stack('prepand-style')
@yield('content-login')

@stack('prepand-style')
@include('includes.navbar')
@yield('content')
@include('includes.footer')




@stack('prepend-script')
@include('includes.script')
@stack('addon-script')
@stack('addon-script-datepicker')

</body>
</html>
