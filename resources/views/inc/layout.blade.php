<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Give Zakat</title>
    <link rel="stylesheet" href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    @yield('style')
</head>
<body>
@include('inc.nav')
@yield('container')
@yield('footer_script')
<script>
    @if (session()->has('success'))
        localStorage.removeItem('zakat')
        localStorage.removeItem('form_data')
        localStorage.removeItem('filter')
        localStorage.removeItem('kaffara')
        localStorage.removeItem('zakat_equity')
    @endif
</script>
</body>
</html>

