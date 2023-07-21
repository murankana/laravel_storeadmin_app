<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Custom Auth Login')</title>
    <link href="/bootstrap-5.3.0-dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    @include('include.header')
    @yield('content')
    <script src="bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>