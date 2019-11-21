<!DOCTYPE html>
<html>

    <head lang="en">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title>Cute file browser</title>


        <!-- Include our stylesheet -->
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />

    </head>

    <body>

        <div class="filemanager">
            @yield('content')
        </div>

        <footer>
            <a class="tz" href="http://tutorialzine.com/2014/09/cute-file-browser-jquery-ajax-php/">Cute File Browser
                with jQuery, AJAX and PHP</a>
            <div id="tzine-actions"></div>
            <span class="close"></span>
        </footer>

        <!-- Include our script files -->
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="{{ asset('assets/js/script.js') }}"></script>

    </body>

</html>
