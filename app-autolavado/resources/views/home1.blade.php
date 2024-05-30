<!DOCTYPE html>
<html lang="en">

<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- set the page title -->
    <title>Autoglow - Car Washing Service & Auto Detail HTML Template</title>
    <!-- inlcude google nunito sans font cdn link -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- inlcude google nunito sans font cdn link -->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    <!-- inlcude google fira sans font cdn link -->
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <!-- include the site bootstrap stylesheet -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- include theme color setting stylesheet -->
    <link rel="stylesheet" href="css/colors.css">
    <!-- include the site responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <!-- pageWrapper -->
    <div id="pageWrapper">
        <!-- phStickyWrap -->
        <div class="phStickyWrap">
            <div class="headerFixer">
                <!-- pageHeader -->
                <header id="pageHeader" class="bg-white">
                    <div class="container-fluid clearfix">
                        <div class="logo">
                            <a href="home1.html">
                                <img src="src/logo.svg" class="img-fluid" alt="Autoglow Carwash">
                            </a>
                        </div>
                        <nav id="pageNav"
                            class="navbar navbar-expand-lg navbar-light justify-content-end justify-content-lg-start position-static">
                            <div class="collapse navbar-collapse pageMainNavCollapse" id="pageMainNavCollapse">
                                <ul class="navbar-nav mainNavigation fontAlter fwMedium pl-lg-3 pl-xlwd-9 pl-xxl-18">
                                    <li class="nav-item dropdown ddohOpener">
                                        <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="homeDropdown"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Home</a>
                                        <!-- dropdown-menu / hdMainDropdown / desktopDropOnHover -->
                                        <div class="dropdown-menu hdMainDropdown desktopDropOnHover">
                                            <ul class="list-unstyled mb-0 hdDropdownList">
                                                <li><a class="dropdown-item" href="home1.html">Home 1</a></li>
                                                <li><a class="dropdown-item" href="home2.html">Home 2</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown ddohOpener">
                                        <a class="nav-link dropdown-toggle" href="javascript:void(0);"
                                            id="pagesDropdown" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">Pages</a>
                                        <!-- dropdown-menu / hdMainDropdown / desktopDropOnHover -->
                                        <div class="dropdown-menu hdMainDropdown desktopDropOnHover">
                                            <ul class="list-unstyled mb-0 hdDropdownList">
                                                <li><a class="dropdown-item" href="404Error.html">404 Error</a></li>
                                                <li><a class="dropdown-item" href="about.html">About</a></li>
                                                <li><a class="dropdown-item" href="bookingSystem.html">Booking
                                                        System</a></li>
                                                <li><a class="dropdown-item" href="faq.html">FAQ</a></li>
                                                <li><a class="dropdown-item" href="myAccount.html">My Account</a></li>
                                                <li><a class="dropdown-item" href="pricingPackage.html">Pricing
                                                        Package</a></li>
                                                <li><a class="dropdown-item" href="team.html">Team</a></li>
                                                <li><a class="dropdown-item" href="teamSingle.html">Team Single</a></li>
                                                <li><a class="dropdown-item" href="testimonials.html">Testimonials</a>
                                                </li>
                                                <li><a class="dropdown-item" href="elements.html">Elements</a></li>
                                                <li><a class="dropdown-item" href="typography.html">Typography</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown ddohOpener">
                                        <a class="nav-link dropdown-toggle" href="javascript:void(0);"
                                            id="servicesDropdown" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">Services</a>
                                        <!-- dropdown-menu / hdMainDropdown / desktopDropOnHover -->
                                        <div class="dropdown-menu hdMainDropdown desktopDropOnHover">
                                            <ul class="list-unstyled mb-0 hdDropdownList">
                                                <li><a class="dropdown-item" href="{{ route('home') }}">Facturación</a>
                                                </li>
                                                <li><a class="dropdown-item" href="servicesSingle.html">Services
                                                        Single</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown ddohOpener">
                                        <a class="nav-link dropdown-toggle" href="javascript:void(0);"
                                            id="portfolioDropdown" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">Portfolio</a>
                                        <!-- dropdown-menu / hdMainDropdown / desktopDropOnHover -->
                                        <div class="dropdown-menu hdMainDropdown desktopDropOnHover">
                                            <ul class="list-unstyled mb-0 hdDropdownList">
                                                <li><a class="dropdown-item" href="portfolioGrid.html">Portfolio
                                                        Grid</a></li>
                                                <li><a class="dropdown-item"
                                                        href="portfolioGridCaption.html">Portfolio Grid Caption</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="portfolioImageGallery.html">Portfolio Image Gallery</a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="javascript:void(0);"
                                                        class="dropdown-item dropdown-toggle dropIcn" role="button"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Portfolio Single</a>
                                                    <div class="dropdown-menu hdMainDropdown desktopDropOnHover">
                                                        <ul class="list-unstyled mb-0 hdDropdownList">
                                                            <li><a class="dropdown-item"
                                                                    href="portfolioSingle1.html">Portfolio Single 1</a>
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="portfolioSingle2.html">Portfolio Single 2</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown ddohOpener">
                                        <a class="nav-link dropdown-toggle" href="javascript:void(0);"
                                            id="newsDropdown" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">News</a>
                                        <!-- dropdown-menu / hdMainDropdown / desktopDropOnHover -->
                                        <div class="dropdown-menu hdMainDropdown desktopDropOnHover">
                                            <ul class="list-unstyled mb-0 hdDropdownList">
                                                <li><a class="dropdown-item" href="blogClassic.html">News Classic</a>
                                                </li>
                                                <li><a class="dropdown-item" href="blogMasonry.html">News Masonry</a>
                                                </li>
                                                <li><a class="dropdown-item" href="blogGrid.html">News Grid</a></li>
                                                <li><a class="dropdown-item" href="blogSinglePost.html">News Single
                                                        Post</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown ddohOpener">
                                        <a class="nav-link dropdown-toggle" href="javascript:void(0);"
                                            id="shopDropdown" role="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">Shop</a>
                                        <!-- dropdown-menu / hdMainDropdown / desktopDropOnHover -->
                                        <div class="dropdown-menu hdMainDropdown desktopDropOnHover">
                                            <ul class="list-unstyled mb-0 hdDropdownList">
                                                <li><a class="dropdown-item" href="shop.html">Shop</a></li>
                                                <li><a class="dropdown-item" href="singleProduct.html">Single
                                                        Product</a></li>
                                                <li><a class="dropdown-item" href="cart.html">Cart</a></li>
                                                <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="hdActionsWrap flex-shrink-0 d-flex justify-content-end align-items-center">
                                <a href="tel:6507329369" class="btnHdLink fontAlter fwMedium d-none d-xl-inline">
                                    <i class="icomoon-whatsapp icn"><span class="sr-only">icon</span></i>
                                    650-732-9369
                                </a>
                                <ul
                                    class="list-unstyled d-flex align-items-center userActionsList mb-0 ml-xl-3 ml-xxl-7">
                                    <li>
                                        <a href="myAccount.html" class="ncCartBtn">
                                            <i class="lnr lnr-user"><span class="sr-only">icon</span></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="cart.html" class="ncCartBtn">
                                            <i class="lnr lnr-cart"><span class="sr-only">icon</span></i>
                                        </a>
                                    </li>
                                    <li>
                                        <form class="navSearchForm">
                                            <a class="navbarSearchOpener" data-toggle="collapse"
                                                href="#navbarSearchCollapse" role="button" aria-expanded="false"
                                                aria-controls="navbarSearchCollapse">
                                                <i class="lnr lnr-magnifier"><span class="sr-only">icon</span></i>
                                            </a>
                                            <div class="collapse navbarSearchCollapse position-fixed text-white"
                                                id="navbarSearchCollapse">
                                                <div class="d-flex w-100 h-100 align-items-center">
                                                    <div class="align w-100 py-4">
                                                        <div class="container d-block">
                                                            <div class="row">
                                                                <div class="col-12 col-md-10 offset-md-1">
                                                                    <p>Search your query here&hellip;</p>
                                                                    <div class="input-group">
                                                                        <input class="form-control" type="search"
                                                                            placeholder="Search" aria-label="Search">
                                                                        <div class="input-group-append">
                                                                            <button class="btn btnThemeAlt btnNoOver"
                                                                                type="submit">
                                                                                <i class="lnr lnr-magnifier"><span
                                                                                        class="sr-only">search</span></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="navbarSearchClose position-fixed" data-toggle="collapse"
                                                    href="#navbarSearchCollapse" role="button" aria-expanded="false"
                                                    aria-controls="navbarSearchCollapse">
                                                    <i class="lnr lnr-cross"><span class="sr-only">icon</span></i>
                                                </a>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                                <button class="navbar-toggler pgNaveOpener border-0 ml-3 position-relative"
                                    type="button" data-toggle="collapse" data-target="#pageMainNavCollapse"
                                    aria-controls="pageMainNavCollapse" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <a href="bookingSystem.html"
                                    class="btn btnThemeAlt border-0 p-0 ml-lg-3 ml-xxl-6 btnHd"
                                    data-hover="Book Appointment">
                                    <span class="d-block btnText">Book Appointment</span>
                                </a>
                            </div>
                        </nav>
                    </div>
                </header>
            </div>
        </div>
        <main>
            <!-- introBlock / ibsSlider -->
            <div class="introBlock ibsSlider">
                <div>
                    <!-- ibsColumn -->
                    <article class="ibsColumn d-flex w-100 position-relative text-white fontAlter">
                        <div class="alignHolder w-100 d-flex align-items-center">
                            <div class="align w-100 pt-8 pb-20 pt-md-12 pb-md-29 px-sm-20 px-xlwd-0">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-md-9 col-lg-7">
                                            <h1 class="text-white font-weight-bold h1Large mb-4">
                                                <strong class="d-block text-uppercase hTitle mb-3 mb-md-5">Care your
                                                    car</strong>
                                                <span class="d-block">It’s time to Come Clean your Car</span>
                                            </h1>
                                            <p>Professional Car Wash Center to help you to get clean vehicle!</p>
                                            <a href="servicesSingle.html"
                                                class="btn btnThemeAlt position-relative border-0 p-0 mt-3 mt-md-6 btnMinMedium"
                                                data-hover="Discover More">
                                                <span class="d-block btnText">Discover More</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="bgCover ibsBgWrap w-100 h-100 position-absolute"
                            style="background-image: url(https://via.placeholder.com/1920x840);"></span>
                    </article>
                </div>
                <div>
                    <!-- ibsColumn -->
                    <article class="ibsColumn d-flex w-100 position-relative text-white fontAlter">
                        <div class="alignHolder w-100 d-flex align-items-center">
                            <div class="align w-100 pt-8 pb-20 pt-md-12 pb-md-29 px-sm-20 px-xlwd-0">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-md-9 col-lg-7">
                                            <h1 class="text-white font-weight-bold h1Large mb-4">
                                                <strong class="d-block text-uppercase hTitle mb-3 mb-md-5">Quick And
                                                    Easy</strong>
                                                <span class="d-block">Keep your Car Clean Always</span>
                                            </h1>
                                            <p>We are dedicated to provide best quality services!</p>
                                            <a href="servicesSingle.html"
                                                class="btn btnThemeAlt position-relative border-0 p-0 mt-3 mt-md-6 btnMinMedium"
                                                data-hover="Discover More">
                                                <span class="d-block btnText">Discover More</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="bgCover ibsBgWrap w-100 h-100 position-absolute"
                            style="background-image: url(https://via.placeholder.com/1920x840);"></span>
                    </article>
                </div>
                <div>
                    <!-- ibsColumn -->
                    <article class="ibsColumn d-flex w-100 position-relative text-white fontAlter">
                        <div class="alignHolder w-100 d-flex align-items-center">
                            <div class="align w-100 pt-8 pb-20 pt-md-12 pb-md-29 px-sm-20 px-xlwd-0">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-md-9 col-lg-7">
                                            <h1 class="text-white font-weight-bold h1Large mb-4">
                                                <strong class="d-block text-uppercase hTitle mb-3 mb-md-5">Professional
                                                    Auto Care</strong>
                                                <span class="d-block">Save your car’s Original Finish</span>
                                            </h1>
                                            <p>Making you Nature and Faster Shine Car wash services!</p>
                                            <a href="servicesSingle.html"
                                                class="btn btnThemeAlt position-relative border-0 p-0 mt-3 mt-md-6 btnMinMedium"
                                                data-hover="Discover More">
                                                <span class="d-block btnText">Discover More</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="bgCover ibsBgWrap w-100 h-100 position-absolute"
                            style="background-image: url(https://via.placeholder.com/1920x840);"></span>
                    </article>
                </div>
            </div>
            <!-- bannerAsideBlock -->
            <aside class="bannerAsideBlock text-center fontAlter text-white pt-7 pb-7 pt-lg-12 pb-lg-12">
                <div class="container">
                    <div class="babColumnsWrap position-relative text-left mb-md-4 mt-n20 mt-lg-n30">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-xl-3">
                                <article
                                    class="bg-white rounded babFeatureColumn pr-5 pl-5 pt-6 pb-5 pr-xl-7 pl-xl-8 pt-xl-8 pb-xl-7 mb-6">
                                    <span class="icnWrap d-flex align-item-center mb-5">
                                        <i class="icomoon-spray"></i>
                                    </span>
                                    <h2 class="mb-0 position-relative pb-3 pb-xl-5">
                                        <a href="services.html">Car wash 100% without detergents</a>
                                    </h2>
                                </article>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-3">
                                <article
                                    class="bg-white rounded babFeatureColumn pr-5 pl-5 pt-6 pb-5 pr-xl-7 pl-xl-8 pt-xl-8 pb-xl-7 mb-6">
                                    <span class="icnWrap d-flex align-item-center mb-5">
                                        <i class="icomoon-car-wash-3"></i>
                                    </span>
                                    <h2 class="mb-0 position-relative pb-3 pb-xl-5">
                                        <a href="services.html">Rain/Snow protection programs</a>
                                    </h2>
                                </article>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-3">
                                <article
                                    class="bg-white rounded babFeatureColumn pr-5 pl-5 pt-6 pb-5 pr-xl-7 pl-xl-8 pt-xl-8 pb-xl-7 mb-6">
                                    <span class="icnWrap d-flex align-item-center mb-5">
                                        <i class="icomoon-vacuum-cleaner"></i>
                                    </span>
                                    <h2 class="mb-0 position-relative pb-3 pb-xl-5">
                                        <a href="services.html">Efficient modern wash machines</a>
                                    </h2>
                                </article>
                            </div>
                            <div class="col-12 col-sm-6 col-xl-3">
                                <article
                                    class="bg-white rounded babFeatureColumn pr-5 pl-5 pt-6 pb-5 pr-xl-7 pl-xl-8 pt-xl-8 pb-xl-7 mb-6">
                                    <span class="icnWrap d-flex align-item-center mb-5">
                                        <i class="icomoon-car"></i>
                                    </span>
                                    <h2 class="mb-0 position-relative pb-3 pb-xl-5">
                                        <a href="services.html">Online Appointment Booking system</a>
                                    </h2>
                                </article>
                            </div>
                        </div>
                    </div>
                    <p><strong class="fwMedium">Offering quick and efficient service to keep your car clean <span
                                class="d-block mt-4 mt-lg-0 d-lg-inline"><a href="tel:607329369"
                                    class="btnCalto d-inline-block overflow-hidden position-relative align-middle text-white ml-lg-2">Call
                                    for booking: <span class="bctLink">650-732-9369</span><span
                                        class="bg w-100 h-100 position-absolute"></span></a></span></strong></p>
                </div>
            </aside>
            <!-- aboutBlock -->
            <article class="aboutBlock pt-13 pb-7 pt-md-15 pb-md-13 pt-lg-22 pb-lg-15 pt-xl-22 pb-xl-23">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6 order-lg-2">
                            <div
                                class="imgHolder imgHolderv1 position-relative mx-auto mb-13 mb-sm-15 mb-lg-0 mx-lg-0">
                                <img src="https://via.placeholder.com/620x500" class="w-100 img-fluid"
                                    alt="image description">
                                <div
                                    class="descrTag descrTagv1 position-absolute d-inline-flex align-items-center bg-white fontAlter">
                                    <i class="lnr lnr-flag icn mr-2"><span class="sr-only">icon</span></i>
                                    <strong class="d-block fwMedium">25 years of <br>quality service</strong>
                                </div>
                                <span class="bgPattern bgPatternv1 position-absolute">
                                    <img src="src/bgPattern01.png" class="img-fluid" alt="pattern">
                                </span>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 d-flex align-items-lg-center order-lg-1">
                            <div class="align pr-lg-10 pr-xl-15">
                                <header class="headingHead mb-5">
                                    <h2>
                                        <strong class="d-block text-uppercase hTitle fwMedium mb-4">Who We Are</strong>
                                        <span class="d-block">Professional Auto washing and detailing services</span>
                                    </h2>
                                </header>
                                <p>Over the past 6 years we cleaned over 34,000 cars, saved over 8.9 million liters of
                                    water from being used in car washing and employed 50 youth. Our legacy is in the
                                    youth that gained work and life skills, grew their confidence and have moved on to
                                    bigger.</p>
                                <span class="d-block">
                                    <a href="javascript:void(0);"
                                        class="btnRefLink fontAlter fwMedium d-inline-flex align-items-center mt-4 transition transitClr"><i
                                            class="icomoon-document icn mr-2"><span
                                                class="sr-only">file</span></i>Download Carwash_Pricing_List</a>
                                </span>
                                <a href="about.html"
                                    class="btn btnThemeAlt position-relative border-0 p-0 mt-3 mt-md-7 btnMinMedium"
                                    data-hover="About More">
                                    <span class="d-block btnText">About More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <!-- servicesBlock -->
            <section
                class="servicesBlock bg-light2 pt-7 pb-7 py-md-12 pb-xl-12 pt-lgwd-15 pb-lgwd-14 pb-xl-15 pt-xl-22 pb-xl-21">
                <div class="container">
                    <header class="headingBtnHead mb-6 mb-md-11 text-center text-sm-left">
                        <div class="row align-items-center">
                            <div class="col-12 col-sm-7 col-xl-6">
                                <h2 class="fwSemi mb-5 mb-sm-0">We’re dedicated to providing best quality service</h2>
                            </div>
                            <div class="col-12 col-sm-5 col-xl-6 text-sm-right">
                                <a href="services.html"
                                    class="btn btnThemeAlt position-relative border-0 p-0 btnMinLarge"
                                    data-hover="Explore Services">
                                    <span class="d-block btnText">Explore Services</span>
                                </a>
                            </div>
                        </div>
                    </header>
                    <div class="row d-block mt-n6">
                        <!-- sbSlider -->
                        <div class="sbSlider mx-auto mx-md-0">
                            <div>
                                <div class="col-12">
                                    <!-- esColumn -->
                                    <div class="esColumn position-relative rounded d-block mb-6 mt-10">
                                        <div class="imgHolder position-relative rounded overflow-hidden">
                                            <img src="https://via.placeholder.com/405x365"
                                                class="img-fluid rounded w-100" alt="image description">
                                        </div>
                                        <div class="esCaption position-absolute px-4 px-xl-8 py-14">
                                            <span
                                                class="icnWrap position-absolute rounded-circle d-flex align-items-center justify-content-center shadow">
                                                <i class="icomoon-2371544"><span class="sr-only">icon</span></i>
                                            </span>
                                            <h3 class="h3Small mb-1"><a href="servicesSingle.html">Express
                                                    Exterior</a></h3>
                                            <div class="onHover descriptWrap">
                                                <p>Keep your car like Showroom Condition</p>
                                                <ul class="list-unstyled pl-0 mb-0 mt-5 pcFeaturesList pcfAlt">
                                                    <li>Seats Washing</li>
                                                    <li>Vacum Cleaning</li>
                                                    <li>Spot-free Thermal dry</li>
                                                    <li>Rain shield</li>
                                                    <li>Triple Foam</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="col-12">
                                    <!-- esColumn -->
                                    <div class="esColumn position-relative rounded d-block mb-6 mt-10">
                                        <div class="imgHolder position-relative rounded overflow-hidden">
                                            <img src="https://via.placeholder.com/405x365"
                                                class="img-fluid rounded w-100" alt="image description">
                                        </div>
                                        <div class="esCaption position-absolute px-4 px-xl-8 py-14">
                                            <span
                                                class="icnWrap position-absolute rounded-circle d-flex align-items-center justify-content-center shadow">
                                                <i class="icomoon-air-blower"><span class="sr-only">icon</span></i>
                                            </span>
                                            <h3 class="h3Small mb-1"><a href="servicesSingle.html">Auto Detailing</a>
                                            </h3>
                                            <div class="onHover descriptWrap">
                                                <p>Keep your car like Showroom Condition</p>
                                                <ul class="list-unstyled pl-0 mb-0 mt-5 pcFeaturesList pcfAlt">
                                                    <li>Seats Washing</li>
                                                    <li>Vacum Cleaning</li>
                                                    <li>Spot-free Thermal dry</li>
                                                    <li>Rain shield</li>
                                                    <li>Triple Foam</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="col-12">
                                    <!-- esColumn -->
                                    <div class="esColumn position-relative rounded d-block mb-6 mt-10">
                                        <div class="imgHolder position-relative rounded overflow-hidden">
                                            <img src="https://via.placeholder.com/405x365"
                                                class="img-fluid rounded w-100" alt="image description">
                                        </div>
                                        <div class="esCaption position-absolute px-4 px-xl-8 py-14">
                                            <span
                                                class="icnWrap position-absolute rounded-circle d-flex align-items-center justify-content-center shadow">
                                                <i class="icomoon-car-wash-1"><span class="sr-only">icon</span></i>
                                            </span>
                                            <h3 class="h3Small mb-1"><a href="servicesSingle.html">Full Service
                                                    Wash</a></h3>
                                            <div class="onHover descriptWrap">
                                                <p>Keep your car like Showroom Condition</p>
                                                <ul class="list-unstyled pl-0 mb-0 mt-5 pcFeaturesList pcfAlt">
                                                    <li>Seats Washing</li>
                                                    <li>Vacum Cleaning</li>
                                                    <li>Spot-free Thermal dry</li>
                                                    <li>Rain shield</li>
                                                    <li>Triple Foam</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="col-12">
                                    <!-- esColumn -->
                                    <div class="esColumn position-relative rounded d-block mb-6 mt-10">
                                        <div class="imgHolder position-relative rounded overflow-hidden">
                                            <img src="https://via.placeholder.com/405x365"
                                                class="img-fluid rounded w-100" alt="image description">
                                        </div>
                                        <div class="esCaption position-absolute px-4 px-xl-8 py-14">
                                            <span
                                                class="icnWrap position-absolute rounded-circle d-flex align-items-center justify-content-center shadow">
                                                <i class="icomoon-air-blower"><span class="sr-only">icon</span></i>
                                            </span>
                                            <h3 class="h3Small mb-1"><a href="servicesSingle.html">Auto Detailing</a>
                                            </h3>
                                            <div class="onHover descriptWrap">
                                                <p>Keep your car like Showroom Condition</p>
                                                <ul class="list-unstyled pl-0 mb-0 mt-5 pcFeaturesList pcfAlt">
                                                    <li>Seats Washing</li>
                                                    <li>Vacum Cleaning</li>
                                                    <li>Spot-free Thermal dry</li>
                                                    <li>Rain shield</li>
                                                    <li>Triple Foam</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- counterAsideBlock -->
            <aside
                class="counterAsideBlock position-relative pt-6 pb-1 pt-md-9 pb-md-3 pt-lg-15 pb-lg-10 pt-xl-20 pb-xl-14"
                style="background-image: url(images/bgPattern03.png);">
                <div class="container">
                    <ul
                        class="list-unstyled cabCounterList d-flex flex-wrap justify-content-around mb-0 mx-auto mx-md-0">
                        <li>
                            <h3 class="cclColumnWrap fwSemi text-uppercase d-flex mb-0 align-items-center">
                                <span
                                    class="font-weight-normal flex-shrink-0 textCount mr-1 mr-sm-3 dataCount">25</span>
                                <span class="text-white subtitle">Years of <br>Experience</span>
                            </h3>
                        </li>
                        <li>
                            <h3 class="cclColumnWrap fwSemi text-uppercase d-flex mb-0 align-items-center">
                                <span class="font-weight-normal flex-shrink-0 textCount mr-1 mr-sm-3"><span
                                        class="dataCount">38</span>K</span>
                                <span class="text-white subtitle">Total Cars <br>Washed</span>
                            </h3>
                        </li>
                        <li>
                            <h3 class="cclColumnWrap fwSemi text-uppercase d-flex mb-0 align-items-center">
                                <span
                                    class="font-weight-normal flex-shrink-0 textCount mr-1 mr-sm-3 dataCount">17</span>
                                <span class="text-white subtitle">Awards &amp; <br>Recongnitions</span>
                            </h3>
                        </li>
                        <li>
                            <h3 class="cclColumnWrap fwSemi text-uppercase d-flex mb-0 align-items-center">
                                <span class="font-weight-normal flex-shrink-0 textCount mr-1 mr-sm-3"><span
                                        class="dataCount">14</span>K</span>
                                <span class="text-white subtitle">Trusted <br>Clients</span>
                            </h3>
                        </li>
                    </ul>
                </div>
            </aside>
            <!-- experienceBlock -->
            <article
                class="experienceBlock position-relative py-8 pt-md-10 pb-md-60 pt-lg-14 pb-lg-56 pt-xl-21 pb-xl-23 mb-md-12 mb-xlwd-24">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-9 offset-md-3 col-lg-6 offset-lg-6">
                            <div class="extraWrap pl-lg-13">
                                <header class="fontAlter mb-6">
                                    <h2 class="text-white mb-6">25 Years of Experience in Carwash Industry</h2>
                                    <p>Carwash made its debut in America in 1998, bringing with us a 40 year legacy in
                                        the convenience-store and car wash.</p>
                                </header>
                                <ul class="list-unstyled servicesList">
                                    <li>Platinum exterior wash</li>
                                    <li>Door panels / seats wiped</li>
                                    <li>Hard surfaces cleaned &amp; disinfected</li>
                                    <li>Rubber mats washed</li>
                                </ul>
                                <a href="services.html"
                                    class="btn btnThemeAlt position-relative border-0 p-0 mt-5 mt-md-8 btn btnMinMedium"
                                    data-hover="Explore More">
                                    <span class="d-block btnText">Explore More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="imgHolderCap position-absolute d-none d-md-block inaccessible">
                        <img src="https://via.placeholder.com/1115x915" class="img-fluid" alt="image description">
                        <div class="imhcPinWrap imhcPinWrap1 position-absolute">
                            <a href="javascript:void(0);"
                                class="imhcPinOpener fontAlter text-white font-weight-light d-flex align-items-center justify-content-center rounded-circle position-relative">+</a>
                            <div
                                class="imhcCaption bg-white rounded shadow position-absolute text-center px-1 py-3 transition transitOpVis">
                                <strong class="d-block h h3 fwMedium mb-0">Complete Car Wash Services </strong>
                            </div>
                        </div>
                        <div class="imhcPinWrap imhcPinWrap2 position-absolute active">
                            <a href="javascript:void(0);"
                                class="imhcPinOpener fontAlter text-white font-weight-light d-flex align-items-center justify-content-center rounded-circle position-relative">+</a>
                            <div
                                class="imhcCaption bg-white rounded shadow position-absolute text-center px-1 py-3 transition transitOpVis">
                                <strong class="d-block h h3 fwMedium mb-0">Complete Car Wash Services </strong>
                            </div>
                        </div>
                        <div class="imhcPinWrap imhcPinWrap3 position-absolute">
                            <a href="javascript:void(0);"
                                class="imhcPinOpener fontAlter text-white font-weight-light d-flex align-items-center justify-content-center rounded-circle position-relative">+</a>
                            <div
                                class="imhcCaption bg-white rounded shadow position-absolute text-center px-1 py-3 transition transitOpVis">
                                <strong class="d-block h h3 fwMedium mb-0">Complete Car Wash Services </strong>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- expWatermark -->
                <span class="expWatermark position-absolute overflow-hidden w-100 h-100 inaccessible">
                    <i class="icomoon-3345656 icn position-absolute"><span class="sr-only">icon</span></i>
                </span>
            </article>
            <!-- plansBlock -->
            <section class="plansBlock py-7 py-md-10 pt-xl-18 pb-xl-16">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 offset-md-1 col-xl-6 offset-xl-3">
                            <header class="headingHead fzMedium text-center mb-8 mb-md-12">
                                <h2>
                                    <strong class="d-block text-uppercase hTitle fwMedium mb-4">Pricing Plans</strong>
                                    <span class="d-block fwSemi">Choose your Package</span>
                                </h2>
                                <p>Unlimited Washes is for you! Wash whenever you want and enjoy the ease of auto
                                    monthly billing and you can cancel any time.</p>
                            </header>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-xl-3 d-flex">
                            <!-- priceColumn -->
                            <article
                                class="w-100 mx-auto mb-6 position-relative bg-white shadow rounded text-center priceColumn pt-9 pb-30 px-6">
                                <h3 class="fwMedium mb-6">Express Wash</h3>
                                <h4>
                                    <span class="d-block fwMedium"><sup class="supBefore">$</sup>24<sup
                                            class="supAfter">99</sup></span>
                                    <span class="d-block subtitle fwmMedium pt-3">Duration: 15 min</span>
                                </h4>
                                <hr class="my-6">
                                <ul class="list-unstyled pcFeaturesList text-left mb-0">
                                    <li>Soft-cloth Wash</li>
                                    <li>Spot-free Rinse</li>
                                    <li>Spot-free Thermal dry</li>
                                </ul>
                                <a href="pricingPackage.html"
                                    class="btn btnThemeAlt position-absolute border-0 p-0 mx-auto"
                                    data-hover="Select">
                                    <span class="d-block btnText">Choose Plan</span>
                                </a>
                            </article>
                        </div>
                        <div class="col-12 col-md-6 col-xl-3 d-flex">
                            <!-- priceColumn -->
                            <article
                                class="w-100 mx-auto mb-6 position-relative bg-white shadow rounded text-center priceColumn pt-9 pb-30 px-6">
                                <h3 class="fwMedium mb-6">Supreme Wash</h3>
                                <h4>
                                    <span class="d-block fwMedium"><sup class="supBefore">$</sup>32<sup
                                            class="supAfter">99</sup></span>
                                    <span class="d-block subtitle fwmMedium pt-3">Duration: 30 min</span>
                                </h4>
                                <hr class="my-6">
                                <ul class="list-unstyled pcFeaturesList text-left mb-0">
                                    <li>Soft-cloth Wash</li>
                                    <li>Spot-free Rinse</li>
                                    <li>Spot-free Thermal dry</li>
                                    <li>Rain shield</li>
                                    <li>Triple Foam</li>
                                </ul>
                                <a href="pricingPackage.html"
                                    class="btn btnThemeAlt position-absolute border-0 p-0 mx-auto"
                                    data-hover="Select">
                                    <span class="d-block btnText">Choose Plan</span>
                                </a>
                            </article>
                        </div>
                        <div class="col-12 col-md-6 col-xl-3 d-flex">
                            <!-- priceColumn -->
                            <article
                                class="w-100 mx-auto mb-6 position-relative bg-white shadow rounded text-center priceColumn pt-9 pb-30 px-6"
                                data-featured-tag="Best Plan">
                                <h3 class="fwMedium mb-6">Ultra Fullservice</h3>
                                <h4>
                                    <span class="d-block fwMedium"><sup class="supBefore">$</sup>45<sup
                                            class="supAfter">99</sup></span>
                                    <span class="d-block subtitle fwmMedium pt-3">Duration: 45 min</span>
                                </h4>
                                <hr class="my-6">
                                <ul class="list-unstyled pcFeaturesList text-left mb-0">
                                    <li>Soft-cloth Wash</li>
                                    <li>Spot-free Rinse</li>
                                    <li>Spot-free Thermal dry</li>
                                    <li>Rain shield</li>
                                    <li>Triple Foam</li>
                                    <li>Tire Dressing</li>
                                </ul>
                                <a href="pricingPackage.html"
                                    class="btn btnThemeAlt position-absolute border-0 p-0 mx-auto"
                                    data-hover="Select">
                                    <span class="d-block btnText">Choose Plan</span>
                                </a>
                            </article>
                        </div>
                        <div class="col-12 col-md-6 col-xl-3 d-flex">
                            <!-- priceColumn -->
                            <article
                                class="w-100 mx-auto mb-3 mb-md-6 position-relative bg-white shadow rounded text-center priceColumn pt-9 pb-30 px-6">
                                <h3 class="fwMedium mb-6">Ultimate Shine</h3>
                                <h4>
                                    <span class="d-block fwMedium"><sup class="supBefore">$</sup>59<sup
                                            class="supAfter">99</sup></span>
                                    <span class="d-block subtitle fwmMedium pt-3">Duration: 70 min</span>
                                </h4>
                                <hr class="my-6">
                                <ul class="list-unstyled pcFeaturesList text-left mb-0">
                                    <li>Soft-cloth Wash</li>
                                    <li>Spot-free Rinse</li>
                                    <li>Spot-free Thermal dry</li>
                                    <li>Rain shield</li>
                                    <li>Triple Foam</li>
                                    <li>Tire Dressing</li>
                                    <li>Vacuum &amp; Wipe Console</li>
                                </ul>
                                <a href="pricingPackage.html"
                                    class="btn btnThemeAlt position-absolute border-0 p-0 mx-auto"
                                    data-hover="Select">
                                    <span class="d-block btnText">Choose Plan</span>
                                </a>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
            <!-- callAsideBlock -->
            <aside class="callAsideBlock">
                <div class="container">
                    <div
                        class="cabHolder position-relative rounded shadow fontAlter mx-xlwd-n10 px-5 px-sm-10 py-9 py-lg-13 overflow-hidden">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-8 position-static">
                                <div class="extraWrap pl-sm-15 pl-lg-21">
                                    <i class="icomoon-information1 icn d-none d-sm-block"><span
                                            class="sr-only">icon</span></i>
                                    <h3 class="text-white mb-4 fwMedium">Do you need help with your vehicle?</h3>
                                    <p class="mb-lg-0">Send us a message, or phone <a href="tel:1800234567">1-800 234
                                            567</a> between 09:00 and 18:00 Mon -Sat.</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="extraWrap pl-sm-15 pl-lg-0 text-lg-right">
                                    <a href="javascript:void(0);"
                                        class="btn btnThemeWhite position-relative border-0 p-0 btnMinXLarge"
                                        data-hover="Request a Call Back">
                                        <span class="d-block btnText">Request a Call Back</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <span class="bgPattern bgPatternv2 inaccessible position-absolute">
                            <img src="src/bgPattern04.png" class="img-fluid" alt="image description">
                        </span>
                        <span class="bgPattern bgPatternv3 inaccessible position-absolute">
                            <img src="src/bgPattern05.png" class="img-fluid" alt="image description">
                        </span>
                    </div>
                </div>
            </aside>
            <!-- processBlock -->
            <section
                class="processBlock bg-light2 text-center mt-n21 pt-30 pt-md-35 pt-lg-38 pt-xl-43 pb-8 pb-md-15 pb-xl-22">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 offset-md-1 col-xl-6 offset-xl-3">
                            <header class="headingHead fzMedium mb-12">
                                <h2>
                                    <strong class="d-block text-uppercase hTitle fwMedium mb-4">How It Works</strong>
                                    <span class="d-block fwSemi">Our Work Process</span>
                                </h2>
                                <p>Book online. We’ll provide you with a trusted, excellent services most accurate and
                                    fair-price service Estimate.</p>
                            </header>
                        </div>
                    </div>
                    <div class="row pcColumnsWrap mx-n15 mx-md-n3 mx-xl-n16">
                        <div class="col-12 col-md-4 col px-15 px-md-3 px-xl-16">
                            <article class="processColumn mb-8 position-relative">
                                <span
                                    class="pcCountSpan position-relative mx-auto rounded-circle d-flex align-items-center justify-content-center font-weight-light mb-5"></span>
                                <h3 class="fwMedium h3Medium mb-4">Make an Appointment</h3>
                                <p>Book online &amp; leave your car with us. We’ll provide you with a trusted, excellent
                                    services.</p>
                                <div class="imgHolder d-none d-md-block position-absolute mt-5">
                                    <img src="images/arrow1.png" alt="image description" class="img-fluid">
                                </div>
                            </article>
                        </div>
                        <div class="col-12 col-md-4 col px-15 px-md-3 px-xl-16">
                            <article class="processColumn mb-8 position-relative">
                                <span
                                    class="pcCountSpan position-relative mx-auto rounded-circle d-flex align-items-center justify-content-center font-weight-light mb-5"></span>
                                <h3 class="fwMedium h3Medium mb-4">Get Amzing services</h3>
                                <p>Every cleaner is friendly and reliable. They’ve been background checked & rated
                                    5-stars</p>
                                <div class="imgHolder d-none d-md-block position-absolute mt-5">
                                    <img src="images/arrow2.png" alt="image description" class="img-fluid">
                                </div>
                            </article>
                        </div>
                        <div class="col-12 col-md-4 col px-15 px-md-3 px-xl-16">
                            <article class="processColumn mb-8 position-relative">
                                <span
                                    class="pcCountSpan position-relative mx-auto rounded-circle d-flex align-items-center justify-content-center font-weight-light mb-5"></span>
                                <h3 class="fwMedium h3Medium mb-4">Pay Online &amp; Get your car</h3>
                                <p>Pay online. We’ll provide you with a trusted, excellent services with door delivery
                                    option.</p>
                            </article>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="bookingSystem.html"
                            class="btn btnTheme position-relative border-0 p-0 btnMinXLarge fwMedium"
                            data-hover="Book Appointment">
                            <span class="d-block btnText">Book Appointment</span>
                        </a>
                    </div>
                </div>
            </section>
            <!-- photoGalleryBlock -->
            <section class="photoGalleryBlock position-relative py-7 py-md-9 py-xl-16">
                <div class="container">
                    <div class="row align-items-center mb-14 mb-md-18 mb-lg-12 mb-xl-14">
                        <div class="col-12 col-md-5 col-lg-4">
                            <h2 class="fwSemi mb-sm-5 mb-md-0 text-white">See Gallery to see our best works</h2>
                        </div>
                        <div class="col-12 col-md-7 col-lg-8">
                            <ul id="project-terms"
                                class="filterList owl-filter-bar list-unstyled fwSemi d-flex p-0 m-0 justify-content-md-end flex-wrap">
                                <li class="active"><a href="javascript:void(0);">All</a></li>
                                <li><a href="javascript:void(0);" data-filter=".washing">Washing</a></li>
                                <li><a href="javascript:void(0);" data-filter=".autoDetail">Auto Detail</a></li>
                                <li><a href="javascript:void(0);" data-filter=".exterior">Exterior</a></li>
                                <li><a href="javascript:void(0);" data-filter=".interior">Interior</a></li>
                                <li><a href="javascript:void(0);" data-filter=".repair">Repair</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- galleryPhotoSlider -->
                    <div class="galleryPhotoSlider mx-n3 mx-sm-n2">
                        <div class="px-3 px-sm-2">
                            <!-- gPhoColumn -->
                            <article class="gPhoColumn position-relative overflow-hidden">
                                <img src="https://via.placeholder.com/620x460" class="img-fluid w-100"
                                    alt="image description">
                                <h5 class="h5 text-white">
                                    Complete Detail Wash
                                    <strong
                                        class="pgCategory font-weight-normal text-uppercase d-block">Washing</strong>
                                </h5>
                                <a href="portfolioSingle1.html" class="d-inline-block pgLink"><i
                                        class="rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center pgLinkGo"><span
                                            class="sr-only">icon</span></i></a>
                            </article>
                        </div>
                        <div class="px-3 px-sm-2">
                            <!-- gPhoColumn -->
                            <article class="gPhoColumn position-relative overflow-hidden">
                                <img src="https://via.placeholder.com/620x460" class="img-fluid w-100"
                                    alt="image description">
                                <h5 class="h5 text-white">
                                    Dashboard Cleaning
                                    <strong
                                        class="pgCategory font-weight-normal text-uppercase d-block">Interior</strong>
                                </h5>
                                <a href="portfolioSingle1.html" class="d-inline-block pgLink"><i
                                        class="rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center pgLinkGo"><span
                                            class="sr-only">icon</span></i></a>
                            </article>
                        </div>
                        <div class="px-3 px-sm-2">
                            <!-- gPhoColumn -->
                            <article class="gPhoColumn position-relative overflow-hidden">
                                <img src="https://via.placeholder.com/620x460" class="img-fluid w-100"
                                    alt="image description">
                                <h5 class="h5 text-white">
                                    Machine Washing
                                    <strong class="pgCategory font-weight-normal text-uppercase d-block">Auto
                                        Detail</strong>
                                </h5>
                                <a href="portfolioSingle1.html" class="d-inline-block pgLink"><i
                                        class="rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center pgLinkGo"><span
                                            class="sr-only">icon</span></i></a>
                            </article>
                        </div>
                        <div class="px-3 px-sm-2">
                            <!-- gPhoColumn -->
                            <article class="gPhoColumn position-relative overflow-hidden">
                                <img src="https://via.placeholder.com/620x460" class="img-fluid w-100"
                                    alt="image description">
                                <h5 class="h5 text-white">
                                    RMW Mini Cooper
                                    <strong class="pgCategory font-weight-normal text-uppercase d-block">Washing,
                                        Interior</strong>
                                </h5>
                                <a href="portfolioSingle1.html" class="d-inline-block pgLink"><i
                                        class="rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center pgLinkGo"><span
                                            class="sr-only">icon</span></i></a>
                            </article>
                        </div>
                        <div class="px-3 px-sm-2">
                            <!-- gPhoColumn -->
                            <article class="gPhoColumn position-relative overflow-hidden">
                                <img src="https://via.placeholder.com/620x460" class="img-fluid w-100"
                                    alt="image description">
                                <h5 class="h5 text-white">
                                    Complete Detail Wash
                                    <strong
                                        class="pgCategory font-weight-normal text-uppercase d-block">Washing</strong>
                                </h5>
                                <a href="portfolioSingle1.html" class="d-inline-block pgLink"><i
                                        class="rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center pgLinkGo"><span
                                            class="sr-only">icon</span></i></a>
                            </article>
                        </div>
                        <div class="px-3 px-sm-2">
                            <!-- gPhoColumn -->
                            <article class="gPhoColumn position-relative overflow-hidden">
                                <img src="https://via.placeholder.com/620x460" class="img-fluid w-100"
                                    alt="image description">
                                <h5 class="h5 text-white">
                                    Dashboard Cleaning
                                    <strong
                                        class="pgCategory font-weight-normal text-uppercase d-block">Interior</strong>
                                </h5>
                                <a href="portfolioSingle1.html" class="d-inline-block pgLink"><i
                                        class="rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center pgLinkGo"><span
                                            class="sr-only">icon</span></i></a>
                            </article>
                        </div>
                        <div class="px-3 px-sm-2">
                            <!-- gPhoColumn -->
                            <article class="gPhoColumn position-relative overflow-hidden">
                                <img src="https://via.placeholder.com/620x460" class="img-fluid w-100"
                                    alt="image description">
                                <h5 class="h5 text-white">
                                    Machine Washing
                                    <strong class="pgCategory font-weight-normal text-uppercase d-block">Auto
                                        Detail</strong>
                                </h5>
                                <a href="portfolioSingle1.html" class="d-inline-block pgLink"><i
                                        class="rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center pgLinkGo"><span
                                            class="sr-only">icon</span></i></a>
                            </article>
                        </div>
                        <div class="px-3 px-sm-2">
                            <!-- gPhoColumn -->
                            <article class="gPhoColumn position-relative overflow-hidden">
                                <img src="https://via.placeholder.com/620x460" class="img-fluid w-100"
                                    alt="image description">
                                <h5 class="h5 text-white">
                                    RMW Mini Cooper
                                    <strong class="pgCategory font-weight-normal text-uppercase d-block">Washing,
                                        Interior</strong>
                                </h5>
                                <a href="portfolioSingle1.html" class="d-inline-block pgLink"><i
                                        class="rounded-circle icomoon-arrowRight d-flex align-items-center justify-content-center pgLinkGo"><span
                                            class="sr-only">icon</span></i></a>
                            </article>
                        </div>
                    </div>
                    <!--element to hold filtered out items-->
                    <div id="projects-hidden" class="hide"></div>
                </div>
            </section>
            <!-- testimonialsBlock -->
            <article
                class="testimonialsBlock overlay position-relative pt-10 pb-5 pb-md-7 pt-lg-14 pb-lg-12 pt-xl-21 pb-xl-19">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 offset-md-1 col-xl-6 offset-xl-3">
                            <header class="headingHead fzMedium mb-8 mb-md-12 text-center px-xl-10">
                                <h2>
                                    <strong class="d-block text-uppercase hTitle fwMedium mb-4">Testimonials</strong>
                                    <span class="d-block fwSemi">What people think about our services</span>
                                </h2>
                            </header>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-10 offset-md-1 px-xl-13">
                            <!-- quotesSlider -->
                            <div class="quotesSlider">
                                <div>
                                    <!-- clientQuote -->
                                    <blockquote
                                        class="clientQuote fontCabin position-relative pt-25 pt-sm-0 pl-sm-35 pl-lg-40 pl-lgwd-50 mb-0">
                                        <q class="d-block position-relative mb-4 mb-md-6 mb-lg-7 pt-4 pl-12 pl-sm-0">I
                                            love the efficiency of my Car Wash on Sunrise Valvernasa in Mangho Qor nova.
                                            A smiling greeting, an excellent wash, and on my way—clean. The best car
                                            wash ever!</q>
                                        <cite class="d-block pl-12 pl-sm-0">
                                            <!-- profilePicWrap -->
                                            <span
                                                class="profilePicWrap position-absolute overflow-hidden rounded-circle">
                                                <img src="https://via.placeholder.com/140x140"
                                                    class="img-fluid w-100 h-100 imgFit rounded-circle"
                                                    alt="Donald Salvor || Customer - Audi">
                                            </span>
                                            <span class="eWrap d-block">
                                                <strong
                                                    class="d-block fwmMedium text-primary text-capitalize mb-1">Donald
                                                    Salvor</strong>
                                                <strong class="d-block subtitle fwmMedium fontBase">Customer -
                                                    Audi</strong>
                                            </span>
                                        </cite>
                                    </blockquote>
                                </div>
                                <div>
                                    <!-- clientQuote -->
                                    <blockquote
                                        class="clientQuote fontCabin position-relative pt-25 pt-sm-0 pl-sm-35 pl-lg-40 pl-lgwd-50 mb-0">
                                        <q class="d-block position-relative mb-4 mb-md-6 mb-lg-7 pt-4 pl-12 pl-sm-0">BNI
                                            India is India’s largest and most successful business net working
                                            organisation. We offer our members the opportunity to share ideas, contacts,
                                            and most importantly!</q>
                                        <cite class="d-block pl-12 pl-sm-0">
                                            <!-- profilePicWrap -->
                                            <span
                                                class="profilePicWrap position-absolute overflow-hidden rounded-circle">
                                                <img src="https://via.placeholder.com/140x140"
                                                    class="img-fluid w-100 h-100 imgFit rounded-circle"
                                                    alt="Kristina Castle || Medical Scientist">
                                            </span>
                                            <span class="eWrap d-block">
                                                <strong class="d-block fwmMedium text-primary text-capitalize mb-1">Dr.
                                                    Kristina Castle</strong>
                                                <strong class="d-block subtitle fwmMedium fontBase">Medical
                                                    Scientist</strong>
                                            </span>
                                        </cite>
                                    </blockquote>
                                </div>
                                <div>
                                    <!-- clientQuote -->
                                    <blockquote
                                        class="clientQuote fontCabin position-relative pt-25 pt-sm-0 pl-sm-35 pl-lg-40 pl-lgwd-50 mb-0">
                                        <q class="d-block position-relative mb-4 mb-md-6 mb-lg-7 pt-4 pl-12 pl-sm-0">BNI
                                            India is India’s largest and most successful business net working
                                            organisation. We offer our members the opportunity to share ideas, contacts,
                                            and most importantly!</q>
                                        <cite class="d-block pl-12 pl-sm-0">
                                            <!-- profilePicWrap -->
                                            <span
                                                class="profilePicWrap position-absolute overflow-hidden rounded-circle">
                                                <img src="https://via.placeholder.com/140x140"
                                                    class="img-fluid w-100 h-100 imgFit rounded-circle"
                                                    alt="Donald Salvor || Global Initiative">
                                            </span>
                                            <span class="eWrap d-block">
                                                <strong
                                                    class="d-block fwmMedium text-primary text-capitalize mb-1">Anthony
                                                    Wills</strong>
                                                <strong class="d-block subtitle fwmMedium fontBase">City
                                                    Mayor-Danya</strong>
                                            </span>
                                        </cite>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="bgCover imgBg w-100 h-100 position-absolute"
                    style="background-image: url(images/bgPattern07.jpg);"></span>
            </article>
            <!-- sponsorsAside  -->
            <aside class="sponsorsAside position-relative text-center py-6 py-md-10">
                <div class="container">
                    <!-- logosSlider -->
                    <div class="logosSlider">
                        <!-- slide -->
                        <div>
                            <!-- logoWrap -->
                            <div class="logoWrap">
                                <img src="https://via.placeholder.com/130x70" class="img-fluid" alt="stylus">
                            </div>
                        </div>
                        <!-- slide -->
                        <div>
                            <!-- logoWrap -->
                            <div class="logoWrap">
                                <img src="https://via.placeholder.com/130x70" class="img-fluid" alt="drkht">
                            </div>
                        </div>
                        <!-- slide -->
                        <div>
                            <!-- logoWrap -->
                            <div class="logoWrap">
                                <img src="https://via.placeholder.com/130x70" class="img-fluid" alt="Brook.">
                            </div>
                        </div>
                        <!-- slide -->
                        <div>
                            <!-- logoWrap -->
                            <div class="logoWrap">
                                <img src="https://via.placeholder.com/130x70" class="img-fluid" alt="its alive!">
                            </div>
                        </div>
                        <!-- slide -->
                        <div>
                            <!-- logoWrap -->
                            <div class="logoWrap">
                                <img src="https://via.placeholder.com/130x70" class="img-fluid"
                                    alt="nowhere among us">
                            </div>
                        </div>
                        <!-- slide -->
                        <div>
                            <!-- logoWrap -->
                            <div class="logoWrap">
                                <img src="https://via.placeholder.com/130x70" class="img-fluid" alt="stylus">
                            </div>
                        </div>
                        <!-- slide -->
                        <div>
                            <!-- logoWrap -->
                            <div class="logoWrap">
                                <img src="https://via.placeholder.com/130x70" class="img-fluid" alt="drkht">
                            </div>
                        </div>
                        <!-- slide -->
                        <div>
                            <!-- logoWrap -->
                            <div class="logoWrap">
                                <img src="https://via.placeholder.com/130x70" class="img-fluid" alt="Brook.">
                            </div>
                        </div>
                        <!-- slide -->
                        <div>
                            <!-- logoWrap -->
                            <div class="logoWrap">
                                <img src="https://via.placeholder.com/130x70" class="img-fluid" alt="its alive!">
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <!-- requestCallAside -->
            <aside class="requestCallAside position-relative pt-7 pt-md-9 pt-xl-16">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <header class="header mb-7">
                                <h2 class="text-white mb-4 fwSemi">Request a Call back</h2>
                                <p>We inspire clients to make their most challenging business decisions with confidence.
                                    Send us a message or Call Us.</p>
                            </header>
                            <ul class="list-unstyled mb-0 rcaTimeList mb-8">
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="icnWrap flex-shrink-0 mr-4">
                                            <i class="icn icomoon-phone-call text-white"></i>
                                        </div>
                                        <div class="decWrap">
                                            <strong class="d-block fwSemi text-white">Call for book:</strong>
                                            <strong class="d-block fwSemi text-secondary">8-800-10-500</strong>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center">
                                        <div class="icnWrap flex-shrink-0 mr-4">
                                            <i class="icn icomoon-clock text-white"></i>
                                        </div>
                                        <div class="decWrap">
                                            <strong class="d-block fwSemi text-white">Working Hours:</strong>
                                            <strong class="d-block fwSemi text-secondary">09:00-18:00
                                                (Mon-Sat)</strong>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="formWrap mb-n24">
                                <form class="requstAcallForm">
                                    <div class="form-row">
                                        <!-- form-group -->
                                        <div class="form-group col-12">
                                            <label class="fLabel fontAlter text-primary d-block">Your Service
                                                Request:</label>
                                            <div class="coolSelectWrapper">
                                                <!-- coolSelect -->
                                                <select class="coolSelect form-control" id="service">
                                                    <option value="1" disabled="">Select Service</option>
                                                    <option value="2">Express Exterior</option>
                                                    <option value="3">Oil Change</option>
                                                    <option value="4" selected="">Auto Detail Wash</option>
                                                    <option value="5">Preventative Services</option>
                                                    <option value="6">Complete Detail Wash</option>
                                                    <option value="7">Full Service Wash</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <!-- form-group -->
                                        <div class="form-group col-12">
                                            <label class="fLabel fontAlter text-primary d-block">Your Name:</label>
                                            <input type="text" class="form-control w-100">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <!-- form-group -->
                                        <div class="form-group col-12">
                                            <label class="fLabel fontAlter text-primary d-block">Phone Number:</label>
                                            <input type="number" class="form-control w-100">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <!-- form-group -->
                                        <div class="form-group col-12 mb-0">
                                            <button type="submit"
                                                class="btn btnThemeAlt text-capitalize position-relative border-0 p-0 w-100"
                                                data-hover="Send Request">
                                                <span class="d-block btnText">Send Request</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="bgCover bgImg w-100 h-100 position-absolute"
                    style="background-image: url(images/img13.jpg);"></span>
            </aside>
            <!-- cctBlock -->
            <section
                class="cctBlock position-relative pt-34 pb-7 pb-md-12 pt-md-20 pt-lg-30 pb-lg-16 pt-xl-40 pb-xl-16">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-4 col-xl-3 pt-lg-9">
                            <header class="mb-3 mb-lg-10 mb-xl-0">
                                <h2 class="fwSemi h4 mb-4">See all Carwash <br> Locations</h2>
                                <p>The convenience-store and car wash business from across seven diffrent locations.</p>
                            </header>
                        </div>
                        <div class="col-12 col-lg-8 col-xl-9">
                            <!-- arddColumnSlider -->
                            <div class="arddColumnSlider">
                                <div class="px-2">
                                    <!-- getDirColumn -->
                                    <article class="getDirColumn d-flex w-100">
                                        <div class="bg-white w-100 py-8 px-3 px-md-5 gdcHolder">
                                            <strong class="ardBadge fwSemi fwMedium fontAlter">
                                                <i class="fas fa-map-marker-alt icn mr-2"></i>Beloal Location
                                            </strong>
                                            <address class="mt-5 mb-4">250 Main Street, Newton Hall, NY 52143</address>
                                            <ul class="list-unstyled contactInfoList mb-6">
                                                <li>
                                                    <i class="fas fa-phone-alt icn position-absolute"
                                                        aria-hidden="true"><span class="sr-only">icon</span></i>
                                                    (61) 235 9595
                                                </li>
                                                <li>
                                                    <i class="far fa-clock icn position-absolute"
                                                        aria-hidden="true"><span class="sr-only">icon</span></i>
                                                    Mon-Sat: 8am-6:00pm
                                                </li>
                                            </ul>
                                            <a href="contact.html" class="btn btnLink">View Details <span
                                                    class="icn fas fa-chevron-right"></span></a>
                                        </div>
                                    </article>
                                </div>
                                <div class="px-2">
                                    <!-- getDirColumn -->
                                    <article class="getDirColumn d-flex w-100">
                                        <div class="bg-white w-100 py-8 px-3 px-md-5 gdcHolder">
                                            <strong class="ardBadge fwMedium fontAlter">
                                                <i class="fas fa-map-marker-alt icn mr-2"></i>Sascha Location
                                            </strong>
                                            <address class="mt-5 mb-4">576 South Street, Police station, NY 13245
                                            </address>
                                            <ul class="list-unstyled contactInfoList mb-6">
                                                <li>
                                                    <i class="fas fa-phone-alt icn position-absolute"
                                                        aria-hidden="true"><span class="sr-only">icon</span></i>
                                                    (61) 235 9595
                                                </li>
                                                <li>
                                                    <i class="far fa-clock icn position-absolute"
                                                        aria-hidden="true"><span class="sr-only">icon</span></i>
                                                    Mon-Sat: 8am-6:00pm
                                                </li>
                                            </ul>
                                            <a href="contact.html" class="btn btnLink">View Details <span
                                                    class="icn fas fa-chevron-right"></span></a>
                                        </div>
                                    </article>
                                </div>
                                <div class="px-2">
                                    <!-- getDirColumn -->
                                    <article class="getDirColumn d-flex w-100">
                                        <div class="bg-white w-100 py-8 px-3 px-md-5 gdcHolder">
                                            <strong class="ardBadge fwMedium fontAlter">
                                                <i class="fas fa-map-marker-alt icn mr-2"></i>Mecican Location
                                            </strong>
                                            <address class="mt-5 mb-4">65 Town hall Road, Benshall, Westhorn, NY 5623
                                            </address>
                                            <ul class="list-unstyled contactInfoList mb-6">
                                                <li>
                                                    <i class="fas fa-phone-alt icn position-absolute"
                                                        aria-hidden="true"><span class="sr-only">icon</span></i>
                                                    (61) 235 9595
                                                </li>
                                                <li>
                                                    <i class="far fa-clock icn position-absolute"
                                                        aria-hidden="true"><span class="sr-only">icon</span></i>
                                                    Mon-Sat: 8am-6:00pm
                                                </li>
                                            </ul>
                                            <a href="contact.html" class="btn btnLink">View Details <span
                                                    class="icn fas fa-chevron-right"></span></a>
                                        </div>
                                    </article>
                                </div>
                                <div class="px-2">
                                    <!-- getDirColumn -->
                                    <article class="getDirColumn d-flex w-100">
                                        <div class="bg-white w-100 py-8 px-3 px-md-5 gdcHolder">
                                            <strong class="ardBadge fwMedium fontAlter">
                                                <i class="fas fa-map-marker-alt icn mr-2"></i>Sascha Location
                                            </strong>
                                            <address class="mt-5 mb-4">576 South Street, Police station, NY 13245
                                            </address>
                                            <ul class="list-unstyled contactInfoList mb-6">
                                                <li>
                                                    <i class="fas fa-phone-alt icn position-absolute"
                                                        aria-hidden="true"><span class="sr-only">icon</span></i>
                                                    (61) 235 9595
                                                </li>
                                                <li>
                                                    <i class="far fa-clock icn position-absolute"
                                                        aria-hidden="true"><span class="sr-only">icon</span></i>
                                                    Mon-Sat: 8am-6:00pm
                                                </li>
                                            </ul>
                                            <a href="contact.html" class="btn btnLink">View Details <span
                                                    class="icn fas fa-chevron-right"></span></a>
                                        </div>
                                    </article>
                                </div>
                                <div class="px-2">
                                    <!-- getDirColumn -->
                                    <article class="getDirColumn d-flex w-100">
                                        <div class="bg-white w-100 py-8 px-3 px-md-5 gdcHolder">
                                            <strong class="ardBadge fwMedium fontAlter">
                                                <i class="fas fa-map-marker-alt icn mr-2"></i>Beloal Location
                                            </strong>
                                            <address class="mt-5 mb-4">250 Main Street, Newton Hall, NY 52143</address>
                                            <ul class="list-unstyled contactInfoList mb-6">
                                                <li>
                                                    <i class="fas fa-phone-alt icn position-absolute"
                                                        aria-hidden="true"><span class="sr-only">icon</span></i>
                                                    (61) 235 9595
                                                </li>
                                                <li>
                                                    <i class="far fa-clock icn position-absolute"
                                                        aria-hidden="true"><span class="sr-only">icon</span></i>
                                                    Mon-Sat: 8am-6:00pm
                                                </li>
                                            </ul>
                                            <a href="contact.html" class="btn btnLink">View Details <span
                                                    class="icn fas fa-chevron-right"></span></a>
                                        </div>
                                    </article>
                                </div>
                                <div class="px-2">
                                    <!-- getDirColumn -->
                                    <article class="getDirColumn d-flex w-100">
                                        <div class="bg-white w-100 py-8 px-3 px-md-5 gdcHolder">
                                            <strong class="ardBadge fwMedium fontAlter">Medical Center</strong>
                                            <address class="mt-5 mb-4">65 Town hall Road, Benshall, Westhorn, NY 5623
                                            </address>
                                            <ul class="list-unstyled contactInfoList mb-6">
                                                <li>
                                                    <i class="far fa-envelope icn position-absolute"
                                                        aria-hidden="true"><span class="sr-only">icon</span></i>
                                                    Health@example.com
                                                </li>
                                                <li>
                                                    <i class="fas fa-phone-alt icn position-absolute"
                                                        aria-hidden="true"><span class="sr-only">icon</span></i>
                                                    Emergency: 108
                                                </li>
                                            </ul>
                                            <a href="contact.html" class="btn btnLink">View Details <span
                                                    class="icn fas fa-chevron-right"></span></a>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="bgCover imgBg w-100 h-100 position-absolute"
                    style="background-image: url(images/bgPattern06.png);"></span>
            </section>
        </main>
        <!-- ftAreaWrap -->
        <div class="ftAreaWrap bg-light">
            <!-- ftConnectAside -->
            <aside class="ftConnectAside pt-4 pb-3 pt-md-7 pb-md-7 text-center text-md-left">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-7">
                            <nav class="ftcaNav mb-4 mb-lg-0">
                                <ul
                                    class="list-unstyled d-flex flex-wrap mb-0 justify-content-center justify-content-lg-start">
                                    <li>
                                        <a href="about.html">About Us</a>
                                    </li>
                                    <li>
                                        <a href="Services.html">Services</a>
                                    </li>
                                    <li>
                                        <a href="blogClassic.html">Events</a>
                                    </li>
                                    <li>
                                        <a href="blogGrid.html">News</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>
                                    <li>
                                        <a href="portfolioGrid.html">Portfolio</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-12 col-lg-5">
                            <div
                                class="ctConnectWrap d-sm-flex justify-content-sm-center justify-content-lg-end align-items-sm-center">
                                <strong class="title flex-shrink-0 mb-1 font-weight-normal mr-sm-3 d-block">Connect
                                    With Us</strong>
                                <ul
                                    class="list-unstyled socialNetworks ftSocialNetworks d-flex flex-wrap justify-content-center justify-content-sm-end mb-0">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="fab fa-facebook-square"><span
                                                    class="sr-only">facebook</span></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="fab fa-twitter"><span class="sr-only">twitter</span></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="fab fa-instagram"><span class="sr-only">instagram</span></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="fab fa-youtube"><span class="sr-only">youtube</span></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="footerAsideInnerWrap position-relative">
                <!-- footerAside -->
                <aside class="footerAside pt-10 pb-sm-2 pt-xl-15 pb-lg-10 py-lgwd-14 pb-xl-19">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-lg-3 mb-10 mb-lg-0">
                                <h5 class="h5 ftHeading text-white mb-4">Our Address</h5>
                                <address class="mb-0 ftPlace">
                                    Level 13, 2 Elizabeth St,<br>
                                    Melbourne, Victoria 3000,<br>
                                    Australia
                                </address>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 mb-10 mb-lg-0">
                                <h5 class="h5 ftHeading text-white mb-4">Opening Hours</h5>
                                <ul class="list-unstyled ftpScheduleList mb-0">
                                    <li>
                                        <span class="d-block">Monday - Friday</span>
                                        <span class="d-block">09:00 AM - 06:00 PM</span>
                                    </li>
                                    <li>
                                        <span class="d-block">Saturday</span>
                                        <span class="d-block">10:00 AM - 05:00 PM</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 mb-10 mb-lg-0">
                                <h5 class="h5 ftHeading text-white mb-4"><i
                                        class="icomoon-whatsapp icn text-secondary"><span
                                            class="sr-only">icon</span></i> 650-732-9369</h5>
                                <p>If you have any question, feel free to contact us</p>
                                <a href="mailto:noreply@envato.com">noreply@envato.com</a>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3 mb-10 mb-lg-0">
                                <h5 class="h5 ftHeading text-white mb-4">Newsletter</h5>
                                <p>Join our newsletter for latest Updates</p>
                                <form class="subscritionForm">
                                    <div class="inputWrap">
                                        <input type="text" class="form-control w-100"
                                            placeholder="Your email address">
                                        <button type="submit" class="btnSubmit"><i
                                                class="icn fas fa-paper-plane"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </aside>
                <!-- pageFooter -->
                <footer id="pageFooter" class="text-center pt-6 pb-3 pt-md-8 pb-md-5">
                    <div class="container">
                        <p><a href="home1.html">Autoglow Carwash Template</a> - <a href="javascript:void(0);">Mad
                                UX</a> &copy; 2022. <br class="d-md-none">All Rights Reserved</p>
                    </div>
                </footer>
                <span class="bgCover bgImg w-100 h-100 position-absolute"
                    style="background-image: url(images/img12.jpg);"></span>
            </div>
        </div>
        <!-- backToTop -->
        <a id="backToTop" class="rounded-circle text-center" href="javascript:void(0);"><span
                class="lnr lnr-chevron-up icn"></span></a>
        <!-- loader -->
        <!-- <div id="loader" class="loader-holder">
   <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
    <span class="sr-only">Loading...</span>
   </div>
  </div> -->
    </div>
    <!-- include jQuery library -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- include bootstrap popper JavaScript -->
    <script src="js/popper.min.js"></script>
    <!-- include bootstrap JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- include custom JavaScript -->
    <script src="js/jqueryCustom.js"></script>
    <!-- include Owl Carousel Javascript -->
    <script src="js/owlCarousel2_filter.min.js"></script>
    <!-- include Owl Carousel Javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <!-- include fontAwesome -->
    <script src="https://kit.fontawesome.com/391f644c42.js"></script>
</body>

</html>
