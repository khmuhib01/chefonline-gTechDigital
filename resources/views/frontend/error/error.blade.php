@extends('frontend.include.layout')

@section('title', '404 | GTech Digital')
@section('description',
    'Contact GTech for your upcoming project via phone, email or filling up the contact form. Phone-
    0203 598 5956, 0330 380 1000, Email - info@gtechdigital.co.uk')

@section('content')



<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Raleway:600);
html, body {
	width:100%;
	height:100vh;
	margin:0;
	padding:0;
}
*{
	-webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
}
body {
	background:url(/assets/images/back.jpg);
	background-size:cover;
	background-attachment:fixed;
}
.wrapper_404 {
	position:relative;
	min-height:60vh;
}
#mainContent_404 {
	font-family: 'Raleway', sans-serif;
	position: absolute;
	min-width:300px;
	padding: 0 15px;
	width:100%;
	top:50%; 
	left: 50%; 
	-ms-transform: translateX(-50%) translateY(-50%);
	-webkit-transform: translate(-50%,-50%);
	transform: translate(-50%,-50%);
}
#mainContent_404 h4 {
	font-family: 'Raleway', sans-serif;
	color:#333;
	line-height:1.8;
}
#mainContent_404 img {
	max-width:100%;
	margin:15px 0;
}
#mainContent_404 a {
	text-decoration:none;
}
#mainContent_404 #srs {
	-webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.75);
	-moz-box-shadow:    0px 0px 10px 0px rgba(0, 0, 0, 0.75);
	box-shadow:         0px 0px 10px 0px rgba(0, 0, 0, 0.75);
	border:4px solid #fff;
	-webkit-border-radius: 15px;
	-moz-border-radius: 15px;
	border-radius: 15px;
}
#mainContent_404 #srs:hover {
	border:4px solid #D9443F;
}
.box-box {
	display: inline-block;
	margin: 0 auto;
}
#mainContent_404 > ul {
  display: inline-block;
}
#mainContent_404 li {
  clear: both;
  float: left;
  font-size: 13px;
  list-style: outside none none;
  padding-left: 15px;
  position: relative;
}
#mainContent_404 li::before {
  color: #D9443F;
  content: "*";
  font-size: 30px;
  left: 0;
  position: absolute;
  top: 7px;
}
#mainContent_404 a:hover {
	color: #D9443F;
}
@media only screen and (min-device-width : 320px) and (max-device-width : 640px) {
#img_404 { height:60px;}
#mainContent_404 img {
	max-width:300px;
	margin:0;
}
#mainContent_404 h4 {
	font-size:14px;
}
}
</style>


<section>
	<div class="container text-center wrapper_404">
    	<div id="mainContent_404">
        	<img src="{{asset('assets/frontend/images/404.png')}}" id="img_404" alt="404 Not Found">
            <h3>Sorry... The Page is Missing.</h3>
            <h4>Reason Might be:</h4>
            <ul>
            	<li>The page does not exist in the Linguestic version required</li>
            	<li>The page is out-dated & has been moved or removed</li>
            	<li>The address (URL) is not correct.</li>
            </ul>
            <br>
			<p>We're informed and will fix it soon. Meanwhile take a look at the links below to browse through our: <br> <a href="{{ route('home')}}">Home</a> - <a href="{{ route('contact')}}">Contact Us</a>.</p>
        </div>
    </div>
</section>



@endsection
