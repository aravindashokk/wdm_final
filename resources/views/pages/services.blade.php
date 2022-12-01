{{-- @extends('layouts.app')
@section('title', 'Student Application') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <title>Services</title>
    <link rel="stylesheet" href="main-css.css">
    <style>
        .flex-container {
            margin: auto;
            margin-top: 5%;
            width: 90%;
            display: flex;
            flex-flow: row wrap;
            justify-content: space-around;
            height: max-content;
        }

        .heading {
            font-size: 45px !important;
            margin-left: 100px;
            text-align: center;
        }

        .responsive {
            width: 80%;
            height: 200px;
            margin: 0px auto;
            overflow-y: hidden;
            display:flex;
            justify-content:center;
            margin-bottom: 1rem;
        }
        .responsive img{
            height:200px;
        }
        .services-heading{
            text-align: center;
            margin-bottom: 2rem;
        }
    </style>
</head>

<body>

</body>

</html>

@section('content')
    <div class="App">
        <header class="d-flex justify-between nav-header">
            <div class="header-title d-flex"><a class="logo font-oswald" href="/">Mercado Escolar</a></div>
            <nav class="navbar">
                <ul class="">
                    <li class="nav-item " id="homeTab"><a class="nav-Link" href="/">Home</a></li>
                    <li class="nav-item" id="aboutTab"><a class="nav-Link" href="/about">About</a></li>
                    <li class="nav-item active" id="servicesTab"><a class="nav-Link" href="/services">Services</a></li>
                    <li class="nav-item" id="contactTab"><a class="nav-Link" href="/contactUs">Contact</a></li>
                    <li class="nav-item"><a class="nav-Link" href="http://pxs7540.uta.cloud/wp/">Blog</a></li>
                    <li class="nav-item" id="authenticationTab"><a class="nav-Link" href="/login">Login/Register</a></li>

                </ul>
            </nav>
        </header>
        <header class="d-flex justify-between menu-header" style="display: none;">

            <div class="side-bar-navigation fade" id="side-bar-navigation">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/contactus">Contact Us</a></li>
                    <li><a href="http://pxs7540.uta.cloud/wp/"></a></li>
                    <li><a href="/login">Login / Register</a></li>
                </ul>
            </div>
        </header>
        <div>
            <div class="container">
                <div class="font-oswald heading"> Services </div>
            </div>
            <div class="flex-container ">
                <div class="inner-flex-container" style="background-color: rgb(62, 62, 62); max-width: 30%;">
                    <div class="responsive"><img src="pickup-delivery.png" class="img-fluid"
                            style=""></div>
                    <div class="services-heading">
                        <p class="font-oswald" style="font-size: 1.5rem;">Get Fresh foods delivered in no time.</p>
                    </div>
                    <div class="services-text">
                        <p>No more wait times. No more hassle. Do your necessary foods at ease with in campus.<br>Your
                            one-stop solution for getting your Fresh Food(Vegetable/Fruits).</p>
                    </div>
                </div>
                <div class="inner-flex-container" style="background-color: rgb(62, 62, 62); max-width: 30%;">
                    <div class="responsive"><img src="dairy.jpg" class="img-fluid">
                    </div>
                    <div class="services-heading">
                        <p class="font-oswald" style="font-size: 1.5rem;">Dairy Products</p>
                    </div>
                    <div class="services-text">
                        <p>Care and quality are the core values of Our Market.<br>Grocers now sell a wide variety of basic
                            foods, including perishables such dairy goods, meats, and fruit. As a result, such items are
                            referred to as groceries. Many rural communities still have basic shops that sell anything from
                            cigarettes to imported linens.</p>
                    </div>
                </div>
                <div class="inner-flex-container" style="background-color: rgb(62, 62, 62); max-width: 30%;">
                    <div class="responsive"><img src="73.jpg" class="img-fluid">
                    </div>
                    <div class="services-heading">
                        <p class="font-oswald" style="font-size: 1.5rem;">Post Wall, Clubs and Lot more...</p>
                    </div>
                    <div class="services-text">
                        <p>The diverse and vibrant community that exists at UTA is fundamentally based on the work of
                            student organizations. There are countless organizations that can support your academic work,
                            offer leadership training, and improve and enrich your college experience.</p>
                        <p>We can confidently assert that our campus offers almost everything. And a lot of that diversity
                            can be found in our department of cultural engagement and social change, which highlights
                            cultural events and encourages leadership training for a more welcoming environment.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @endsection --}}
