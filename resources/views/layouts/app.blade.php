<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('design/design.css')}}">
    <title> @yield('title') </title>
    @yield('head') 
</head>
<body>
    
    @include('layouts.navigation')
    
    <div class="content">
        @yield('content') 
    </div>

    @include('layouts/footer')
</body>
</html>