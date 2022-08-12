<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   @include('include.style')

    <title>@yield('title')</title>
  </head>
  <body>
    @include('include.navbar')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            @if (session('status'))
                <div class="bg-success text-white p-1 mb-2">
                    {{session('status')}}
                </div>
            @endif
            </div>
            @yield('content')

        </div>
    </div>

    @include('include.script')
  </body>
</html>
