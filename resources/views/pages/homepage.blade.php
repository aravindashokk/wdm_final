@extends('layouts.app')
@section('title', 'Student Application')
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Nunito Sans', sans-serif;
    }

    .nav-list {
        display: flex;
        flex-wrap: wrap;
        list-style: none;
        width: max-content;
        margin-left: auto;
        margin-right: 2rem;
        font-weight: bold;
    }

    .nav-list a {
        text-decoration: none;
    }

    .nav-div {
        display: flex;
        flex-wrap: wrap;
        background: #ffffff;
        color: #c7c7c7ed;
        margin: 0;
        padding: 0;
        position: sticky;
        top: 15;
        font-size: 18px;
        font-weight: bold;
        height: 35px;
    }

    .logo {
        width: max-content;
        margin: auto 2rem;

    }

    .nav-item {
        padding: 0px 1.5rem;

    }

    .heading {
        text-align: center;
        font-size: 35px;
        font-weight: 600;
        padding-top: 60px;
        font-family: 'Satisfy', cursive;

    }

    .dummy-text {
        padding: 0.5rem 1.5rem;
        line-height: 150%;
        font-size: 18px;
        font-weight: 500;
    }

    .nav-list li:hover {
        transform: scale(1.06);
        color: rgb(59, 121, 163);
    }

    .hero {
        height: 550px;
        background-image: url("https://clustercomp.org/2021/images/unsplash_brooklyn-bridge_header.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        position: relative;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hero .overlay {
        background-color: rgb(60, 95, 177);
        position: absolute;
        height: 100%;
        with: 100%;
        z-index: 1;
        left: 0;
        right: 0;
        top: 0;
        opacity: 0.5;
    }

    .hero .content {
        color: #fff;
        z-index: 2;
        text-align: center;
    }

    .hero .content h1 {
        font-size: 45px;
        font-weight: 700;
        font-family: "Montserrat", sans-serif;
    }

    .hero .content p {
        font-family: "Montserrat", sans-serif;
    }

    .dummy-text p {
        font-size: 20px;
    }

    .fb {
        font-weight: bold;
    }

    .pt-8 {
        padding-top: 5rem !important;
    }

    .flex {
        display: flex !important;
    }

    .align-items-center {
        align-items: center !important;
    }

    .shadow-2 {
        box-shadow: 0 4px 10px rgba(0, 0, 0, .03), 0 0 2px rgba(0, 0, 0, .06), 0 2px 6px rgba(0, 0, 0, .12) !important;
    }

    .p-4 {
        padding: 1.5rem !important;
    }

    .mb-3 {
        margin-bottom: 1rem !important;
    }

    .text-3xl {
        font-size: 1.75rem !important;
    }

    .mb-2 {
        margin-bottom: 0.5rem !important;
    }

    .font-medium {
        font-weight: 500 !important;
    }

    .p-inputtext {
        -webkit-appearance: none;
        appearance: none;
        background: #fff;
        border: 1px solid #ced4da;
        border-radius: 6px;
        color: #495057;
        font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;
        font-size: 1rem;
        padding: 0.75rem;
        transition: background-color .2s, color .2s, border-color .2s, box-shadow .2s;
    }

    .p-component,
    .p-component * {
        box-sizing: border-box;
    }

    .p-button {
        background: #6366f1;
        border: 1px solid #6366f1;
        border-radius: 6px;
        color: #fff;
        font-size: 1rem;
        padding: 0.75rem 1.25rem;
        transition: background-color .2s, color .2s, border-color .2s, box-shadow .2s;
    }

    .w-full {
        width: 100% !important;
    }
</style>
@section('content')
    <div>
        <div id="home">
            <div>
                <div class="hero">
                    <div class="overlay"></div>
                    <div class="content">
                        <h1>Mercado.</h1>
                        <p>Welcome</p>
                    </div>
                </div>
            </div>
            @if (session('mesagesent'))
            <div class="alert alert-success" role="alert">
                {{ session('mesagesent') }}
            </div>
        @endif
            <div class="text-center heading">Home</div>
            <div class="dummy-text">
                <p>Your real shopping partner is StudentSocials. Get your shopping list and take advantage of the services
                    and experience offered here.</p>
            </div>
        </div>
        <div id="about">
            <div class="text-center heading">About</div>
            <div class="dummy-text">
                <p>You can find products and accessories on our website that are primarily needed for your study. Product
                    availability is updated by business owners for students to purchase.Business owners that join receive a
                    platform where they can add their own products for sale after doing so. Businesses will also advertise
                    here in the center, and promotions will be broadcast here.</p>
            </div>
        </div>
        <div id="services">
            <div class="text-center heading">Services</div>
            <div class="dummy-text">
                <center>
                    <p class="fb"><b>Shopping Complex</b></p>
                </center>
                <p>This website offers you the goods and materials that are most frequently needed for your studies.
                    Businesses update their inventory so that students can purchase it.</p>
                <p><strong>A marketplace for students</strong></p>
                <p>Students can sell their own stuff that are no longer in use to other students in addition to purchasing
                    goods and necessities from company owners.</p>
                <p><strong>Clubs</strong></p>
                <p>Students who are interested in cooperating or exchanging ideas form clubs and invite one another to join
                    them, or they simply join clubs that already exist.</p>
                <p><strong>Posts</strong></p>
                <p>The substance of student posts is highly critical and instructive for other students. Additionally, some
                    pupils have the opportunity to post their own thoughts.</p>
                <p><strong>Advertisements</strong></p>
                <p>By running advertisements and campaigns, business owners promote themselves and grow their companies.</p>
                <p><strong>Manage Users</strong></p>
                <p>Certain users have the authority to manage other schools,users and their posts.</p>
            </div>
        </div>
        <div id="contact">
            <div class="text-center heading">Contact</div>
            <div class="dummy-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id nulla nec purus
                luctus posuere. Fusce tempus dignissim orci id facilisis. Phasellus et justo at risus aliquam egestas eget.
                <div class="pt-8">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-xs-12 col-sm-1"></div>
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-10">
                            <div class="flex align-items-center justify-content-center">
                                <div class="surface-card p-4 shadow-2 border-round w-full lg:w-6">
                                    <div class="text-center mb-5">
                                        <div class="text-900 text-3xl font-medium mb-3">Contact Us</div>
                                    </div>
                                    <form method="POST" action="{{ url('upload-query') }}">
                                        @csrf
                                        <div class="form-group"> <label for="firstname"
                                                class="block text-900 font-medium mb-2">First
                                                Name</label>
                                            <input id="firstname" type="text" name="firstname"
                                                class="p-inputtext p-component w-full mb-3">
                                        </div>

                                        @error('firstname')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        <div class="form-group"><label for="lastname"
                                                class="block text-900 font-medium mb-2">Last Name</label>
                                            <input id="lastname" type="text" name="lastname"
                                                class="p-inputtext p-component w-full mb-3">
                                        </div>

                                        @error('lastname')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        <div class="form-group"><label for="phone"
                                                class="block text-900 font-medium mb-2">Phone</label>
                                            <input id="phone" type="number" class="p-inputtext p-component w-full mb-3"
                                                name="phone_number">
                                        </div>

                                        @error('phone_number')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        <div class="form-group"><label for="email"
                                                class="block text-900 font-medium mb-2">Email</label><input id="email"
                                                type="text" name="emailaddress"
                                                class="p-inputtext p-component w-full mb-3"></div>

                                        @error('emailaddress')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        <div class="form-group"><label for="query"
                                                class="block text-900 font-medium mb-2">Query</label>
                                            <textarea id="query" name="query" class="p-inputtextarea p-inputtext p-component w-full mb-3" rows="5"
                                                cols="90"></textarea>
                                        </div>

                                        <button aria-label="Submit" class="p-button p-component w-full"><span
                                                class="p-button-icon p-c p-button-icon-left pi pi-user"></span><span
                                                class="p-button-label p-c">Submit</span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-xs-12 col-sm-1"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
