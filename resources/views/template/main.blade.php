<!DOCTYPE html>
<html lang="en">

<head>
    @include('template.header')

    <title>@yield('title')</title>
</head>


<body>
    <div id="app">
        @include('template.sidebar')
        @yield('content')
    </div>

    @include('template.footer')
</body>

</html>
