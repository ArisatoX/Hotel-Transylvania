{% extends "layouts/base.volt" %}

{% block content %}

<div class = "container">
    <section class="aboutus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title">
                            <h2>Success</h2>
                        </div>
                        
                        <p class="f-para"> You have successfully canceled the reservation
                        
                        <br> <br>

                        <a href="/booking/bookinglist" class="primary-btn about-btn">Booking list</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-pic">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="{{ url("img/icons/success.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

{% endblock %}