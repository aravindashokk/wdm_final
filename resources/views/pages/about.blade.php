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
    <title>About Us</title>

    <link rel="stylesheet" href="main-css.css">
    <style>
        .side-Heading {
            color: #2c2c2c;
            margin-left: 14%;
            font-weight: bold;
            font-weight: 20px;
        }
        .about-content {
    width: 70%;
    margin: auto;
    height: auto;
    border: 0.5px solid lightgrey;
    border-radius: 2px;
    margin-bottom: 10%;
    color: black;
    padding: 5%;
}
    </style>
</head>

<body style="overflow-y: hidden;">

</body>

</html>

@section('content')
    <div class="App">
        <header class="d-flex justify-between nav-header">
            <div class="header-title d-flex"><a class="logo font-oswald" href="/">Mercado Escolar</a></div>
            <nav class="navbar">
                <ul class="">
                    <li class="nav-item" id="homeTab"><a class="nav-Link" href="/">Home</a></li>
                    <li class="nav-item active" id="aboutTab"><a class="nav-Link" href="/about">About</a></li>
                    <li class="nav-item" id="servicesTab"><a class="nav-Link" href="/services">Services</a></li>
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
        <div style="min-height:100vh;background-color:white;">
            <h1 class="side-Heading">About Mercado Escolar</h1>
            <div class="about-content">
                <p>Mercado Escolar is an online marketplace available to college students. Students at their univeristy or
                    college can purchase and trade goods with other students in the marketplace.
                <p>Our primary goal is to encourage sustainability. We provide quick and easy way for students to buy and
                    sell products online. Quality and Customer Satisfaction are the core values of Mercado Escolar</p>
                <p>The Market in the University Center will open 7:30 a.m. to 10:30 p.m. Sundays through Thursdays, 7:30
                    a.m. to 5 p.m. Fridays, 9 a.m. to 3 p.m. Saturdays. The Market in the Fine Arts Building will open from
                    8 a.m. to 6 p.m. Mondays through Thursdays, and 8 a.m. to 3 p.m. Friday.</p><b>Our Motto at Mercado
                    Escolar : Making students more comfortable and providing for their needs during college working hours
                    would ensure that all students have the means to obtain their necessary products on time. We take on the
                    task every day and every year. </b></p>
            </div>
        </div>
    </div>
    {{-- @endsection --}}
