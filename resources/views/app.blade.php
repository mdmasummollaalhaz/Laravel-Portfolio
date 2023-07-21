<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Portfolio</title>
</head>
<body>

    @include('components.navbar')

    @include('components.loader')

    <div class="" id="content-div">
        @yield('content')
    </div>

    @include('components.footer')


</body>
</html>
