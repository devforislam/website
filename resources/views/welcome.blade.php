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
            html, body {
                background-color: #fff;
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

            .content {
                text-align: center;
            }

            .title {
                font-size: 48px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-y-md {
                margin-top: 30px;
                margin-bottom: 30px;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
                <div class="top-right links">
                    <a href="http://github.com/devforislam">Github</a>
                </div>

            <div class="content">
                <img src="{{ asset('logo.png') }}" alt="Logo of Develop for Islam" height="300">
                <div class="title m-y-md">
                    Let's develop islamic Apps
                </div>

                <div class="links">
                    <a href="http://quran.devforislam.xyz">Quran Website</a>
                    <a href="https://github.com/devforislam/quran-api-web">Quran Api</a>
                    <a href="https://github.com/devforislam/quran-api">Quran Api Package</a>
                    <a href="https://github.com/devforislam/quran-frontend">Quran Frontend</a>
                </div>
            </div>
        </div>
    </body>
</html>
