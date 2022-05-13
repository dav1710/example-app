<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AI</title>
        <link type="text/css" rel="stylesheet" href="{{asset('fonts/font-awesome.min.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('fonts/roboto/roboto.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/leaflet.css')}}">

    </head>
    <body>
    <div class="wrapper">
    <header id="header" class="header">
        <nav class="navbar navbar-expand-lg bg-transparent">
            <div class="container mt-3">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('img/Logo.png')}}" class="logo" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-around uav_navbar" id="navbarsExample01">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link js-scroll active" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll" href="#we_can">We Can</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll" href="#our_projects">Our Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll" href="#our_further_projects">Our Further Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll" href="#our_team">Our Team</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    {{-- About Us --}}
    <section id="home"  class="container d-flex col-xl-12 col-lg-12 col-md-12 container_about mb-5">
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
    <section id="we_can" class="container d-flex col-md-12 container_we_can">
        <div class="container container_us m-4 col-md-6">
            <div class="title">
                <h3>We Can</h3>
            </div>
            <div class="content ">
               <ul>
                   <li class="we_can_li">Count the flow of vehicles and people for statistics,</li>
                   <li class="we_can_li">Find out various breaks including</li>
                   <li class="we_can_li2">A vehicle going in the wrong line</li>
                   <li class="we_can_li2">Wrongly parked vehicle</li>
                   <li class="we_can_li2">Move around from the wrong side</li>
                   <li class="we_can_li">Provide the following information on the vehicle</li>
                   <li class="we_can_li2">License plate</li>
                   <li class="we_can_li2">Country of license plate</li>
                   <li class="we_can_li2">Recognition accuracy of license plate</li>
                   <li class="we_can_li2">Type of vehicle</li>
                   <li class="we_can_li2">Brand of vehicle</li>
                   <li class="we_can_li2">Colour</li>
                   <li class="we_can_li">Recognize Special Purpose Vehicles (ambulance, police, etc.)</li>
                   <li class="we_can_li">Monitoring of free parking places</li>
                   <li class="we_can_li">Face detection</li>
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
    <section id="our_projects" class="container col-md-12 container_we_can">
        <div class="container container_project m-4">
            <div class="title">
                <h3>Our Projects </h3>
            </div>
            <div class="content">
               <ul>
                   <li class="project_li"> "Smart Parking" </li>
               </ul>
               <p>
                   "Smart Parking" system is envisaged for paid and free “Parking” and provides the following solution features.
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
                    <li class="we_can_li">ALPR (Automated License Plate Recognition) camera </li>
                    <li class="we_can_li">Entrance terminal</li>
                    <li class="we_can_li">Exit payment terminal</li>
                    <li class="we_can_li">Smart barrier control box</li>
                    <li class="we_can_li">Barrier</li>
                    <li class="we_can_li">Free parking place sensor with indoor and outdoor options</li>
                    <li class="we_can_li">Led screen aimed at reflecting the number and the quantity of free parking places.</li>
                </ul>
            </div>
        </div>
        <div class="container our_project_detection mt-5" align="center">
            <div class="content" align="left">
                <ul>
                    <li class="project_li"> "Face Detection System" </li>
                </ul>
                <p>
                    “Face detection system” in the restricted area provides entry/exit opportunity to the people through the face detection. In addition, the system has an opportunity to check the existence of helmets and mask and provide statistics on the flow of people.
                </p>
            </div>
        </div>
    </section>


    {{-- Our Future Project --}}
    <section id="our_further_projects" class="container col-md-12 container_we_can">
        <div class="container">
            <div class="title">
                <h3>Our Future Project</h3>
            </div>
            <div class="content mb-4">
            <ul>
                <li class="project_li"> Space Orientation </li>
            </ul>
            <p>
                The software solution which will automatically be oriented in the space, recognize the objects through the cameras, obstacles of movement and will choose the optimal path.
            </p>
            </div>
            <div class="content mb-4">
            <ul>
                <li class="project_li"> UAV Car </li>
            </ul>
            <p>
                Fully automized car, which will be oriented through sensors and cameras. The software will include the “Space Orientation” project.
            </p>
            </div>
            <div class="content mb-4">
            <ul>
                <li class="project_li"> UAV Cart </li>
            </ul>
            <p>
                The UAV Cart which will sort the parcels in the storage memorizing their spots to find it easily in the future and making sure one more time that the cart has found the parcel, the cart will scan the parcel’s unique identification code. The software will include the “Space Orientation” project.
            </p>
            </div>
            <div class="content">
            <ul>
                <li class="project_li"> UAV Food Cart </li>
            </ul>
            <p>
                The UAV Food Cart is designed to deliver food to customers in the street and in the building. As soon as the cart approaches, the Customer must scan the QR code provided by the system with the scanner on the cart, after which the cart will automatically open the food box ordered by the customer.
            </p>
            </div>
        </div>
    </section>

    {{-- Our Team --}}
    <section id="our_team" class="container d-flex col-md-12 container_team mb-5">
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
        <div class="d-flex">
            <div class="container container_footer_left m-0">
                <div id="map">
                </div>
            </div>
            <div class="container container_footer_right d-block m-0">
                <div>
                    <ul class="footer_color">
                        <li>
                            <img src="{{asset('img/Phone.png')}}" alt="phone" class="m-3"><span>+37444260058 </span>
                        </li>
                        <li>
                            <img src="{{asset('img/Mail.png')}}" alt="mail" class="m-3"><span>david.nikoghosyan98@gmail.com </span>
                        </li>
                        <li>
                            <img src="{{asset('img/Location.png')}}" alt="location" class="m-3"><span>Սայաթ–Նովա 23, Երևան </span>
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
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/leaflet-src.js')}}"></script>
    <script src="{{asset('js/leaflet.js')}}"></script>
     <script src="{{asset('js/main.js')}}"></script>
     <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    </body>
</html>
