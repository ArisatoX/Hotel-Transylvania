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
                <div class="col-lg-6">
                    <div class="room-details-item">

                        <div class="rd-text">

                            <h2>Booking ID: #{{book.id}}</h2>
                            <h4><b>Rp {{book.totalprice}}</b></h4>
                            <br>
                            
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
                                        <td class="r-o">Room Name:</td>
                                        <td>{{room.names}}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Price:</td>
                                        <td>Rp {{room.price}} <span> / night</span></td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Room Count:</td>
                                        <td>{{book.totalroom}} Room(s)</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Duration:</td>
                                        <td>{{book.duration}} Day(s)</td>
                                    </tr>

                                    {% if book.paid == 0 %}
                                        <tr>
                                            <td class="r-o">Paid:</td>
                                            <td>No</td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td class="r-o">Paid:</td>
                                            <td>Yes</td>
                                        </tr>
                                    {% endif %}
                                            
                                    <tr>
                                        <td class="r-o">Status:</td>
                                        <td>{{book.stat}}</td>
                                    </tr>
                                    
                                </tbody>
                            </table>

                            <div class="room-details-item">
                                <div class="rd-text">
                                    <div class="rd-title">
                                        <div class="rdt-left">
                                            <a href="#">Payment</a>
                                            <a href="../update/{{book.id}}">Change</a>
                                            <a href="../delete/{{book.id}}">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">   
                       {{ image(room.picture)}}
                </div>
            </div>
        </div>
    </section>
    <!-- Room Details Section End -->

    




{% endblock %}