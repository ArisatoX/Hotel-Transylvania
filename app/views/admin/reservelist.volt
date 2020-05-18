{% extends "layouts/adminbase.volt" %}

{% block content %}

<br><br><br><br>
{% if (books.count() > 0) %}
<!-- <div class="welcome-area" id="welcome"> -->
    <div class="container">
        <table class="table table-bordered table-hover">
            <thead class="thead-light">
            <tr>
                <th><h5>Reserve ID</h5></th>
                <th><h5>Room Name</h5></th>
                <th><h5>Room Location</h5></th>
                <th><h5>Reserve Date</h5></th>
                <th><h5>Start Time</h5></th>
                <th><h5>Finish Time</h5></th>
                <th><h5>Price</h5></th>
                <th><h5>Payment Picture</h5></th>
                <th colspan="3"></th>
            </tr>
            </thead>
            
            <tbody class="table-secondary">
            {% for data in books %}
                {% for room in rooms %}
                    {% if room.id == data.RoomID %}
                        <tr>
                            <td><h6>{{data.id}}</h6></td>
                            <td><h6>{{room.name}}</h6></td>
                            <td><h6>{{room.location}}</h6></td>
                            <td><h6>{{data.reserveDate}}</h6></td>
                            <td><h6>{{date('H:i', strtotime(data.start_time))}}</h6></td>
                            <td><h6>{{date('H:i', strtotime(data.end_time))}}</h6></td>
                            <td><h6>Rp.{{data.price}}</h6></td>
                            <td><h6>{{image(data.payment)}}</h6></td>
                            {% if !data.paid %}
                            <td>
                                <button class="offbutton" type="submit" disabled><h6>Waiting for Payment</h6></button>
                            </td>
                            {% else %}
                        
                            <td>
                                {% if !data.valid %}
                                <form action="/admin/reservevalidation" method="post">
                                    <input type="text" name="id" value="{{ data.id }}" hidden>
                                    <button class="updatebutton" type="submit"><h6>Validation</h6></button>
                                </form>
                                {% else %}
                                <button class="offbutton" type="submit" disabled><h6>Paid</h6></button>
                                {% endif %}
                            </td>
                            {% endif %}
                        </tr>
                    {% endif %}
                {% endfor %}
            {% endfor %}
            </tbody>
        </table>
        <br>
    </div>
<!-- </div> -->
{% else %}

{% endif %}
{% endblock %}