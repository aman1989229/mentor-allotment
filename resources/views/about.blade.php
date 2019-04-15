<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mentorat</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles -->
        <style>
            html, body {
                background-image: url("img/abc.jpeg");
                background-size: 100% 100%;
                background-repeat: no-repeat;
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
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 54px;
            }

            .links > a {
                color: yellow;
                padding: 0 25px;
                font-size: 23px;
                font-weight: 1000;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, 1px 1px 0 #000;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            img{
                margin-top: 30px;
                margin-left: 29px;
                padding: 1%;
                height: 40px;
                width:40px;
            }
            i{
                margin-left: 18px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           <!--  do not touc this stuff -->
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}"style="border-bottom:2px solid black;border-right:2px solid black;border-radius: 50px;">Home</a>
                    @else
                        <a href="{{ route('login') }}" style="border-bottom: 2px solid black;opacity: 0.8;border-radius: 50px;">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" style="border-bottom:2px solid black;opacity: 0.8;border-radius: 50px;">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
             

             <!-- yhaa tak touch mt krna -->

            <div class="row">
                <div class="col-sm-4" style="margin-left: 50%;">
                <div class="title" style="color:#1C2833; font-weight:bolder;text-align: center; padding-bottom: 20px;text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, 1px 1px 0 #000;font-family: arial;">
                    About Us
                </div>
                <div style="font-size: 24px; color: white;text-align: justify;font-family:Times New Roman;padding-right: 5%; padding-left: 5%;">
                	Mentorat is a project that aims to establish a bond between seniors and juniors in order to provide them with the studies related, placement related and career guidance from a perspective of development.
                </div>
                <div style="color:#C22B10; margin-top: 20px; font-weight:bolder;font-family: arial; font-size: 30px; padding: 30px; text-align: justify;text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, 1px 1px 0 #000;">
                    "Every great achiever is inspired by a great mentor."
                </div>
                <div style="font-size: 18px;color:white;text-align: justify;font-family:Times New Roman;padding-right:5%;padding-left:5%;">
                	<span><img src="img/1.png"/ style="margin-left: 50px;"></span>
                    <i class="fa fa-arrow-circle-right" style="font-size:40px;display: inline-flex;vertical-align:10px;"></i>
                    <span><img src="img/2.png"/><i class="fa fa-arrow-circle-right" style="font-size:40px;display: inline-flex;vertical-align:10px;"></i></span><span><img src="img/3.png"/><i class="fa fa-arrow-circle-right" style="font-size:40px;display: inline-flex;vertical-align:10px;"></i></span><span><img src="img/4.png"/></span>
                </div>
            </div>
        </div>

    </body>
</html>
