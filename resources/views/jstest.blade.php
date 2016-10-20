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
            <h3 class="flex-center">Body Snatchers / Codeception Test - Storing Data {{$dates[0]->created_at}}</h3>
            <div class="flex-center">
                <input class="eventDateHelper" name="test_date" value="{{$dates[0]->created_at}}" data-endpoint='/jstest/{{$dates[0]->id}}' data-dateformat="YYYY-MM-DD" data-timeformat="h:mm:s"/>
            </div>
        </div>

        <div id="dates" class="bordered">

            @if($dates)
                <ul>
                    @foreach($dates as $date)
                        <li>{{$date}}</li>
                    @endforeach
                </ul>
            @else
                <p>No dates yet, add dates now.</p>
            @endif

        </div>

        <div class="bordered">
            <p>Vanilla PHP Test</p>
            <?php
                $testDate = 'yup I am a test';
            ?>
            <p>This is a test -> {{$testDate}}</p>
            <br>
        </div>

    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
    </body>
</html>
