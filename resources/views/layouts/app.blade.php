<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Family Planner - @yield( 'title' )</title>
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>

    </head>
    <body>
        <header>
            me header
        </header>
        <main>
            <div class="container-fluid">
                @yield( 'content' )
            </div> 
        </main>
        <footer>
            me footer
        </footer>
        <script src="{{ asset('js/app.js') }}" async></script>
    </body>
</html>
