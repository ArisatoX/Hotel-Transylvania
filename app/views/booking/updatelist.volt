{% extends "layouts/base.volt" %}

{% block content %}

    <div class = "container">
        {% if flag == 1 %}

            <section class="hp-room-section">
                <div class="container-fluid">
                    <div class="hp-room-items">
                        <div class="row">

                            <!-- Room Exist -->
                            {% for room in rooms %}
                            <div class="col-lg-4 col-md-6">
                                <div class="room-item">
                                    {{ image(room.picture)}}
                                    <div class="ri-text">
                                        <h4>{{ room.names }}</h4>

                                        <h3>Rp {{room.price}}<span> / night</span></h3>

                                        {# <!-- Member and Non Member -->
                                        {% if session.has("auth_id") %}
                                            <h3>Rp {{room.memberprice}}<span> / Pernight</span></h3>
                                        {% else %}
                                            <h3>Rp {{room.price}}<span> / Pernight</span></h3>
                                        {% endif %} #}
            
                                        <form method = "POST" action = "updateconfirmation">
                                            <input class="input100" type="text" name="id_user" value="{{ session.get("auth_id")}}" hidden>
                                            <input class="input100" type="text" name="id_room" value="{{ room.id }}" hidden>
                                            <input class="input100" type="text" name="duration" value="{{ duration }}" hidden>
                                            <input class="input100" type="text" name="totalroom" value="{{ totalroom }}" hidden>
                                            <input class="input100" type="text" name="price" value="{{ room.price }}" hidden>
                                            <input class="input100" type="text" name="id_book" value="{{ id_book }}" hidden>
                                            <input class="input100" type="text" name="old_totalroom" value="{{ old_totalroom }}" hidden>
                                            <input class="input100" type="text" name="old_id_room" value="{{ old_id_room }}" hidden>
                                            <button type="submit" class="primary-btn">Select</a>
                                        </form>

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

            <!-- Room Doesn't Exist -->
            <div class = "container">
                <section class="aboutus-section spad">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="about-text">
                                    <div class="section-title">
                                        <h2>Oops...</h2>
                                    </div>
                                    <p class="f-para"> The room that you are searching right now is not available or it might be full.
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