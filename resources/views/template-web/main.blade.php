<!DOCTYPE html>
<html lang="en">

<head>
    @include('template-web.header')

    <title>@yield('title')</title>
</head>


<body>
    <div id="app">
        @include('template-web.navbar')
        @yield('content')
    </div>

    @include('template-web.footer')
</body>

</html>
