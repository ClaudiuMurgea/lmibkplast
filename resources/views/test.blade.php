<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js" integrity="sha512-oL84kLQMEPIS350nZEpvFH1whU0HHGNUDq/X3WBdDAvKP7jn06gHTsCsymsoPYKF/duN8ZxzzvQgOaaZSgcYtQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <!-- Icons for Chevron -->
   


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick.min.css" />	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick-theme.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css"/>

        <style>
            body{ 
                background: transparent !important;
            }
 .search-container {
    align-items: center;
    display: flex;
    justify-content: left;
  }
input.no-submit {
    border: 1px solid white;
    width: 100%;
    padding: 9px 4px 9px 4px;
    /* You can use your image but having cleaner code is better, so I suggest saving the file and just linking it*/
    /*background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'%3E%3C!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --%3E%3Cpath d='M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z'/%3E%3C/svg%3E") ;*/
    background-image: url("https://upload.wikimedia.org/wikipedia/commons/5/55/Magnifying_glass_icon.svg");
    background-size: 13px;
    background-repeat: no-repeat;
    background-position: 10px center;
}
input.no-submit::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: #bbbbbb !important;
    opacity: 1; /* Firefox */
}
input[type="search"] {
    border: none;
    background-color: transparent;
    margin: 0;
    padding: 4px 8px 4px 30px;
    font-size: 16px;
    color: inherit;
    border: 1px solid black;
    border-radius: 6px;
}
input[type="search"]::placeholder {
    color: white;
}
input[type="search"]:focus {
    box-shadow: 0 0 3px 0 #3f69a8;
    border-color: #3f69a8;
    outline: none;
}
div:empty:before {
  content:attr(data-placeholder);
  color:gray
}


@keyframes drop-in {
  0% {
    transform: translateY(-400px) rotate(-270deg);
  }
  100% {
    opacity: 1;
  }
}

/* Styling */

* {
  margin: 0 auto;
}

.diamond {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
  background: #00bcd4;
}

.top-triangles,
.bottom-triangles {
  display: flex;
}

.one {
  width: 0;
  height: 0;
  border-right: 22px solid transparent;
  border-left: 22px solid transparent;
  border-bottom: 30px solid #ffad39;
  animation: drop-in 1s ease-in .3s;
}

.two {
  margin-left: -22px;
  width: 0;
  height: 0;
  border-right: 22px solid transparent;
  border-left: 22px solid transparent;
  border-top: 30px solid #ffeeba;
  animation: drop-in 1s ease-in .5s;
}

.three {
  margin-left: -22px;
  width: 0;
  height: 0;
  border-right: 22px solid transparent;
  border-left: 22px solid transparent;
  border-bottom: 30px solid #ffad39;
  animation: drop-in 1s ease-in .7s;
}

.four {
  width: 0;
  height: 0;
  border-right: 45px solid transparent;
  border-left: 45px solid transparent;
  border-top: 45px solid #f16a25;
  animation: drop-in 1s ease-in;
  
}

animation-box {
  width: 22%;
  height: 27.5rem;
  background-color: blue;
  margin: 0 auto;
  overflow: hidden;
  position: relative;
}

.animation-container {
  width: 1000rem;
  height: 15rem;
}

@keyframes topFadeOut {
  0% {
    position: absolute;
    top: -3rem;
    opacity: 0;
  }

  0.1% {
    position: absolute;
    top: 35%;
    opacity: 1;
  }

  100% {
    position: absolute;
    top: 35%;
    opacity: 1;
  }
}

.first-text {
  font-size: 1.2rem;
  position: absolute;
  left: 47%;
  margin: 0 auto;
  top: 5rem;
  opacity: 0;
  animation-name: topFadeOut;
  animation-duration: 1000s;
  color: white;
}
/* 

html {
	height: 100%;
	margin: 0;
	padding: 0;
	font-family: 'Helvetica', sans-serif;
	background: rgb(26, 188, 156);
	background: -moz-linear-gradient(-45deg, rgba(26, 188, 156, 1) 0%, rgba(142, 68, 173, 1) 100%);
	background: -webkit-linear-gradient(-45deg, rgba(26, 188, 156, 1) 0%, rgba(142, 68, 173, 1) 100%);
	background: linear-gradient(135deg, rgba(26, 188, 156, 1) 0%, rgba(142, 68, 173, 1) 100%);
}

h1 {
	font-size: 24px;
	margin: 10px 0 0 0;
	font-weight: lighter;
	text-transform: uppercase;
	color: #eeeeee;
}

p {
	font-size: 12px;
	font-weight: light;
	color: #333333;
}

span a {
	font-size: 18px;
	color: #cccccc;
	text-decoration: none;
	margin: 0 10px;
	transition: all 0.4s ease-in-out;
	&:hover {
		color: #ffffff;
	}
} */

@keyframes float {
	0% {
		box-shadow: 0 5px 15px 0px rgba(0,0,0,0.6);
		transform: translatey(0px);
	}
	50% {
		box-shadow: 0 25px 15px 0px rgba(0,0,0,0.2);
		transform: translatey(-20px);
	}
	100% {
		box-shadow: 0 5px 15px 0px rgba(0,0,0,0.6);
		transform: translatey(0px);
	}
}
/* 
.container {
	width: 100%;
	height: 100%;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
} */

.avatar {
	width: 150px;
	height: 150px;
	box-sizing: border-box;
	border: 5px white solid;
	border-radius: 50%;
	overflow: hidden;
	box-shadow: 0 5px 15px 0px rgba(0,0,0,0.6);
	transform: translatey(0px);
	animation: float 6s ease-in-out infinite;
	img { width: 100%; height: auto; }
}
/* 
.content {
	width: 100%;
	max-width: 600px;
	padding: 20px 40px;
	box-sizing: border-box;
	text-align: center;
}

.suppoprt-me {
	display: inline-block;
	position: fixed;
	bottom: 10px;
	left: 10px;
	width: 20vw;
	max-width: 250px;
	min-width: 200px;
	z-index: 9;
	img {
		width: 100%;
		height: auto;
	}
} */
body {
    height: 100%;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
}

.arrow-container {
  width: 25px;
  /* cubic-bezier-easing = sine / mehr Beispiele: https://easings.net/ */
  animation: bounce 1600ms infinite cubic-bezier(0.445, 0.05, 0.55, 0.95);
  cursor: pointer;
  height: 20px;
}

.arrow-down {
  height: 6px;
  background: black;
  transform: rotate(45deg);
  transform-origin: 0% 0%;
  border-radius: 5px;
}
.arrow-down:after {
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  bottom: 0;
  left: 100%;
  border-radius: 5px;
  background: black;
  transform: rotate(-90deg);
  transform-origin: 0% 100%;
}

@keyframes bounce {
50% {
    transform: translateY(-15px);
  }
}

.slider {padding: 2rem 0;}
.slick-slide {margin-right: 1rem;}
.slick-dots {/* position: absolute; bottom: -3.5rem; */ display: block; padding: 0; margin: 0; list-style: none; line-height: 0;}
.slick-dots li {position: relative; display: inline-block; width: 0.9375rem; height: 0.9375rem; margin: 0 0.875rem; padding: 0; cursor: pointer;}
.slick-dots li:first-child {margin-left: 0;}
.slick-dots li:last-child {margin-right: 0;}

.slick-dots li button {font-size: 0; line-height: 0; display: block; width: 0.9375rem; height: 0.9375rem; padding: 0.3125rem; cursor: pointer; color: transparent; outline: none; border:none; background: rgba(47, 31, 22, 0.5); border-radius: 50%;}

.slick-dots li button:hover,
.slick-dots li button:focus,
.slick-dots li.slick-active button {outline: none; background-color: #2d1d15; transition: all 300ms ease 0s; color: #2d1d15;}

.slick-next:before, .slick-prev:before {color: #000 !important;}

.simplebar-content {display: flex;}
.simplebar-item {padding: 2.5rem; background: #f8f9fa!important; min-width: 250px;}
.simplebar-item:not(:last-child) {margin-right: 1rem;}

.simplebar-scrollbar::before {
	opacity: 1 !important;
}

.simplebar-track {z-index: 1000;}


.overflow {overflow-x: scroll; display: flex;}

.container-fluid .blue-row {
    background-color: #03a9f4;
    width: 100%;
    margin: auto;
}

.container-fluid .blue-row h3 {
    color: white;
    font-size: 39px;
    text-align: center;
    vertical-align: center;
    padding: 40px;
    font-weight: bold;
}

.container-fluid .blue-row h3 span {
    margin-left: 5%;
    transition: 1s;
}

.container-fluid .blue-row:active > h3 span {
    margin-left: 10%;
}
</style>
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
       <link rel="stylesheet" type="text/css" href="{{ asset('css/mystyle.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/carousel.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/keyboard.css') }}">
<title>Document</title>
</head>
<body>
   <div class="arrow-container">
            <div class="arrow-down"></div>
        </div>
<div style="width:92%;" class="container-fluid">
    <div style="width:270px;" class="search-container pb-4">
        <input style="height:40px;" class="no-submit montserrat"  type="search" placeholder="Search by name..." >
    </div>
</div>
<a class="nav-link dropdown-toggle" href="verification" data-toggle="dropdown" role="button">Verification</a>
                            <ul class="dropdown-menu" style="background-color: #000080;">
                                <li class="nav-item"><a class="nav-link" href="verification/certificates">Verify Certificates</a></li>
                                <li class="nav-item"><a class="nav-link" href="verification/membership">Verify Membership</a></li>

                            </ul>
                           <a class="nav-link2 dropdown-toggle" href="opportunities" data-toggle="dropdown2" role="button">Opportunities</a>
                            <ul class="dropdown-menu" style="background-color: #000080;">
                                <li class="nav-item"><a class="nav-link2" href="http://robotics.uiu.ac.bd/form/wanted_graphicdesigner">Graphic Designer Wanted</a></li>
                            </ul>

<div class="p-2"></div>

<div class="container">
	<h3>Simplebar</h3>
	<a href="https://github.com/Grsmto/simplebar">Info</a>
	<div class="pb-4"></div>
	<div class="simplebar" data-simplebar>
		<div class="simplebar-item bg-light">your content 1</div>
		<div class="simplebar-item bg-light">your content 2</div>
		<div class="simplebar-item bg-light">your content 3</div>
		<div class="simplebar-item bg-light">your content 4</div>
		<div class="simplebar-item bg-light">your content 5</div>
		<div class="simplebar-item bg-light">your content 6</div>
		<div class="simplebar-item bg-light">your content 7</div>
		<div class="simplebar-item bg-light">your content 8</div>
		<div class="simplebar-item bg-light">your content 9</div>
	</div>
</div>

<div class="p-5"></div>
	
<div class="container">
	<h3>Slick Slider</h3>
	<a href="https://kenwheeler.github.io/slick/">Info</a>
	<div class="slider">
  <div class="item" wire:click="ShowComponent('jackpots')">                        <img style="height:60px;width:60px;margin:0 auto;" src='slide-images/jackpot.png'>  Jackpots    </div>
  <div class="item" wire:click="ShowComponent('bonus')">        <img style="height:60px;width:60px;margin:0 auto;" src='slide-images/bonus.png'>    Bonus       </div>
  <div class="item" wire:click="ShowComponent('cashout')">      <img style="height:60px;width:60px;margin:0 auto;" src='slide-images/cashout.png'>  Cashout     </div>
  <div class="item" wire:click="ShowComponent('news')">         <img style="height:60px;width:60px;margin:0 auto;" src='slide-images/news.png'>     News        </div>
  <div class="item" wire:click="ShowComponent('quest')">        <img style="height:60px;width:60px;margin:0 auto;" src='slide-images/mission.png'>  Quest       </div>
  <div class="item" wire:click="ShowComponent('pyramid')">      <img style="height:60px;width:60px;margin:0 auto;" src='slide-images/pyramid.png'>  Pyramid     </div>
  <div class="item" wire:click="ShowComponent('tombola')">      <img style="height:60px;width:60px;margin:0 auto;" src='slide-images/raffle.png'>   Tombola     </div>
  <div class="item" wire:click="ShowComponent('market')">       <img style="height:60px;width:60px;margin:0 auto;" src='slide-images/shop.png'>     Market      </div>
  <div class="item" wire:click="ShowComponent('okto')">         <img style="height:35px;width:35px;margin:0.8rem auto;" src='slide-images/oktoqr.png'>  Okto    </div>
  <div class="item" wire:click="ShowComponent('settings')">     <img style="height:60px;width:60px;margin:0 auto;" src='slide-images/ranking.png'>  Auto Level  </div>
	</div>
</div>

<div class="p-5"></div>

<div class="container">
	<h3>CSS Overflow Container</h3>
	<div class="pb-4"></div>
	<div class="overflow">
		<div class="simplebar-item bg-light">your content 1</div>
		<div class="simplebar-item bg-light">your content 2</div>
		<div class="simplebar-item bg-light">your content 3</div>
		<div class="simplebar-item bg-light">your content 4</div>
		<div class="simplebar-item bg-light">your content 5</div>
		<div class="simplebar-item bg-light">your content 6</div>
		<div class="simplebar-item bg-light">your content 7</div>
		<div class="simplebar-item bg-light">your content 8</div>
		<div class="simplebar-item bg-light">your content 9</div>
	</div>
</div>
</div>

<div class="p-5"></div>



<script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick.js"></script>
<!-- 
<div  contenteditable="true" data-placeholder="in case this div is empty"></div>
<div  contenteditable="true" data-placeholder="in case this div is empty">Not empty , but you can edit me </div>
<div  contenteditable="true" data-placeholder="this div is actually empty , you can insert content here."></div>

<div class="diamond">
  <div class="top-triangles">
    <div class="one">
    </div>
    <div class="two">
    </div>
    <div class="three">
    </div>
  </div>
  <div class="bottom-triangles">
    <div style="position:relative;" class="four">
    </div>
  </div>
  <section class="animation-box">
    <div class="first-text">Close</div>
    </section>
</div> -->
<div class="avatar">
		<a href="https://codepen.io/MarioDesigns/">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/751678/skytsunami.png" alt="Skytsunami" />
		</a>
	</div>
  
  <div class="container-fluid">
    <div class="blue-row">
        <h3><span>&#8629;Back</span></h3>
    </div>
</div>
<!-- <div class="container">
	<div class="avatar">
		<a href="https://codepen.io/MarioDesigns/">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/751678/skytsunami.png" alt="Skytsunami" />
		</a>
	</div>
	<div class="content">
		<h1>Floating CSS animation</h1>
		<p>Follow me on:</p>
		<p>
			<span><a href="https://twitter.com/MDesignsuk" target="_blank"><i class="fa fa-twitter"></i></a></span>
			<span><a href="https://github.com/Mario-Duarte/" target="_blank"><i class="fa fa-github"></i></a></span>
			<span><a href="https://bitbucket.org/Mario_Duarte/" target="_blank"><i class="fa fa-bitbucket"></i></a></span>
			<span><a href="https://codepen.io/MarioDesigns/" target="_blank"><i class="fa fa-codepen"></i></a></span>
		</p>
		<p>BY: Mario Duarte</p>
	</div>
</div>

<a class="suppoprt-me" href="https://www.buymeacoffee.com/marioduarte" target="_blank"><img src="https://img.buymeacoffee.com/button-api/?text=Buy me a Coffee&nbsp&emoji=&slug=marioduarte&button_colour=FF5F5F&font_colour=ffffff&font_family=Cookie&outline_colour=000000&coffee_colour=FFDD00"></a> -->
@foreach($test as $t)
            {{$nr++}}

            @if($nr % 2 != 0)
            @dump(1)
            <div style="background:red; width:90%; margin:0 auto;display:flex;justify-content:space-between;padding-left:16px;">
            @endif

            @if($loop->index % 2 == 0)
                <div style="width:50%; background:green;text-align:center;margin-right:0.9rem;">
                    <div style="display:flex; justify-content: space-between;">
                        <div style="display:flex; flex-direction:column; background:yellow;width:100%;margin-right:1.8rem;">
                            <div style="font-size:1.3rem;text-align:center;">
                                Product Name
                            </div>
                            <div style="text-align:left; padding-left:0.5rem;">
                                Points : number
                            </div>
                        </div>
                        <div style="background:pink;width:100px;display:flex; align-items:center;justify-content:center;">
                            <div class="door_image_wrapper">
                                <img class="zoom door_img" src="data:image/png;base64,{{ chunk_split(base64_encode($t->Resource)) }}" alt="image" width="100" />
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($loop->index % 2 != 0)
            
                <div style="width:50%; background:blue;margin-left:0.9rem;">
                    <div style="display:flex; justify-content: space-between;">
                        <div style="background:pink;width:100px;display:flex; align-items:center;justify-content:center;">
                            <div class="door_image_wrapper">
                                <img class="zoom door_img" src="data:image/png;base64,{{ chunk_split(base64_encode($t->Resource)) }}" alt="image" width="100" />
                            </div>
                        </div>
                        <div style="display:flex; flex-direction:column; background:yellow;width:100%;margin-left:1.8rem;">
                            <div style="font-size:1.3rem;text-align:center;">
                                Product Name
                            </div>
                            <div style="text-align:left; padding-left:0.5rem;">
                                Points : number
                            </div>
                        </div>
                    </div>
                </div>

            @endif

            @if($nr % 2 != 0)
            </div>

            @endif

        @endforeach





        <div style="display:grid;grid-template-rows: 1fr; row-gap:40px; grid-template-columns: 2fr 1fr 1fr 2fr">
        @for($i = 1; $i ++)
        <div>
            Product name
        </div>
        <div>
            image
        </div>
    </div>

    <div class="abc" style="min-height: 0;min-width: 0;display:grid;width:90%;margin:0 auto;padding-top:2rem;grid-template-rows: 1fr; row-gap:40px; grid-template-columns: 2fr 1fr 1fr 2fr; column-gap:1.6rem;">
        @foreach($test as $t)
            @if($loop->index % 2 != 0)
                <div style="background: linear-gradient(0deg, rgba(166,166,166,1) 0%, rgba(255,255,255,1) 29%);display:flex; align-items:center;justify-content:center;">
                    <div class="door_image_wrapper">
                        <img class="zoom door_img" src="data:image/png;base64,{{ chunk_split(base64_encode($t->Resource)) }}" alt="image" width="100" />
                    </div>
                </div>
                <div style="background:yellow;display:flex;flex-direction:column;">
                    <div style="font-size:1.3rem;text-align:center;">
                        Product name
                    </div>
                    <div style="padding-top:6px; padding-left:10px;overflow:auto;max-height:100px;">
                        Product Details Product Details Product Details Product Details Product Details Product Details 
                    </div>
                </div>
            @else 
                <div style="background:yellow;display:flex;flex-direction:column;">
                    <div style="font-size:1.3rem;text-align:center;">
                        Product name
                    </div>
                    <div style="padding-top:6px; padding-left:10px;">
                        Product Details
                    </div>
                </div>
                <div style="background: linear-gradient(0deg, rgba(166,166,166,1) 0%, rgba(255,255,255,1) 29%);display:flex; align-items:center;justify-content:center;">
                    <div class="door_image_wrapper">
                        <img class="zoom door_img" src="data:image/png;base64,{{ chunk_split(base64_encode($t->Resource)) }}" alt="image" width="100" />
                    </div>
                </div>
            @endif 
        @endforeach
    </div>

    
<script>
  $('.slider').slick({
	dots: true,
	arrows: true,
	slidesToShow: 3,
  slidesToScroll: 3,
	draggable: true,
	touchMove: true
});
</script>
</body>
</html>