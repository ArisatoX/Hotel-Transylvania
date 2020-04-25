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
                        <p class="f-para"> You have successfully booked the room
                        </p>
                        <br>
                        <a href="/booking" class="primary-btn about-btn">Back to Booking</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-pic">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="{{ url("img/icons/sad.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

{% endblock %}