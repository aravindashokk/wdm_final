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
    <title>Business Register</title>


    <link rel="stylesheet" href="main-css.css">
    <link rel="stylesheet" href="auth.css">

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
                    <li class="nav-item " id="contactTab"><a class="nav-Link" href="/contactUs">Contact</a></li>
                    <li class="nav-item"><a class="nav-Link" href="http://pxs7540.uta.cloud/wp/">Blog</a></li>
                    <li class="nav-item active" id="authenticationTab"><a class="nav-Link" href="/login">Login/Register</a>
                    </li>
                    <li class="nav-item d-none" id="logout-tab">
                        <p>Logout</p><img
                            src="data:image/png;base64,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"
                            height="20px" width="20px">
                    </li>
                </ul>
            </nav>
        </header>
        <header class="d-flex justify-between menu-header" style="display: none;">

            <div class="side-bar-navigation fade" id="side-bar-navigation">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/contactUs">Contact Us</a></li>
                    <li><a href="http://pxs7540.uta.cloud/wp/"></a></li>
                    <li><a href="/login">Create Account</a></li>
                </ul>
            </div>
        </header>
        <section class="authentication-section">
            <section class="authentication-section">
                <div class="d-flex flex-direction-row justify-around registration-section">
                    <div class="registration-container">

                        <div class="d-flex justify-center registration-header font-oswald"><small>Business
                                Account</small></div>
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <center><small class="text-danger">{{ $error }}</small></center>
                            @endforeach
                        @endif
                        <form class="d-flex flex-direction-column w-100" id="registration-form" method="POST"
                            action="{{ route('storebusinessaccount') }}">
                            @csrf
                            <div class="d-flex flex-direction-column">
                                <input type="text" id="email" name="full_name" placeholder="Your full name"
                                    required="" value="{{ old('full_name') }}">
                                <input type="email" id="email" name="email" placeholder="Email" required=""
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="{{ old('email') }}">
                                <input type="number" id="email" name="phone_number" placeholder="Your Phone Number"
                                    required="" value="{{ old('phone_number') }}">
                                <input type="text" id="email" name="shop_name" placeholder="Shop Name" required=""
                                    value="{{ old('shop_name') }}">

                                <div class="px-5">
                                    <textarea name="address_address" id="" cols="30" rows="5" class="form-control my-3"
                                        placeholder="Business location address"></textarea>
                                </div>
                                <input type="password" id="password" name="password" placeholder="Password"
                                    required="" minlength="8" value="">
                                <input type="password" id="confirm_password" name="password_confirmation"
                                    placeholder="Confirm Password" required="" minlength="8" value="">

                            </div>
                            <div class="d-flex flex-direction-column align-items-center"><button class="btn register-btn"
                                    type="submit">Create Account</button><br>
                                <p>Already have an account?<a class="link-style" href="/login">Login</a>here</p>
                                <div class="col-12">
                                    <a href="{{ route('register') }}" class="link-style"> Student Account</a>
                                    <a href="{{ route('schoolaccount') }}" class="link-style"> School
                                        Account</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="image-container"><img src="signup.png" width="550px" height="500px"
                            alt="registrationimage"></div>
                </div>
            </section>
        </section>
    </div>
