<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .bordered {
                margin: 1em;
                padding: 0.25em;
                border: 1px solid black;
            }
        </style>
    </head>
    <body>

        <div class="bordered">
            <h3 class="flex-center">Body Snatchers / Codeception Test</h3>
            <div class="flex-center">
                <input class="eventDateHelper" name="test_date" value="01/01/2018 2:46 PM" data-endpoint='/saveThings/index.json' data-dateformat="MM/DD/YYYY" data-timeformat="h:mm a"/>
            </div>
        </div>

        <div class="bordered">
            <h3 class="flex-center">Vue.js Component</h3>
            <h4 class="flex-center">Write Something Below This Headline</h4>
            <div id="writeToDiv" class="flex-center bordered">
                <h1>@{{ msg }}</h1>
            </div>
        </div>

        <div id="app"></div>

        <div id="dates">
            @if($date)
                <ul>
                    @foreach($date as $date)
                        <li>{{$date->date}}</li>
                    @endforeach
                </ul>
            @else
                <p>No dates stored yet. Store some dates now.</p>
            @endif
        </div>

        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
    </body>
</html>
