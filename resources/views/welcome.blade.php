<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html,body {
                background-color: #FFEBCD;
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
                top: 18px;
            }
            .bottom-right {
                position: absolute;
                right: 10px;
                bottom: 10px;
            }

            .content {
                text-align: center;
                font-family: ink free;
                color: black;
            }

            .title {
                font-size: 50px;
            }

            .links > a {
                color: black;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .p {
                font-size: 25px;
                font-family: impact;
                color: black;
            }
        </style>
    </head>
    <body >
        <div class="flex-center position-ref full-height">
            <!-- @if (Route::has('login')) -->
                <div class="top-right links">
                    <!-- @auth -->
                        <!-- <a href="{{ url('/home') }}">Home</a> -->
                    <!-- @else -->
                        <!-- <a href="{{ route('login') }}">Login</a> -->

                        <!-- @if (Route::has('register')) -->
                            <!-- <a href="{{ route('register') }}">Register</a> -->
                        <!-- @endif -->
                    <!-- @endauth -->
                </div>
            <!-- @endif -->

            <div class="content">
                <div class="title m-b-md">
                    WIDIA BARU BELAJAR :-)<BR>
                    -------------------------------------------------
                </div>
<div class="p">
    <img src="P2.jpg" width="70" height="100"><br>
    Nama : Widia<br>
    Alamat : Bancak 2, Gebyok, Mojogedang,Karanganyar<BR>
    Umur : 19 Th<BR>
    Hobi : Menggambar & Menulis

</div>
                <div class="bottom-right links">
                    <!-- <a href="https://laravel.com/docs">Docs</a> -->
                    <!-- <a href="https://laracasts.com">Laracasts</a> -->
                    <!-- <a href="https://laravel-news.com">News</a> -->
                    <a href="https://widyaerstory.blogspot.com">Blog : https://widyaerstory.blogspot.com</a>
                    <!-- <a href="https://nova.laravel.com">Nova</a> -->
                    <!-- <a href="https://forge.laravel.com">Forge</a> -->
                    <!-- <a href="https://vapor.laravel.com">Vapor</a> -->
                    <!-- <a href="https://github.com/laravel/laravel">GitHub</a> -->
                </div>
            </div>
        </div>
    </body>
</html>
