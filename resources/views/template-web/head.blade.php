<!DOCTYPE html>
<html lang="en">

<head>
    @include('template-web.header')

    <title>@yield('title')</title>
</head>


<body>
    <div id="app">
        @yield('content')
    </div>
</body>

</html>
