<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('includes.static.head')
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
</head>

<body class="landing-page sidebar-collapse">
    @include('includes.header')

    @yield('content_header')

    <div id="main" class="main main-raised">
        @yield('content')
    </div>

    <footer class="text-light bg-default">
        @include('includes.footer')
    </footer>

    @include('includes.static.modal')
    @include('includes.static.scripts')
</body>

</html>
