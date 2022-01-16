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
                background-image: url("/image/tdlgame.jpg");
                background-size: cover;
                color: #E50914;
                font-family: 'Nunito', sans-serif;
                font-weight: 800;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 60vh;
            }
            .flex-center {
                align-items: center;
                /* display: flex; */
                justify-content: center;
                padding-left: 70rem;
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
                font-size: 85px;
                text-shadow: 4px 4px #444444;
                
            }
            .links > a {
                color: #fff;
                /*padding: 25px;*/
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                margin: 0px 9px;
               
            }
            .m-b-md {
                /* margin-bottom: 30px; */
            }
           
            .buttonLog {
                display: inline-block;
                padding: 15px 35px;
                font-size: 24px;
                cursor: pointer;
                text-align: center;
                text-decoration: none;
                outline: none;
                color: #fff;
                background-color: #ed1b76;
                border: none;
                border-radius: 15px;
                box-shadow: 0 9px #999;
                }

                .buttonLog:hover {background-color: #f44786}

                .buttonLog:active {
                background-color: #f44786;
                box-shadow: 0 5px #666;
                transform: translateY(4px);
            }

            

            .buttonRe {
                display: inline-block;
                padding: 15px 25px;
                font-size: 24px;
                cursor: pointer;
                text-align: center;
                text-decoration: none;
                outline: none;
                color: #fff;
                background-color: #037a76;
                border: none;
                border-radius: 15px;
                box-shadow: 0 9px #999;
                
                }

                .buttonRe:hover {background-color: #249f9c}

                .buttonRe:active {
                background-color: #249f9c;
                box-shadow: 0 5px #666;
                transform: translateY(4px);
            }

            
        </style>
    </head>

    <body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Laravel
            </div>
            <div class="links">
            @if (Route::has('login'))    
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="buttonLog text-sm text-gray-700 dark:text-gray-500 underline">Login</a>
                        
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="buttonRe ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
            @endif
            </div>
        </div>
    </div>
    </body>
</html>
