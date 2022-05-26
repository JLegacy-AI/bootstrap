@php 
$settings = \App\Settings::find(1);
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{$settings->application_name}}</title>
    @include('layouts.meta')
    @include('driver.layouts.head')
</head>

<body class="">
    @yield('content')
    @include('driver.footer')
    @include('driver.layouts.scripts')
</body>

</html>