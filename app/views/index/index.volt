{% extends "layouts/base.volt" %}

{% block content %}

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
                        <h3>Reservation</h3>
                        <form method ="POST" action="/booking/list">
                            {# <div class="check-date">
                                <label for="date-in">Check In:</label>
                                <input type="text" class="date-input" id="date-in">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="check-date">
                                <label for="date-out">Check Out:</label>
                                <input type="text" class="date-input" id="date-out">
                                <i class="icon_calendar"></i>
                            </div> #}
                            <div class="wrap-input100 validate-input" data-validate="Duration is required">
                                <span class="label-input100">Duration</span>
                                <input class="input100" type="text" name="duration" placeholder="">
                            </div>

                            <div class="wrap-input100 validate-input" data-validate="Capacity is required">
                                <span class="label-input100">Capacity</span>
                                <input class="input100" type="text" name="capacity" placeholder="">
                            </div>

                            <div class="wrap-input100 validate-input" data-validate="Room Count is required">
                                <span class="label-input100">Room Count</span>
                                <input class="input100" type="text" name="room" placeholder="">
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
        <div class="container" id="aboutus">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title">
                            <h2>About Us</h2>
                        </div>
                        <p class="f-para">Hotel Transylvania is a 5 star hotel with luxurious interior design and well-designed rooms. This hotel 
                        have various entertainment including restaurant, meeting rooms, and many more. It is also categorized into various room choices that will suit your needs.
                        We have got standard hotel rooms up until a magnificent suite.
                        </p>
                        <p class="s-para">So if you're looking to spend your time with your familiy, friends or even alone, don't hesitate and come join us!</p>
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

{% endblock %}