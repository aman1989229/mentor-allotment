<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mentorat</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url('img/Mentorat.jpg');
                background-repeat: no-repeat;
                background-size: 99.9%;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                top: 20px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 90px;
                color: black;
                font-weight: 200;
            }

            .links > a {
                color: black;
                padding: 0 30px;
                font-size: 20px;
                font-weight: 900;
                letter-spacing: .1rem;
                text-decoration: none;
            }
            .links > a :hover{
                color: white;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}" style="border: 1px solid white;outline-style: solid;outline-color: black;background-color: gray;">Home</a>
                    @else
                        <a href="{{ route('login') }}"style="border: 1px solid black;background-image:linear-gradient(to left, lightgray,gray);opacity: 0.8;">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"style="border: 1px solid black;background-image:linear-gradient(to left, lightgray , gray);opacity: 0.8;">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Mentorat
                </div>

                <div class="links">
                    <a href="about">About Us</a>
                    <a href="contact">Contact Us</a>
                </div>
            </div>
        </div>
    </body>
</html>
