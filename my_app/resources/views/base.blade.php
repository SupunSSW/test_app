<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>{{config('app.name')}}</title>

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">       
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item border-bottom">
                  <a class="nav-link" href="/">Users</a>
                </li>
                <li class="nav-item border-bottom">
                  <a class="nav-link" href="/add">Add Users</a>
                </li>
              </ul>
            </div>
        </nav>

        <div class="container">
            @yield('content')

        </div>

    </body>
</html>