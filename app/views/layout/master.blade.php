<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <title>@yield('title')</title>
    </head>

    <body>
      <header>
        @section('header')
            <h1>@yield('header_title')</h1>
        @stop
      </header>

      <div class="main">
        @yield('content')
      </div>
    </body>
</html>