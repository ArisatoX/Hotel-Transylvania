{% extends "layouts/adminbase.volt" %}

{% block content %}

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Room Edit</h2>
                        <div class="bt-option">
                            <a href="../roomlist">Room List</a>
                            <span>{{room.names}}</span>
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
                        {{ image(room.picture)}}
                        <div class="rd-text">
                            <div class="rd-title">
                                <h3>{{room.names}}</h3>
                                <div class="rdt-right">
                                    <div class="rating">
                                        {# <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star-half_alt"></i> #}
                                    </div>
                                    <a href="../roomedit/{{room.id}}">Edit</a>
                                </div>
                            </div>

                            <h2>Rp {{room.price}}<span> / night</span></h2>

                            {# <!-- Member and Non Member -->
                            {% if session.has("auth_id") %}
                                <h2>Rp {{room.memberprice}}<span> / Pernight</span></h2>
                            {% else %}
                                <h2>Rp {{room.price}}<span> / Pernight</span></h2>
                            {% endif %} #}

                            {# Description #}
                            <p class="f-para"> {{room.descriptions}}</p>

                            {# Specifications#}
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td>{{room.size}} sqm</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>{{room.capacity}}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>{{room.bed}}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Features:</td>
                                        <td>{{room.features}}</td>
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