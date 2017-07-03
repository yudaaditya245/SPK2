<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-theme.css') }}">

    <style media="screen">
      /*body {
        background-color: #f2f2f2;
      }*/
    </style>

    @yield('style')

  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="{{ url('/') }}">Home</a>
        </div>
      </div>
    </nav>
      @yield('body')

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>
