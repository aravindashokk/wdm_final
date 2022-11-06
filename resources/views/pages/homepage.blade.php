@extends('layouts.app')
@section('title', 'Student Application')
<style>
    body{
    margin:0;
    padding:0;
    font-family: 'Nunito Sans', sans-serif;
  }
  .nav-list{
    display:flex;
    flex-wrap:wrap;
    list-style:none;
    width:max-content;
    margin-left:auto;
    margin-right:2rem;
    font-weight: bold;
  }
  .nav-list a{
      text-decoration: none;
  }
  .nav-div{
    display:flex;
    flex-wrap:wrap;
    background:#ffffff;
    color:#c7c7c7ed;
    margin:0;
    padding:0;
    position: sticky;
    top:15;
    font-size: 18px;
    font-weight: bold;
    height: 35px;
  }
  .logo{
    width:max-content;
    margin: auto 2rem;

  }
  .nav-item{
    padding: 0px 1.5rem;

  }
  .heading{
      text-align: center;
      font-size: 35px;
      font-weight: 600;
      padding-top:60px;
      font-family: 'Satisfy', cursive;

}
.dummy-text{
    padding: 0.5rem 1.5rem;
    line-height: 150%;
    font-size: 18px;
    font-weight: 500;
}
.nav-list li:hover{
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

</style>
@section('content')
    <div>
        <div id="home">
            <div>
                <div class="hero">
                    <div class="overlay"></div>
                    <div class="content">
                        <h1>Mercado.</h1>
                        <p>This shit looks great, huh?</p>
                    </div>
                </div>
            </div>
            <div class="text-center heading" >Home</div>
            <div class="dummy-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id nulla nec purus
                luctus posuere. Fusce tempus dignissim orci id facilisis. Phasellus et justo at risus aliquam egestas eget
                vitae libero. Praesent sit amet tortor eu lorem fringilla vestibulum dapibus in libero. Nulla efficitur
                tempus accumsan. Pellentesque auctor urna quam. Maecenas euismod semper scelerisque. Sed sodales tincidunt
                dolor, sed luctus lectus aliquam eu. Vivamus suscipit nisl sollicitudin lacinia sollicitudin. Donec pharetra
                risus nec tortor rhoncus, finibus bibendum tellus facilisis. Vestibulum porttitor elementum consectetur.
                Maecenas nec felis ex. Sed tempus pretium mollis. Etiam tincidunt arcu et ullamcorper facilisis. Aenean
                scelerisque pellentesque lorem sed lacinia. Vestibulum id finibus nisi, finibus dignissim arcu. Maecenas sit
                amet libero pretium, pretium nunc a, sagittis quam. Praesent pellentesque mattis nulla, quis iaculis leo
                efficitur et. Donec eget eleifend ex. Sed in magna dui. Mauris vulputate dignissim mi. Nulla rutrum turpis
                sodales nisi fermentum volutpat. Nunc euismod aliquet arcu at finibus.</div>
        </div>
        <div id="about">
            <div class="text-center heading">About</div>
            <div class="dummy-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id nulla nec purus
                luctus posuere. Fusce tempus dignissim orci id facilisis. Phasellus et justo at risus aliquam egestas eget
                vitae libero. Praesent sit amet tortor eu lorem fringilla vestibulum dapibus in libero. Nulla efficitur
                tempus accumsan. Pellentesque auctor urna quam. Maecenas euismod semper scelerisque. Sed sodales tincidunt
                dolor, sed luctus lectus aliquam eu. Vivamus suscipit nisl sollicitudin lacinia sollicitudin. Donec pharetra
                risus nec tortor rhoncus, finibus bibendum tellus facilisis. Vestibulum porttitor elementum consectetur.
                Maecenas nec felis ex. Sed tempus pretium mollis. Etiam tincidunt arcu et ullamcorper facilisis. Aenean
                scelerisque pellentesque lorem sed lacinia. Vestibulum id finibus nisi, finibus dignissim arcu. Maecenas sit
                amet libero pretium, pretium nunc a, sagittis quam. Praesent pellentesque mattis nulla, quis iaculis leo
                efficitur et. Donec eget eleifend ex. Sed in magna dui. Mauris vulputate dignissim mi. Nulla rutrum turpis
                sodales nisi fermentum volutpat. Nunc euismod aliquet arcu at finibus.</div>
        </div>
        <div id="services">
            <div class="text-center heading">Services</div>
            <div class="dummy-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id nulla nec purus
                luctus posuere. Fusce tempus dignissim orci id facilisis. Phasellus et justo at risus aliquam egestas eget
                vitae libero. Praesent sit amet tortor eu lorem fringilla vestibulum dapibus in libero. Nulla efficitur
                tempus accumsan. Pellentesque auctor urna quam. Maecenas euismod semper scelerisque. Sed sodales tincidunt
                dolor, sed luctus lectus aliquam eu. Vivamus suscipit nisl sollicitudin lacinia sollicitudin. Donec pharetra
                risus nec tortor rhoncus, finibus bibendum tellus facilisis. Vestibulum porttitor elementum consectetur.
                Maecenas nec felis ex. Sed tempus pretium mollis. Etiam tincidunt arcu et ullamcorper facilisis. Aenean
                scelerisque pellentesque lorem sed lacinia. Vestibulum id finibus nisi, finibus dignissim arcu. Maecenas sit
                amet libero pretium, pretium nunc a, sagittis quam. Praesent pellentesque mattis nulla, quis iaculis leo
                efficitur et. Donec eget eleifend ex. Sed in magna dui. Mauris vulputate dignissim mi. Nulla rutrum turpis
                sodales nisi fermentum volutpat. Nunc euismod aliquet arcu at finibus.</div>
        </div>
        <div id="contact">
            <div class="text-center heading">Contact</div>
            <div class="dummy-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas id nulla nec purus
                luctus posuere. Fusce tempus dignissim orci id facilisis. Phasellus et justo at risus aliquam egestas eget.
                <div class="pt-8">
                    <div class="flex align-items-center justify-content-center">
                        <div class="surface-card p-4 shadow-2 border-round w-full lg:w-6">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
