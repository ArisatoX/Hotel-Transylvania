{% extends "layouts/base.volt" %}

{% block content %}

    <header class="header-section header-normal">

        <!-- Logged in -->
        {% if session.has("auth_id") %}
            <!-- Register & Login -->
            <div class="top-nav">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tn-right">
                                <div class="language-option">
                                    <span class="bk-btn">{{ session.get("auth_firstName")}}<i class="fa fa-angle-down"></i></span>
                                    <div class="flag-dropdown">
                                        <ul>
                                            <li><a href="#">Profile</a></li>
                                            <li><a href="/logout">Logout</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             <!-- Logo -->
            <div class="menu-item">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">      
                            <div class="nav-menu">
                                <nav class="mainmenu">
                                    <div class="logo">
                                        <a href="/">
                                            <img src="img/icons/MainIcon.png" alt="">
                                        </a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navbar -->
            <div class="menu-item">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">      
                            <div class="nav-menu">
                                <nav class="mainmenu">
                                    <ul>
                                        <li><a href="/">Home</a></li>
                                        <li><a href="">Rooms</a></li>
                                        <li><a href="">About Us</a></li>
                                        <li><a href="">Booking</a>
                                        <li><a href="">Contact</a>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        

        {% else %}
            <!-- Register & Login -->
            <div class="top-nav">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tn-right">
                                <a href="/signup" class="bk-btn">Register</a>
                                <a href="/login" class="bk-btn">Log In</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Logo -->
            <div class="menu-item">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">      
                            <div class="nav-menu">
                                <nav class="mainmenu">
                                    <div class="logo">
                                        <a href="/">
                                            <img src="img/icons/MainIcon.png" alt="">
                                        </a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navbar -->
            <div class="menu-item">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">      
                            <div class="nav-menu">
                                <nav class="mainmenu">
                                    <ul>
                                        <li><a href="/">Home</a></li>
                                        <li><a href="">Rooms</a></li>
                                        <li><a href="">About Us</a></li>
                                        <li><a href="">Booking</a>
                                        <li><a href="">Contact</a>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {% endif %}
        
    </header>


    <!-- Booking -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-text">
                        <h1>Hotel Transylvania</h1>
                        <p>Here are the best hotel booking sites, including recommendations for international
                            travel and for finding low-priced hotel rooms.</p>
                        <a href="#" class="primary-btn">Discover Now</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                    <div class="booking-form">
                        <h3>Booking Your Hotel</h3>
                        <form action="#">
                            <div class="check-date">
                                <label for="date-in">Check In:</label>
                                <input type="text" class="date-input" id="date-in">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="check-date">
                                <label for="date-out">Check Out:</label>
                                <input type="text" class="date-input" id="date-out">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="select-option">
                                <label for="guest">Guests:</label>
                                <select id="guest">
                                    <option value="">2 Adults</option>
                                    <option value="">3 Adults</option>
                                </select>
                            </div>
                            <div class="select-option">
                                <label for="room">Room:</label>
                                <select id="room">
                                    <option value="">1 Room</option>
                                    <option value="">2 Room</option>
                                </select>
                            </div>
                            <button type="submit">Check Availability</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/background/bg1.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/background/bg2.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/background/bg3.jpg"></div>
        </div>
    </section>

    <!-- About Us -->
    <section class="aboutus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title">
                            <h2>About Us</h2>
                        </div>
                        <p class="f-para">Sona.com is a leading online accommodation site. We’re passionate about
                            travel. Every day, we inspire and reach millions of travelers across 90 local websites in 41
                            languages.</p>
                        <p class="s-para">So when it comes to booking the perfect hotel, vacation rental, resort,
                            apartment, guest house, or tree house, we’ve got you covered.</p>
                        <a href="#" class="primary-btn about-btn">Read More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-pic">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="img/about/about1.jpg" alt="">
                            </div>
                            <div class="col-sm-6">
                                <img src="img/about/about2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr>

    <!-- Rooms -->

    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Rooms</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="hp-room-section">
        <div class="container-fluid">
            <div class="hp-room-items">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="room-item">
                            <img src="img/room/studio.jpg" alt="">
                            <div class="ri-text">
                                <h4>Studio</h4>
                                <h3>Rp 2.500.000,00<span> / Pernight</span></h3>
                                <a href="#" class="primary-btn">Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="room-item">
                            <img src="img/room/deluxeking.jpg" alt="">
                            <div class="ri-text">
                                <h4>Deluxe King</h4>
                                <h3>Rp 3.000.000,00<span> / Pernight</span></h3>
                                <a href="#" class="primary-btn">Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="room-item">
                            <img src="img/room/premiertwin.jpg" alt="">
                            <div class="ri-text">
                                <h4>Premier Twin</h4>
                                <h3>Rp 3.500.000,00<span> / Pernight</span></h3>
                                <a href="#" class="primary-btn">Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="room-item">
                            <img src="img/room/premierfamily.jpg" alt="">
                            <div class="ri-text">
                                <h4>Premier Family</h4>
                                <h3>Rp 2.500.000,00<span> / Pernight</span></h3>
                                <a href="#" class="primary-btn">Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="room-item">
                            <img src="img/room/premiersuite.jpg" alt="">
                            <div class="ri-text">
                                <h4>Premier Suite</h4>
                                <h3>Rp 3.000.000,00<span> / Pernight</span></h3>
                                <a href="#" class="primary-btn">Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="room-item">
                            <img src="img/room/chairmansuite.jpg" alt="">
                            <div class="ri-text">
                                <h4>Chairman Suite</h4>
                                <h3>Rp 3.500.000,00<span> / Pernight</span></h3>
                                <a href="#" class="primary-btn">Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="room-pagination">
                            <a href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">Next</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br>

    <!-- Footer -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-contact">
                            <h6>Contact Us</h6>
                            <ul>
                                <li>Patrick Sungkharisma</li>
                                <li>05111740000041</li>
                                <li>PBKK C - FP Individu</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                       
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

</html>
{% endblock %}