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

    




{% endblock %}