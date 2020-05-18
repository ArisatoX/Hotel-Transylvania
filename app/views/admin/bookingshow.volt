{% extends "layouts/adminbase.volt" %}

{% block content %}

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Validation</h2>
                        <div class="bt-option">
                            <a href="../roomlist">Room List</a>
                            <a href="../bookinglist">Validation List</a>
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

                            {% if book.stat == 'Payment in process' %}

                                <div class="rd-title">
                                    <h3>Booking #{{book.id}}</h3>
                                    <div class="rdt-right">
                                        <div class="rating">
                                            {# <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star-half_alt"></i> #}
                                        </div>
                                        <a href="../bookingvalidation/{{book.id}}">Verify</a>
                                    </div>
                                </div>
                            
                            {% endif %}
                                

                            {# Specifications#}
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">ID User:</td>
                                        <td>{{book.id_user}} sqm</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">ID Room:</td>
                                        <td>{{book.id_room}}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Duration:</td>
                                        <td>{{book.duration}}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Total Room:</td>
                                        <td>{{book.totalroom}}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Total Price:</td>
                                        <td>{{book.totalprice}}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Status:</td>
                                        <td>{{book.stat}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        {% if book.stat != 'Waiting for payment' %}
                            {{image(book.payment)}}
                        {% endif %}

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Room Details Section End -->


{% endblock %}