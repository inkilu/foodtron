<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Foodtron || Food Delivery!</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/icon.png">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="style.css">

	<!-- Cusom css -->
   <link rel="stylesheet" href="css/custom.css">
   <link rel="stylesheet" href="cstyle.css">

	<!-- Modernizer js -->
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>
<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Add your site or application content here -->
	
	<!-- <div class="fakeloader"></div> -->

    <!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		<!-- Start Header Area -->
        <header class="htc__header bg--white">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-sm-4 col-md-6 order-1 order-lg-1">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="images/logo/foody.png" alt="logo images">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-sm-4 col-md-2 order-3 order-lg-2">
                            <div class="main__menu__wrap">
                                <nav class="main__menu__nav d-none d-lg-block">
                                    <ul class="mainmenu">
                                        <li class="drop"><a href="index.php">Home</a>
                                         <!--   <ul class="dropdown__menu">
                                                <li><a href="index.html">Home Food Delivery</a></li>
                                                <li><a href="index-2.html">Home Pizza Delivery</a></li>
                                                <li><a href="index-3.html">Home Backery Delivery</a></li>
                                                <li><a href="index-4.html">Home Box Layout</a></li>
                                            </ul> -->
                                        </li>
                                        <li><a href="about-us.php">About</a></li>
                                        <li class="drop"><a href="menu-grid.php">Menu</a>
                                           <!-- <ul class="dropdown__menu">
                                                <li><a href="menu-grid.html">Menu Grid</a></li>
                                                <li><a href="menu-list.html">Menu List</a></li>
                                                <li><a href="menu-details.html">Menu Details</a></li>
                                            </ul> -->
                                        </li>
                                        <li><a href="gallery.html">Gallery</a></li>
                                      <!-- <li class="drop"><a href="blog-list.html">Blog</a>
                                            <ul class="dropdown__menu">
                                                <li><a href="blog-list.html">Blog List</a></li>
                                                <li><a href="blog-mesonry.html">Blog mesonry</a></li>
                                                <li><a href="blog-grid-left-sidebar.html">Blog Grid</a></li>
                                                <li><a href="blog-list-right-sidebar.html">Blog List with right sidebar</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li> 
                                            </ul>
                                        </li> --> 
                                        <li class="drop"><a href="#">Pages</a>
                                            <ul class="dropdown__menu">
                                                <li><a href="service.html">Service</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout Page</a></li>
                                                <li><a href="contact.html">Contact Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                                
                            </div>
                        </div>
                        <div class="col-lg-1 col-sm-4 col-md-4 order-2 order-lg-3">
                            <div class="header__right d-flex justify-content-end">
                            <div class="log__in"> 
                                    <a class="" href="reg/loginfrm.php">
                                        <div class="inktext">
                                        <h5><?php 
                                          if(isset($_SESSION['sess'])){
                                          echo"Hello,".$_SESSION['sess'];
                                          }
                                          else{
                                              echo "Login";
                                          }
                                          ?></h5> <!-- login status/User Status-->
                                        </div>
                                        </a>
                                </div> 

                                <div class="shopping__cart">
                                    <a class="minicart-trigger" href="#"><i class="zmdi zmdi-shopping-basket"></i></a>
                                    <div class="shop__qun">
                                        <span>03</span>  
                                    </div>
                                </div>
                                <ul class="dropdown__menu">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Mobile Menu -->
                        <div class="mobile-menu d-block d-lg-none"></div>
                    <!-- Mobile Menu -->
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Area -->
        <!-- Start Slider Area -->
        <div class="slider__area slider--one">
            <div class="slider__activation--1">
                <!-- Start Single Slide -->
                <div class="slide fullscreen bg-image--1">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="slider__content">
                                    <div class="slider__inner">
                                        <h2>“Foodtron”</h2>
                                        <h1>food delivery service</h1>
                                        <div class="slider__input">
                                            <input type="text" placeholder="Type Place, City.Division">
                                            <input class="res__search" type="text" placeholder="Restaurant">
                                            <div class="src__btn">
                                                <a href="#">Search</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
            </div>
        </div>
        <!-- End Slider Area -->
        <!-- Start Service Area -->
        <section class="fd__service__area bg-image--2 section-padding--xlg">
            <div class="container">
                <div class="service__wrapper bg--white">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="section__title service__align--left">
                                <p>The process of our service</p>
                                <h2 class="title__line">How it work</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mt--30">
                        <!-- Start Single Service -->
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="service">
                                <div class="service__title">
                                    <div class="ser__icon">
                                        <img src="images/icon/color-icon/1.png" alt="icon image">
                                    </div>
                                    <h2><a href="service.html">Choose restaurant</a></h2>
                                </div>
                                <div class="service__details">
                                    <p>Choose what your mind wants,Get all restaurants in your area!</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service -->
                        <!-- Start Single Service -->
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="service">
                                <div class="service__title">
                                    <div class="ser__icon">
                                        <img src="images/icon/color-icon/2.png" alt="icon image">
                                    </div>
                                    <h2><a href="service.html">Select,what you love to eat</a></h2>
                                </div>
                                <div class="service__details">
                                    <p>Over 50+ dishes from different Restaurants,All Fresh and Warm!</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service -->
                        <!-- Start Single Service -->
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="service">
                                <div class="service__title">
                                    <div class="ser__icon">
                                        <img src="images/icon/color-icon/3.png" alt="icon image">
                                    </div>
                                    <h2><a href="service.html">Safe and Fast Delivery</a></h2>
                                </div>
                                <div class="service__details">
                                    <p>Delivery across all areas without any barriers with all saftey precautions.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Service Area -->
        <!-- Start Food Category -->
        <section class="food__category__area bg--white section-padding--lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="section__title service__align--left">
                            <p>the process of our service</p>
                            <h2 class="title__line">Search by food category</h2>
                        </div>
                    </div>
                </div>
                <div class="food__category__wrapper mt--40">
                    <div class="row">
                        <!-- Start Single Category -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="food__item foo">
                                <div class="food__thumb">
                                    <a href="menu-details.html">
                                        <img src="images/product/md-product/1.jpg" alt="product images">
                                    </a>
                                </div>
                                <div class="food__title">
                                    <h2><a href="menu-details.html">Breakfast Items</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Category -->
                        <!-- Start Single Category -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="food__item foo">
                                <div class="food__thumb">
                                    <a href="menu-details.html">
                                        <img src="images/product/md-product/2.jpg" alt="product images">
                                    </a>
                                </div>
                                <div class="food__title">
                                    <h2><a href="menu-details.html">Lunch Items</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Category -->
                        <!-- Start Single Category -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="food__item foo">
                                <div class="food__thumb">
                                    <a href="menu-details.html">
                                        <img src="images/product/md-product/3.jpg" alt="product images">
                                    </a>
                                </div>
                                <div class="food__title">
                                    <h2><a href="menu-details.html">Dinner Items</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Category -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Food Category -->
        <!-- Start Special Menu -->
        <section class="fd__special__menu__area bg-image--3 section-pt--lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="section__title service__align--left">
                            <p>the process of our service </p>
                            <h2 class="title__line">Restaurant with Special Menu</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="special__food__menu mt--80">
                <div class="food__menu__prl bg-image--4">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="food__nav nav nav-tabs" role="tablist">
                                    <a class="active" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab">All</a>
                                    <a id="nav-breakfast-tab" data-toggle="tab" href="#nav-breakfast" role="tab">Breakfast</a>
                                    <a id="nav-lunch-tab" data-toggle="tab" href="#nav-lunch" role="tab">Lunch</a>
                                    <a id="nav-dinner-tab" data-toggle="tab" href="#nav-dinner" role="tab">Dinner</a>
                                    <a id="nav-coffee-tab" data-toggle="tab" href="#nav-coffee" role="tab">Coffee</a>
                                    <a id="nav-snacks-tab" data-toggle="tab" href="#nav-snacks" role="tab">Snacks</a>
                                </div>
                                <div class="fd__tab__content tab-content" id="nav-tabContent">
                                    <!-- Start Single tab -->
                                    <div class="single__tab__panel tab-pane fade show active" id="nav-all" role="tabpanel">
                                        <div class="tab__content__wrap">
                                            <!-- Start Single Tab Content -->
                                            <div class="single__tab__content">
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/1.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Maxican Food Fev</a></h4>
                                                            <span class="menu__prize">$15</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Chicken Stack</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/2.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">My Sweetest Desert </a></h4>
                                                            <span class="menu__prize">$18</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Chicken Stack</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/3.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Burger Kings House</a></h4>
                                                            <span class="menu__prize">$22</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Cheeze Burger</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/4.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Marmaid Chicken Fry</a></h4>
                                                            <span class="menu__prize">$20</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Chicken Fry</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                            </div>
                                            <!-- End Single Tab Content -->
                                            <!-- Start Single Tab Content -->
                                            <div class="single__tab__content">
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/1.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Kabab Ghor</a></h4>
                                                            <span class="menu__prize">$22</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Chicken Stack</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/2.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Haven Of Juice</a></h4>
                                                            <span class="menu__prize">$14</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Mixed Fruit Juice</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/3.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Italian Chines</a></h4>
                                                            <span class="menu__prize">$24</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type :Mixed Soup noodles</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/4.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Italian Chines</a></h4>
                                                            <span class="menu__prize">$15</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Chicken Stack</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                            </div>
                                            <!-- End Single Tab Content -->
                                        </div>
                                    </div>
                                    <!-- End Single tab -->
                                    <!-- Start Single tab -->
                                    <div class="single__tab__panel tab-pane fade" id="nav-breakfast" role="tabpanel">
                                        <div class="tab__content__wrap">
                                            <!-- Start Single Tab Content -->
                                            <div class="single__tab__content">
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/1.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Kabab Ghor</a></h4>
                                                            <span class="menu__prize">$22</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Chicken Stack</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/2.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Haven OF Juice </a></h4>
                                                            <span class="menu__prize">$14</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Mixed Fruit Juice</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/3.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Italian Chines</a></h4>
                                                            <span class="menu__prize">$24</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type :Mixed Soup noodles</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/4.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Italian Chines</a></h4>
                                                            <span class="menu__prize">$15</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Chicken Stack</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                            </div>
                                            <!-- End Single Tab Content -->
                                            <!-- Start Single Tab Content -->
                                            <div class="single__tab__content">
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/1.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Friends & Family Restaurant</a></h4>
                                                            <span class="menu__prize">$22</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Chicken Stack</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/2.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Friends & Family Restaurant</a></h4>
                                                            <span class="menu__prize">$14</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Mixed Fruit Juice</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                            </div>
                                            <!-- End Single Tab Content -->
                                        </div>
                                    </div>
                                    <!-- End Single tab -->
                                    <!-- Start Single tab -->
                                    <div class="single__tab__panel tab-pane fade" id="nav-lunch" role="tabpanel">
                                        <div class="tab__content__wrap">
                                            <!-- Start Single Tab Content -->
                                            <div class="single__tab__content">
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/1.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Kabab Ghor</a></h4>
                                                            <span class="menu__prize">$22</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Chicken Stack</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/2.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Haven OF Juice </a></h4>
                                                            <span class="menu__prize">$14</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Mixed Fruit Juice</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/3.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Italian Chines</a></h4>
                                                            <span class="menu__prize">$24</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type :Mixed Soup noodles</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/4.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Italian Chines</a></h4>
                                                            <span class="menu__prize">$15</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Chicken Stack</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                            </div>
                                            <!-- End Single Tab Content -->
                                        </div>
                                    </div>
                                    <!-- End Single tab -->
                                    <!-- Start Single tab -->
                                    <div class="single__tab__panel tab-pane fade" id="nav-dinner" role="tabpanel">
                                        <div class="tab__content__wrap">
                                            <!-- Start Single Tab Content -->
                                            <div class="single__tab__content">
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/1.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Kabab Ghor</a></h4>
                                                            <span class="menu__prize">$22</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Chicken Stack</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/2.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Haven OF Juice </a></h4>
                                                            <span class="menu__prize">$14</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Mixed Fruit Juice</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/3.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Italian Chines</a></h4>
                                                            <span class="menu__prize">$24</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type :Mixed Soup noodles</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/4.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Italian Chines</a></h4>
                                                            <span class="menu__prize">$15</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Chicken Stack</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                            </div>
                                            <!-- End Single Tab Content -->
                                            <!-- Start Single Tab Content -->
                                            <div class="single__tab__content">
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/1.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Friends & Family Restaurant</a></h4>
                                                            <span class="menu__prize">$15</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Chicken Stack</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/2.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Friends & Family Restaurant</a></h4>
                                                            <span class="menu__prize">$18</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Chicken Stack</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/3.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Friends & Family Restaurant</a></h4>
                                                            <span class="menu__prize">$22</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Cheeze Burger</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/4.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Friends & Family Restaurant</a></h4>
                                                            <span class="menu__prize">$20</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Chicken Fry</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                            </div>
                                            <!-- End Single Tab Content -->
                                        </div>
                                    </div>
                                    <!-- End Single tab -->
                                    <!-- Start Single tab -->
                                    <div class="single__tab__panel tab-pane fade" id="nav-coffee" role="tabpanel">
                                        <div class="tab__content__wrap">
                                            <!-- Start Single Tab Content -->
                                            <div class="single__tab__content">
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/1.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Kabab Ghor</a></h4>
                                                            <span class="menu__prize">$22</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Chicken Stack</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/2.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Haven OF Juice </a></h4>
                                                            <span class="menu__prize">$14</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Mixed Fruit Juice</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/3.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Italian Chines</a></h4>
                                                            <span class="menu__prize">$24</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type :Mixed Soup noodles</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/4.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Italian Chines</a></h4>
                                                            <span class="menu__prize">$15</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Chicken Stack</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                            </div>
                                            <!-- End Single Tab Content -->
                                        </div>
                                    </div>
                                    <!-- End Single tab -->
                                    <!-- Start Single tab -->
                                    <div class="single__tab__panel tab-pane fade" id="nav-snacks" role="tabpanel">
                                        <div class="tab__content__wrap">
                                            <!-- Start Single Tab Content -->
                                            <div class="single__tab__content">
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/1.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Kabab Ghor</a></h4>
                                                            <span class="menu__prize">$22</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Chicken Stack</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/2.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Haven OF Juice </a></h4>
                                                            <span class="menu__prize">$14</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Mixed Fruit Juice</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/3.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Italian Chines</a></h4>
                                                            <span class="menu__prize">$24</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type :Mixed Soup noodles</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/4.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Italian Chines</a></h4>
                                                            <span class="menu__prize">$15</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Chicken Stack</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                            </div>
                                            <!-- End Single Tab Content -->
                                            <!-- Start Single Tab Content -->
                                            <div class="single__tab__content">
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/1.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Friends & Family Restaurant</a></h4>
                                                            <span class="menu__prize">$22</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Chicken Stack</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/2.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Friends & Family Restaurant</a></h4>
                                                            <span class="menu__prize">$14</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Mixed Fruit Juice</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/3.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Italian Chines</a></h4>
                                                            <span class="menu__prize">$24</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type :Mixed Soup noodles</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                                <!-- Start Single Food -->
                                                <div class="food__menu">
                                                    <div class="food__menu__thumb">
                                                        <a href="menu-details.html">
                                                            <img src="images/product/sm-img/4.jpg" alt="product images">
                                                        </a>
                                                    </div>
                                                    <div class="food__menu__details">
                                                        <div class="fd__menu__title__prize">
                                                            <h4><a href="menu-details.html">Friends & Family Restaurant</a></h4>
                                                            <span class="menu__prize">$15</span>
                                                        </div>
                                                        <div class="fd__menu__details">
                                                            <p>Food Type : Chicken Stack</p>
                                                            <div class="delivery__time__rating">
                                                                <p>Delivery Time : 60 min, Delivery Cost : Free</p>
                                                                <ul class="fd__rating">
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li><i class="zmdi zmdi-star"></i></li>
                                                                    <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Food -->
                                            </div>
                                            <!-- End Single Tab Content -->
                                        </div>
                                    </div>
                                    <!-- End Single tab -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>      
        <!-- End Special Menu -->
        <!-- Start Download App Area -->
       <!-- <section class="food__download__app__area section-padding--lg bg--white bg__shape--1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="section__title service__align--left">
                            <p>the process of our service </p>
                            <h2 class="title__line">Download our app</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--80">
                    <div class="col-lg-12 poss--relative">
                        <div class="app__download__container">
                            <div class="app__download__inner inline__image__css--1" style="background-image: url(images/app/bg.png);">
                                <h2>Aahar now in your hand</h2>
                                <h6>Download! to get this app Faster way to order food</h6>
                            </div>
                            <ul class="dwn__app__list">
                                <li class="wow lightSpeedIn" data-wow-delay="0.2s"><a href="#"><img src="images/app/2.png" alt="app images"></a></li>
                                <li class="wow lightSpeedIn" data-wow-delay="0.3s"><a href="#"><img src="images/app/3.png" alt="app images"></a></li>
                            </ul>
                        </div>
                        <div class="app__phone wow fadeInLeft" data-wow-delay="0.2s">
                            <img src="images/app/1.png" alt="app images">
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End Download App Area -->
        <!-- Start Testimonail Area -->
        <!-- <section class="fd__testimonial__area section-padding--lg bg-image--5">

            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
                        <div class="testimonial__activation--1 text-center bg--white owl-carousel owl-theme clearfix">
                            
                            <div class="testimonial">
                                <div class="testimonial__thumb">
                                    <img src="images/testimonial/clint/1.png" alt="testimonial images">
                                </div>
                                <div class="testimonial__details">
                                    <h4>Mily Cyrus</h4>
                                    <h6>Food Expert</h6>
                                    <p>Lorem ipsum dolor sit amconsectetuadipisicing elit, kjjnin khk seeiusmod tempor incididunt ut labore et dolore maaliqua. Ut enim ad minim veniam,</p>
                                </div>
                            </div>
                            
                            <div class="testimonial">
                                <div class="testimonial__thumb">
                                    <img src="images/testimonial/clint/1.png" alt="testimonial images">
                                </div>
                                <div class="testimonial__details">
                                    <h4>Mily Cyrus</h4>
                                    <h6>Food Expert</h6>
                                    <p>Lorem ipsum dolor sit amconsectetuadipisicing elit, kjjnin khk seeiusmod tempor incididunt ut labore et dolore maaliqua. Ut enim ad minim veniam,</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- End Testimonail Area -->
        <!-- Start Blog Area -->
       <!-- <section class="fb__blog__ara section-padding--lg bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="section__title service__align--left">
                            <p>the process of our service </p>
                            <h2 class="title__line">Latest from Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--40">
                    <div class="col-md-6 col-lg-4 col-sm-12 foo">
                        <div class="blog">
                            <div class="blog__thumb">
                                <a href="blog-details.html">
                                    <img src="images/blog/md-blog/1.jpg" alt="blog images">
                                </a>
                            </div>
                            <div class="blog__details">
                                <h2><a href="blog-details.html">Maxican Food Fev</a></h2>
                                <span>1st Feb, 2o17</span>
                                <p>Lorem ipsum dolor sit amadipisicing elit, seddo eiusmoddolore magna aliqua. Ut enim ad miveniam, quis noion ullamco laboris nisi umt aliquip ex ea cequat.</p>
                                <div class="blog__btn">
                                    <a class="food__btn btn--green theme--hover" href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-6 col-lg-4 col-sm-12 foo">
                        <div class="blog">
                            <div class="blog__thumb">
                                <a href="blog-details.html">
                                    <img src="images/blog/md-blog/2.jpg" alt="blog images">
                                </a>
                            </div>
                            <div class="blog__details">
                                <h2><a href="blog-details.html">Italian Pizza Fev</a></h2>
                                <span>1st jan, 2o17</span>
                                <p>Lorem ipsum dolor sit amadipisicing elit, seddo eiusmoddolore magna aliqua. Ut enim ad miveniam, quis noion ullamco laboris nisi umt aliquip ex ea cequat.</p>
                                <div class="blog__btn">
                                    <a class="food__btn btn--green theme--hover" href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                   
                    <div class="col-md-6 col-lg-4 col-sm-12 foo">
                        <div class="blog">
                            <div class="blog__thumb">
                                <a href="blog-details.html">
                                    <img src="images/blog/md-blog/3.jpg" alt="blog images">
                                </a>
                            </div>
                            <div class="blog__details">
                                <h2><a href="blog-details.html">Asian Food Fev</a></h2>
                                <span>1st Dec, 2o17</span>
                                <p>Lorem ipsum dolor sit amadipisicing elit, seddo eiusmoddolore magna aliqua. Ut enim ad miveniam, quis noion ullamco laboris nisi umt aliquip ex ea cequat.</p>
                                <div class="blog__btn">
                                    <a class="food__btn btn--green theme--hover" href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </section> -->
        <!-- End Blog Area -->
        <!-- Start Subscribe Area -->
        <section class="fd__subscribe__area bg-image--6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="subscribe__inner">
                            <h2>Subscribe to our newsletter</h2>
                            <div id="mc_embed_signup">
                                <div id="enter__email__address">
                                    <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll" class="htc__news__inner">
                                            <div class="news__input">
                                                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter Your E-mail Address" required>
                                            </div>
                                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                            <div class="clearfix subscribe__btn"><input type="submit" value="Send Now" name="subscribe" id="mc-embedded-subscribe" class="sign__up food__btn">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Subscribe Area -->
        <!-- Start Footer Area -->
        <footer class="footer__area footer--1">
            <div class="footer__wrapper bg__cat--1 section-padding--lg">
                <div class="container">
                    <div class="row">
                        <!-- Start Single Footer -->
                        <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="footer">
                                <h2 class="ftr__title">About Foodtron</h2>
                                <div class="footer__inner">
                                    <div class="ftr__details">
                                        <p>We aim to provide fresh and tasty food.</p>
                                        <div class="ftr__address__inner">
                                            <div class="ftr__address">
                                                <div class="ftr__address__icon">
                                                    <i class="zmdi zmdi-home"></i>
                                                </div>
                                                <div class="frt__address__details">
                                                    <p>Various Hotels Across Kottayam</p>
                                                </div>
                                            </div>
                                            <div class="ftr__address">
                                                <div class="ftr__address__icon">
                                                    <i class="zmdi zmdi-phone"></i>
                                                </div>
                                                <div class="frt__address__details">
                                                    <p><a href="#">+919497441773</a></p>
                                                    <p><a href="#">+04812330617</a></p>
                                                </div>
                                            </div>
                                            <div class="ftr__address">
                                                <div class="ftr__address__icon">
                                                    <i class="zmdi zmdi-email"></i>
                                                </div>
                                                <div class="frt__address__details">
                                                    <p><a href="#">ask@foodtron.com</a></p>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="social__icon">
                                            <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-google"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                            <li><a href="#"><i class="zmdi zmdi-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer -->
                        <!-- Start Single Footer -->
                        <div class="col-md-6 col-lg-3 col-sm-12 sm--mt--40">
                            <div class="footer gallery">
                                <h2 class="ftr__title">Our Gallery</h2>
                                <div class="footer__inner">
                                    <ul class="sm__gallery__list">
                                        <li><a href="#"><img src="images/gallery/sm-img/1.jpg" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="images/gallery/sm-img/2.jpg" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="images/gallery/sm-img/3.jpg" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="images/gallery/sm-img/4.jpg" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="images/gallery/sm-img/5.jpg" alt="gallery images"></a></li>
                                        <li><a href="#"><img src="images/gallery/sm-img/6.jpg" alt="gallery images"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer -->
                        <!-- Start Single Footer -->
                        <div class="col-md-6 col-lg-3 col-sm-12 md--mt--40 sm--mt--40">
                            <div class="footer">
                                <h2 class="ftr__title">Opening Time</h2>
                                <div class="footer__inner">
                                    <ul class="opening__time__list">
                                        <li>Saturday<span>.......</span>9am to 11pm</li>
                                        <li>Sunday<span>.......</span>9am to 11pm</li>
                                        <li>Monday<span>.......</span>9am to 11pm</li>
                                        <li>Tuesday<span>.......</span>9am to 11pm</li>
                                        <li>Wednesday<span>.......</span>9am to 11pm</li>
                                        <li>Thursday<span>.......</span>9am to 11pm</li>
                                        <li>Friday<span>.......</span>9am to 11pm</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer -->
                        <!-- Start Single Footer -->
                        <div class="col-md-6 col-lg-3 col-sm-12 md--mt--40 sm--mt--40">
                            <div class="footer">
                                <h2 class="ftr__title">Latest Post</h2>
                                <div class="footer__inner">
                                    <div class="lst__post__list">
                                        <div class="single__sm__post">
                                            <div class="sin__post__thumb">
                                                <a href="blog-details,html">
                                                    <img src="images/blog/sm-img/1.jpg" alt="blog images">
                                                </a>
                                            </div>
                                            <div class="sin__post__details">
                                                <h6><a href="blog-details.html">Chicken Shawarma </a></h6>
                                                <p>Lordo loram consecte turadip isicing</p>
                                            </div>
                                        </div>
                                        <div class="single__sm__post">
                                            <div class="sin__post__thumb">
                                                <a href="blog-details,html">
                                                    <img src="images/blog/sm-img/2.jpg" alt="blog images">
                                                </a>
                                            </div>
                                            <div class="sin__post__details">
                                                <h6><a href="blog-details.html">Fruits Desert</a></h6>
                                                <p>Lordo loramcon secte turadipi sicing</p>
                                            </div>
                                        </div>
                                        <div class="single__sm__post">
                                            <div class="sin__post__thumb">
                                                <a href="blog-details,html">
                                                    <img src="images/blog/sm-img/3.jpg" alt="blog images">
                                                </a>
                                            </div>
                                            <div class="sin__post__details">
                                                <h6><a href="blog-details.html">Vanilla Pastry</a></h6>
                                                <p>Lordo loramcon secte turadip isicing</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer -->
                    </div>
                </div>
            </div>
            <div class="copyright bg--theme">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="copyright__inner">
                                <div class="cpy__right--left">
                                    <p>@All Right Reserved.</p>
                                </div>
                                <div class="cpy__right--right">
                                    <a href="#">
                                        <img src="images/icon/shape/2.png" alt="payment images">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->
        <!-- Login Form -->
        <div class="accountbox-wrapper">
            <div class="accountbox text-left">
                <ul class="nav accountbox__filters" id="myTab" role="tablist">
                    <li>
                        <a class="active" id="log-tab" data-toggle="tab" href="#log" role="tab" aria-controls="log" aria-selected="true">Login</a>
                    </li>
                    <li>
                        <a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                    </li>
                </ul>
                <div class="accountbox__inner tab-content" id="myTabContent">
                    <div class="accountbox__login tab-pane fade show active" id="log" role="tabpanel" aria-labelledby="log-tab">
            <!--LOGIN.-->  <form action="php/login.php" method="POST" name="loginform" id="loginform">
                            <div class="single-input">
                                <input class="cr-round--lg" type="text" name="usernmeoremail" placeholder="User name or email" required>
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" type="password" name="passwrdlog" placeholder="Password" required>
                            </div>
                            <div class="single-input">
                                <button type="submit" class="food__btn" name="submitlogin"><span>Go</span></button>
                            </div>
                            <div class="accountbox-login__others">
                                <h6>Or login with</h6>
                                <div class="social-icons">
                                    <ul>
                                        <li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                        <li class="pinterest"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="accountbox__register tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <!--REGISTER-->     <form action="php/register.php" method="POST" name="registerform" id="registerform">
                            <div class="single-input">
                                <input class="cr-round--lg" type="text" name="usernme" placeholder="User name" required>
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" type="email" name="email_" placeholder="Email address" required>
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" type="password" name="passwrd" placeholder="Password" required>
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" type="password" name="passwrd1" placeholder="Confirm password" required>
                            </div>
                            <div class="single-input">
                                <button type="submit" name="registersubmit" class="food__btn"><span>Sign Up</span></button>
                            </div>
                        </form>
                    </div>
                    <span class="accountbox-close-button"><i class="zmdi zmdi-close"></i></span>
                </div>
            </div>
        </div><!-- //Login Form -->
            <!-- Cartbox -->
        <div class="cartbox-wrap">
            <div class="cartbox text-right">
                <button class="cartbox-close"><i class="zmdi zmdi-close"></i></button>
                <div class="cartbox__inner text-left">
                    <div class="cartbox__items">
                        <!-- Cartbox Single Item -->
                        <div class="cartbox__item">
                            <div class="cartbox__item__thumb">
                                <a href="product-details.html">
                                    <img src="images/blog/sm-img/1.jpg" alt="small thumbnail">
                                </a>
                            </div>
                            <div class="cartbox__item__content">
                                <h5><a href="product-details.html" class="product-name">Vanila Muffin</a></h5>
                                <p>Qty: <span>01</span></p>
                                <span class="price">$15</span>
                            </div>
                            <button class="cartbox__item__remove">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div><!-- //Cartbox Single Item -->
                        <!-- Cartbox Single Item -->
                        <div class="cartbox__item">
                            <div class="cartbox__item__thumb">
                                <a href="product-details.html">
                                    <img src="images/blog/sm-img/2.jpg" alt="small thumbnail">
                                </a>
                            </div>
                            <div class="cartbox__item__content">
                                <h5><a href="product-details.html" class="product-name">Wheat Bread</a></h5>
                                <p>Qty: <span>01</span></p>
                                <span class="price">$25</span>
                            </div>
                            <button class="cartbox__item__remove">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div><!-- //Cartbox Single Item -->
                        <!-- Cartbox Single Item -->
                        <div class="cartbox__item">
                            <div class="cartbox__item__thumb">
                                <a href="product-details.html">
                                    <img src="images/blog/sm-img/3.jpg" alt="small thumbnail">
                                </a>
                            </div>
                            <div class="cartbox__item__content">
                                <h5><a href="product-details.html" class="product-name">Mixed Fruits Pie</a></h5>
                                <p>Qty: <span>01</span></p>
                                <span class="price">$30</span>
                            </div>
                            <button class="cartbox__item__remove">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div><!-- //Cartbox Single Item -->
                    </div>
                    <div class="cartbox__total">
                        <ul>
                            <li><span class="cartbox__total__title">Subtotal</span><span class="price">$70</span></li>
                            <li class="shipping-charge"><span class="cartbox__total__title">Shipping Charge</span><span class="price">$05</span></li>
                            <li class="grandtotal">Total<span class="price">$75</span></li>
                        </ul>
                    </div>
                    <div class="cartbox__buttons">
                        <a class="food__btn" href="cart.html"><span>View cart</span></a>
                        <a class="food__btn" href="checkout.html"><span>Checkout</span></a>
                    </div>
                </div>
            </div>
        </div><!-- //Cartbox -->  
	</div><!-- //Main wrapper -->

	<!-- JS Files -->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/active.js"></script>
</body>
</html>
