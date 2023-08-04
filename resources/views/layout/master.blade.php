<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        @if($context['page'] != 'Home')
        <!-- bs5 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
        @endif
        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- <style>
            /* Center the loader */
            #loader {
                position: absolute;
                left: 50%;
                top: 50%;
                z-index: 1;
                width: 120px;
                height: 120px;
                margin: -76px 0 0 -76px;
                border: 16px solid #f3f3f3;
                border-radius: 50%;
                border-top: 16px solid #3498db;
                -webkit-animation: spin 2s linear infinite;
                animation: spin 2s linear infinite;
            }

            @-webkit-keyframes spin {
                0% {
                    -webkit-transform: rotate(0deg);
                }

                100% {
                    -webkit-transform: rotate(360deg);
                }
            }

            @keyframes spin {
                0% {
                    transform: rotate(0deg);
                }

                100% {
                    transform: rotate(360deg);
                }
            }

        </style> -->

        <title>@yield("title")</title>

    </head>

    <body>
        <!-- <body onload="myFunction()"> -->
        <!-- <div id="loader"></div> -->
        <!-- header -->
        @include('snippet.header')
        <!-- nav -->
        @include('snippet.navbar')
        <!-- content section -->
        @yield('content')
        <!-- footer -->
        @include('snippet.footer')

        <!-- jQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- bs5 js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- script -->
        <script src="{{ asset('js/script.js') }}"></script>
        <script>
            function myFunction() {
                myVar = setTimeout(showPage, 3000);
            }

            function showPage() {
                document.getElementById("loader").style.display = "none";
                document.getElementById("myDiv").style.display = "block";
            }

        </script>
    </body>

</html>
