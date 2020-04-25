{% extends "layouts/base.volt" %}

{% block content %}

    <div class="container">
        {# Header #}
        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-text">
                            <h2>Booking List</h2>
                            <div class="bt-option">
                                <a href="/">Home</a>
                                <span>Bookings</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {% if flag == 1 %}

            <section class="hp-room-section">
                <div class="container-fluid">
                    <div class="hp-room-items">
                        <div class="row">

                            <!-- Booking Exist -->
                            {% for book in booking %}
                            <div class="col-lg-4 col-md-6">
                                <div class="room-item">
                                    <div class="ri-text">
                                        <h4> Booking ID: #{{ book.id }}</h4>

                                        <h3>Rp {{book.totalprice}}</h3>

                                        {# <!-- Member and Non Member -->
                                        {% if session.has("auth_id") %}
                                            <h3>Rp {{room.memberprice}}<span> / Pernight</span></h3>
                                        {% else %}
                                            <h3>Rp {{room.price}}<span> / Pernight</span></h3>
                                        {% endif %} #}

                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="r-o">Status:</td>
                                                    <td>{{book.stat}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
            
                                        <a href="show/{{ book.id }}" class="primary-btn">Details</a>

                                    </div>
                                </div>
                            </div>
                            {% endfor %}
                            
                            {# <div class="col-lg-12">
                                <div class="room-pagination">
                                    <a href="#">1</a>
                                    <a href="#">2</a>
                                    <a href="#">Next</a>
                                </div>
                            </div> #}
                        </div>
                    </div>
                </div>
            </section>
                        
        {% else %}

            <!-- Booking Doesn't Exist -->
            <div class = "container">
                <section class="aboutus-section spad">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="about-text">
                                    <div class="section-title">
                                        <h2>Oops...</h2>
                                    </div>
                                    <p class="f-para"> You don't have any booking yet
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
        
        {% endif %}
        
    </div>

{% endblock %}