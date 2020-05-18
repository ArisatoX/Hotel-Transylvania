{% extends "layouts/adminbase.volt" %}

{% block content %}

<div class="container">

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Validation</h2>
                        <div class="bt-option">
                            <a href="../admin/roomlist">Room List</a>
                            <span>Validation List</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    {# Room from DB #}
    <section class="hp-room-section">
        <div class="container-fluid">
            <div class="hp-room-items">
                <div class="row">

                    <!-- Room -->
                    {% for book in booking %}
                    <div class="col-lg-4 col-md-6">
                        <div class="room-item">
                            <div class="ri-text">
                                <h3>Booking #{{ book.id }}</h3>
                                
                                <h5>{{book.stat}}</h5> <br>

                                <a href="bookingshow/{{ book.id }}" class="primary-btn">View</a>

                            </div>
                        </div>
                    </div>
                    {% endfor %}
                    
                </div>
            </div>
        </div>
    </section>

</div>

{% endblock %}