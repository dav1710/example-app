<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UAV</title>
        <link type="text/css" rel="stylesheet" href="{{asset('fonts/font-awesome.min.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('fonts/roboto/roboto.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
              integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
              crossorigin=""/>
{{--        <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"--}}
{{--                integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="--}}
{{--                crossorigin=""></script>--}}
        <script src="{{asset('js/leaflet-src.js')}}"></script>
        <script src="{{asset('js/leaflet.js')}}"></script>
        <script src="{{asset('js/leaflet-src.esm.js')}}"></script>
        <script src="{{asset('js/jquery.js')}}"></script>
    </head>
    <body>
    <div class="wrapper">
    <nav class="navbar navbar-expand-lg bg-transparent">
        <div class="container mt-3">
            <a class="navbar-brand" href="#">
                <img src="{{asset('img/Logo.png')}}" class="logo" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-around uav_navbar" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">We Can</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Our Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Our Further Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Our Team</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- About Us --}}
    <section class="container d-flex col-xl-12 col-lg-12 col-md-12 container_about mb-5">
        <div class="container container_us m-4 col-md-6">
            <div class="title">
                <h3>About Us</h3>
            </div>
            <div class="content ">
               <p> A young team, who deals with "Computer Vision" and "Artificial Intelligence" related solutions in the Republic of Armenia for automation of verious systems.</p>
            </div>
        </div>
        <div class="container col-md-6">
            <img class="illustration" src="{{asset('img/Illustration.png')}}" alt="">
        </div>
    </section>

    {{-- We Can --}}
    <section class="container d-flex col-md-12 container_we_can">
        <div class="container container_us m-4 col-md-6">
            <div class="title">
                <h3>We Can</h3>
            </div>
            <div class="content ">
               <ul>
                   <li class="we_can_li">Count the flow of vehicles and people for statistics,</li>
                   <li class="we_can_li">
                       Find out various breaks including
                   </li>
                   <li class="we_can_li2">A vehicle going in the wrong line</li>
                   <li class="we_can_li2">Wrongly parked vehicle</li>
                   <li class="we_can_li2">Move around from the wrong side</li>
                   <li class="we_can_li">Provide the following information on the vehicle</li>
                   <li class="we_can_li2">A vehicle going in the wrong line</li>
                   <li class="we_can_li2">Wrongly parked vehicle</li>
                   <li class="we_can_li2">Move around from the wrong side</li>
                   <li class="we_can_li2">A vehicle going in the wrong line</li>
                   <li class="we_can_li2">Wrongly parked vehicle</li>
                   <li class="we_can_li2">Move around from the wrong side</li>
                   <li class="we_can_li">Recognize Special Purpose Vehicles</li>
                   <li class="we_can_li">Impliment Monitoring of free parking places</li>
                   <li class="we_can_li">Impliment Face detection</li>
                   <li class="we_can_li">Fix people without helmets in the construction area</li>
                   <li class="we_can_li">Check the existence of mask</li>
               </ul>
            </div>
        </div>
        <div class="container col-md-6 mt-4 gif_container">
            <img class="we_can_gif" src="{{asset('img/Gif_1.gif')}}" alt="gif">
        </div>
    </section>

    {{--  Our Projects  --}}
    <section class="container col-md-12 container_we_can">
        <div class="container container_project m-4">
            <div class="title">
                <h3>Our Projects </h3>
            </div>
            <div class="content">
               <ul>
                   <li class="project_li"> "Smart Parking" </li>
               </ul>
               <p>
                   "Smart Parking" system is envisaged for paid and free "Parking" and provides the following solution features.
               </p>
            </div>
        </div>
        <div class="container container_our_project d-flex mt-4 mb-5">
            <div class="our_project_gif">
                <img class="project_gif" src="{{asset('img/Gif_2.gif')}}" alt="gif_2">
            </div>
            <div class="our_project_list col-md-5">
                <ul>
                    <li class="we_can_li">Auto monitoring vehicles in the entry and exit.</li>
                    <li class="we_can_li">Auto identfication of people having parking place and provision of free exit</li>
                    <li class="we_can_li">Calculation of payment for parking</li>
                    <li class="we_can_li">Monitoring of free parking places</li>
                    <li class="we_can_li">Calculation of statistics regarding the entry and exit of vehicles in the "Parking" system.</li>
                </ul>
            </div>
        </div>
        <div class="container our_project_parking" align="center">
            <div class="title" align="left">
                <h3>"Smart Parking" system includes the following devices;</h3>
            </div>
            <div class="content" align="left">
                <ul>
                    <li class="we_can_li">Auto monitoring vehicles in the entry and exit.</li>
                    <li class="we_can_li">Auto identfication of people having parking place and provision of free exit</li>
                    <li class="we_can_li">Calculation of payment for parking</li>
                    <li class="we_can_li">Monitoring of free parking places</li>
                    <li class="we_can_li">Calculation of statistics regarding the entry and exit of vehicles in the "Parking" system.</li>
                    <li class="we_can_li">Calculation of statistics regarding the entry and exit of vehicles in the "Parking" system.</li>
                    <li class="we_can_li">Calculation of statistics regarding the entry and exit of vehicles in the "Parking" system.</li>
                </ul>
            </div>
        </div>
        <div class="container our_project_detection mt-5" align="center">
            <div class="content" align="left">
                <ul>
                    <li class="project_li"> "Face Detection System" </li>
                </ul>
                <p>
                    "Smart Parking" system is envisaged for paid and free "Parking" and provides the following solution features.
                    "Smart Parking" system is envisaged for paid and free "Parking" and provides the following solution features.
                    "Smart Parking" system is envisaged for paid and free "Parking" and provides the following solution features.
                </p>
            </div>
        </div>
    </section>


    {{-- Our Future Project --}}
    <section class="container col-md-12 container_we_can">
        <div class="container">
            <div class="title">
                <h3>Our Future Project</h3>
            </div>
            <div class="content mb-4">
            <ul>
                <li class="project_li"> Space Orientation </li>
            </ul>
            <p>
                "Smart Parking" system is envisaged for paid and free "Parking" and provides the following solution features.
                "Smart Parking" system is envisaged for paid and free "Parking" and provides the following solution features.
                "Smart Parking" system is envisaged for paid and free "Parking" and provides the following solution features.
            </p>
            </div>
            <div class="content mb-4">
            <ul>
                <li class="project_li"> UAV Car </li>
            </ul>
            <p>
                "Smart Parking" system is envisaged for paid and free "Parking" and provides the following solution features.
                "Smart Parking" system is envisaged for paid and free "Parking" and provides the following solution features.
                "Smart Parking" system is envisaged for paid and free "Parking" and provides the following solution features.
            </p>
            </div>
            <div class="content mb-4">
            <ul>
                <li class="project_li"> UAV Cart </li>
            </ul>
            <p>
                "Smart Parking" system is envisaged for paid and free "Parking" and provides the following solution features.
                "Smart Parking" system is envisaged for paid and free "Parking" and provides the following solution features.
                "Smart Parking" system is envisaged for paid and free "Parking" and provides the following solution features.
            </p>
            </div>
            <div class="content">
            <ul>
                <li class="project_li"> UAV Food Cart </li>
            </ul>
            <p>
                "Smart Parking" system is envisaged for paid and free "Parking" and provides the following solution features.
                "Smart Parking" system is envisaged for paid and free "Parking" and provides the following solution features.
                "Smart Parking" system is envisaged for paid and free "Parking" and provides the following solution features.
            </p>
            </div>
        </div>
    </section>

    {{-- Our Team --}}
    <section class="container d-flex col-md-12 container_team mb-5">
        <div class="container">
            <div class="title">
                <h3>Our Team</h3>
            </div>
            <div class="content">
            <img src="{{asset('img/Team.png')}}" alt="team">
            </div>
        </div>
    </section>

    {{--  Contact  --}}
    <section class="m-3 container_contact">
        <div class="d-flex col-md-12">
            <div class="container container_footer_left m-0 col-md-2">
                <div id="map">
                </div>
            </div>
            <div class="container container_footer_right d-block m-0 col-md-10">
                <div>
                    <ul class="footer_color">
                        <li>
                            <img src="{{asset('img/Phone.png')}}" alt="phone" class="m-3"><span>+374 00 000 000</span>
                        </li>
                        <li>
                            <img src="{{asset('img/Mail.png')}}" alt="mail" class="m-3"><span>Smith@gmail.com</span>
                        </li>
                        <li>
                            <img src="{{asset('img/Location.png')}}" alt="location" class="m-3"><span>SomeWhere</span>
                        </li>
                    </ul>
                </div>
                <hr>
                <div class="text-center text-light">
                    <h5>All copyrights reserved</h5>
                </div>
            </div>
        </div>
    </section>
    </div>
    <script>
        var map = L.map('map').setView([40.2140539, 44.5214425], 13);

        L.tileLayer(
            "//{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                attribution: '&copy; ' + "<a href='http://locator.am'>Locator Maps</a>",
                maxZoom: 18
            }).addTo(map);
        var marker = L.marker([40.2140539, 44.5214425]).addTo(map);
    </script>

     <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
     <script src="{{asset('js/bootstrap.min.js')}}"></script>
    </body>
</html>
