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
            <nav class="navbar navbar-default container-fluid">
                <h1 class="row w-100 justify-content-center nav-title mb-4">
                    <div class="col-auto">
                        Family Planner
                    </div>
                </h1>
                <div class="row w-100 justify-content-center links ">
                    <a href="/shopping-list">Shopping List</a>
                    <a href="#">Calendar</a>
                    <a href="#">Todos</a>
                    <a href="#">Contacts</a>
                </div>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                @yield( 'content' )
            </div> 
        </main>
        <footer>
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-12 text-center">
                        &copy; Papl - Benjamin Kowatsch
                    </div>
                </div>
            </div>
        </footer>
        <script src="{{ asset('js/app.js') }}" async></script>
    </body>
</html>
