<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Profile</title>
        <style>
            header {
                border-bottom: 1px solid black;
            }

            .content-wrapper {
                width: 700px;
            }

            .head-title {
                text-align: center;
            }

            .title {
                text-transform: capitalize;
                margin-bottom: 0;
                font-size: 22px;
            }

            .container {
                margin-left: 20px;
            }

            p,
            ul {
                margin: 0;
                font-size: 16px;
            }


            .wrapper {
                display: flex;
                justify-content: space-between;
            }

            .image-wrapper {
                position: absolute;
                right: 0;
                top: 230px;
            }

            .kolom {
                font-size: 16px;
                /* margin-top: 100px;
                margin-left: 450px; */
                position: absolute;
                right: 0;
                bottom: 0;
            }

        </style>
    </head>

    <body>
        <!-- header -->
        <header>
            <img src="{{ storage_path('app/public/img/unsyiah1.png') }}" alt="" srcset="" width="150">
            <!-- <img class="print-hide" src="{{ asset('img/unsyiah1.png') }}" alt="profile pic" width="150"> -->
        </header>
        <section>
            <h2 class="head-title">CURRICULUM VITAE</h2>
            <!-- profile info -->
            <div class="content-wrapper">

                <h2 class="title">
                    Personal Profile
                </h2>
                <div class="wrapper">
                    <!-- personal profile -->
                    <div class="container">
                        <p>nama</p>
                        <p>nomor</p>
                        <p>chemical process</p>
                        <p>jurusan</p>
                        <p>fakultas</p>
                        <p>email</p>
                        <p>Education :</p>
                        <ul>
                            <li>edu1</li>
                            <li>edu2</li>
                            <li>edu3</li>
                        </ul>
                    </div>
                    <div class="image-wrapper">
                        <img src="{{ public_path('img/pp.jpg') }}" alt="profile pic" width="150" height="150">
                        <!-- <img class="print-hide" src="{{ asset('img/pp.jpg') }}" alt="profile pic" width="150"
                            height="150"> -->
                    </div>
                </div>
                <!-- research -->
                <h2 class="title">
                    research
                </h2>
                <!-- list of research -->
                <div class="container">
                    <p>Speaking problem faced by the English department students of Syiah
                        Kuala
                        University</p>

                    <p>Speaking problem faced by the English department students of Syiah
                        Kuala
                        University</p>

                    <p>Speaking problem faced by the English department students of Syiah
                        Kuala
                        University</p>
                    <p>Speaking problem faced by the English department students of Syiah
                        Kuala
                        University</p>

                    <p>Speaking problem faced by the English department students of Syiah
                        Kuala
                        University</p>

                    <p>Speaking problem faced by the English department students of Syiah
                        Kuala
                        University</p>
                </div>
                <!-- projects -->
                <h2 class="title">
                    project
                </h2>
                <!-- list of projects -->
                <div class="container">
                    <p>Speaking problem faced by the English department students of Syiah Kuala
                        University</p>
                    <p>Speaking problem faced by the English department students of Syiah Kuala
                        University</p>
                    <p>Speaking problem faced by the English department students of Syiah Kuala
                        University</p>
                </div>
                <!-- activities -->
                <h2 class="title">
                    activities
                </h2>
                <!-- list of activities -->
                <div class="container">
                    <p>Speaking problem faced by the English department students of Syiah Kuala
                        University</p>
                    <p>Speaking problem faced by the English department students of Syiah Kuala
                        University</p>
                    <p>Speaking problem faced by the English department students of Syiah Kuala
                        University</p>
                    <p>Speaking problem faced by the English department students of Syiah Kuala
                        University</p>
                </div>
            </div>
        </section>
        <div class="kolom">
            <span>Banda Aceh, 09 Juni 2022</span>
            <br>
            <span>Penulis</span>
            <br>
            <br>
            <br>
            <br>
            <br>
            <span>Citra Kirana</span>
            <br>
            <span>NIP: 02299878969769649</span>
        </div>
    </body>

</html>
