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
    <title>Contact Us</title>


    <link rel="stylesheet" href="main-css.css">
    <style>
        .formContainer {
            display: flex;
            flex-direction: column;
            padding-top: 3vh;
            color: var(--primary-label-2);
            align-items: center;
            height: 90vh;
            margin-top: 40px;
            background-color: white;
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
                    <li class="nav-item" id="servicesTab"><a class="nav-Link" href="/services">Services</a></li>
                    <li class="nav-item active" id="contactTab"><a class="nav-Link" href="/contactUs">Contact</a></li>
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
            <div class="container" style="text-align: center;font-weight:bold;font-size:30px;">
                <div class="font-oswald heading"> Contact Us </div>
            </div>
            <div class="formContainer contact-form">
                <div class="field-container">
                    <div class="innerHeading">
                        <p>Your opinions are valuable. If you have any questions, concerns, or ideas about any page or
                            material, please contact us. </p>
                    </div>
                    <div class="form">
                        <form name="contactForm" action="{{ url('upload-query') }}" method="POST" class="d-flex flex-direction-column w-100"
                           >
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" id="first_name" name="firstname" placeholder="First Name"
                                        required="" value="" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" id="last_name" name="lastname" class="form-control"
                                        placeholder="Last Name" required="" value="">
                                </div>
                                <br>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <input type="text" id="email" name="emailaddress" placeholder="E-mail"
                                      required="" class="form-control" value="{{ old('emailaddress') }}">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" id="phone" name="phone" placeholder="Phone Number"
                                        minlength="10" maxlength="12" required="" class="form-control" value="{{ old('phone') }}">
                                </div>

                            </div>

                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <textarea id="query" name="query" class="form-control" placeholder="Enter your feedback or Questions"
                                        required="" cols="3" rows="3">{{ old('query') }}</textarea>
                                </div>

                            </div>
                            <div style="display: flex;flex-direction:row;justify-content:flex-end;padding-top:1rem;">
                                <button class="btn clear" type="reset" style="margin-left: 10px;border-radius:20px;border-color:red;font-size:14px;padding:2px 20px;color:red;">Reset</button>
                                <button class="btn btn-primary" style="margin-left: 10px;border-radius:20px;border-color:blue;font-size:14px;padding:2px 20px;color:blue;" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div>
                <p></p>
            </div>
        </div>
    </div>
    {{-- @endsection --}}
