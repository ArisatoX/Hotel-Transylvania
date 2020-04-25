{% extends "layouts/base.volt" %}

{% block content %}

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Booking Details</h2>
                        <div class="bt-option">
                            <a href="/">Home</a>
                            <a href="../bookinglist">Bookings</a>
                            <span>{{book.id}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Room Details Section Begin -->
    <section class="room-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="room-details-item">
                        <div class="rd-text">

                            <h2>Booking ID: #{{book.id}}</h2>
                            
                            {# <!-- Member and Non Member -->
                            {% if session.has("auth_id") %}
                                <h2>Rp {{room.memberprice}}<span> / Pernight</span></h2>
                            {% else %}
                                <h2>Rp {{room.price}}<span> / Pernight</span></h2>
                            {% endif %} #}

                            {# Specifications#}
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Booking ID:</td>
                                        <td>{{book.id}}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Total Price:</td>
                                        <td>Rp {{book.totalprice}}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Room ID:</td>
                                        <td>{{book.id_room}}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Room Count:</td>
                                        <td>{{book.totalroom}} Room(s)</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Duration:</td>
                                        <td>{{book.duration}} Day(s)</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Status:</td>
                                        <td>{{book.stat}}</td>
                                    </tr>
                                    
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Room Details Section End -->

    




{% endblock %}