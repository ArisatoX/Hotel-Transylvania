{% extends "layouts/adminbase.volt" %}

{% block content %}

<div class="container">

    <br><br>

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
                                
                                <h3>Rp {{room.price}}<span> / night</span></h3>

                                {# <!-- Member and Non Member -->
                                {% if session.has("auth_id") %}
                                    <h3>Rp {{room.memberprice}}<span> / Pernight</span></h3>
                                {% else %}
                                    <h3>Rp {{room.price}}<span> / Pernight</span></h3>
                                {% endif %} #}

                                <a href="roomshow/{{ room.id }}" class="primary-btn">Edit</a>

                            </div>
                        </div>
                    </div>
                    {% endfor %}
                    
                </div>
            </div>
        </div>
    </section>

    <div class="room-booking">
        <form method="get" action="../admin/roomcreate">
            <button type="submit">Create</button><br>
        </form>
    </div>

    <div class="room-booking">
        <form method="get" action="../admin/roomdelete">
            <button type="submit">Delete</button><br>
        </form>
    </div>

    <div class="room-booking">
        <form method="get" action="../admin/bookinglist">
            <button type="submit">Validation</button><br>
        </form>
    </div>

    

</div>

{% endblock %}