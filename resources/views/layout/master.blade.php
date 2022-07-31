<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>User Card @yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    @stack('custom-css')
    @vite('resources/js/app.js')
</head>
<body class="is-preload">
<div id="wrapper">
    <section id="main">
        @if (isset($user))
            @yield('content')
        @endif
    </section>
    @include('layout.partials.footer')
</div>
<script>
    if ('addEventListener' in window) {
        window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-preload\b/, ''); });
        document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
    }
</script>
@stack('custom-js')
</body>
</html>
