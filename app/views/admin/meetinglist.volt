{% extends "layouts/adminbase.volt" %}

{% block content %}

{# Header #}
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Meeting Rooms</h2>
                        <div class="bt-option">
                            <a href="/admin">Home</a>
                            <span>Meeting Rooms</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<div class="welcome-area" id="welcome">
    <div class="container">
        {% if (rooms.count() > 0) %}
        <table class="table table-bordered table-hover">
            <thead class="thead-light">
            <tr>
                <th><h5>Room Name</h5></th>
                <th><h5>Room Location</h5></th>
                <th><h5>Capacity</h5></th>
                <th><h5>Price per Hour</h5></th>
                <th colspan="2"></th>
            </tr>
            </thead>
            
            <tbody class="table-secondary">
            {% for room in rooms %}
                <tr>
                    <td><h6>{{room.name}}</h6></td>
                    <td><h6>{{room.location}}</h6></td>
                    <td><h6>{{room.capacity}}</h6></td>
                    <td><h6>{{room.hourPrice}}</h6></td>
                    <td>
                        <form action="/admin/meetingedit" method="post">
                            <input type="text" name="id" value="{{ room.id }}" hidden>
                            <button type="submit"><h6>Edit</h6></button>
                        </form>
                    </td>
                    <td>
                        <form action="/admin/meetingdelete" method="post">
                            <input type="text" name="id" value="{{ room.id }}" hidden>
                            <button type="submit"><h6>Delete</h6></button>
                        </form>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
        {% endif %}

        <div class="room-booking">
            <form method="get" action="/admin/meetingcreate">
                <button type="submit">Create</button><br>
            </form>
        </div>

        {# <div>
            <a href="/reserve" class="primary-btn">Reserve</a>
        </div>                #}

    </div>
</div>

{% endblock %}