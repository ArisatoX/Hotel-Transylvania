{% extends "layouts/base.volt" %}

{% block content %}

<div class="container">

    {# Header #}
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Rooms</h2>
                        <div class="bt-option">
                            <a href="/">Home</a>
                            <span>Rooms</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {# Room from DB #}
    <section class="hp-room-section">
        <div class="container-fluid">
            <div class="hp-room-items">
                <div class="row">

                    <!-- Room -->
                    {% for room in rooms %}
                    <div class="col-lg-4 col-md-6">
                        <div class="room-item">
                            {{ image(room.picture)}}
                            <div class="ri-text">
                                <h4>{{ room.names }}</h4>
                                
                                <h3>Rp {{room.price}}<span> / Pernight</span></h3>

                                {# <!-- Member and Non Member -->
                                {% if session.has("auth_id") %}
                                    <h3>Rp {{room.memberprice}}<span> / Pernight</span></h3>
                                {% else %}
                                    <h3>Rp {{room.price}}<span> / Pernight</span></h3>
                                {% endif %} #}
    
                                <a href="room/show/{{ room.id }}" class="primary-btn">Details</a>
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
</div>

<br>

{% endblock %}
