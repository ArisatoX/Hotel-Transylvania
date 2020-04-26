{% extends "layouts/base.volt" %}

{% block content %}

    <div class="container">
        <div class="booking-form">
            <h3>Reservation</h3>
            <h6 style="color:red">*Please refill your data</h6>
            <br>
            <form method ="POST" action="/booking/updatelist">
                {# <div class="check-date">
                    <label for="date-in">Check In:</label>
                    <input type="text" class="date-input" id="date-in">
                    <i class="icon_calendar"></i>
                </div>
                <div class="check-date">
                    <label for="date-out">Check Out:</label>
                    <input type="text" class="date-input" id="date-out">
                    <i class="icon_calendar"></i>
                </div> #}
                <div class="wrap-input100 validate-input" data-validate="Duration is required">
                    <span class="label-input100">Duration</span>
                    <input class="input100" type="text" name="duration" placeholder="{{book.duration}}">
                </div>

                <div class="wrap-input100 validate-input" data-validate="Capacity is required">
                    <span class="label-input100">Capacity</span>
                    <input class="input100" type="text" name="capacity" placeholder="{{room.capacity}}">
                </div>

                <div class="wrap-input100 validate-input" data-validate="Room Count is required">
                    <span class="label-input100">Room Count</span>
                    <input class="input100" type="text" name="room" placeholder="{{book.totalroom}}">
                </div>

                <input class="input100" type="text" name="id_book" value="{{book.id}} "placeholder="{{book.id}}" hidden>
                <input class="input100" type="text" name="old_totalroom" value="{{book.totalroom}}" placeholder="{{book.totalroom}}" hidden>
                <input class="input100" type="text" name="old_id_room" value="{{book.id_room}}" placeholder="{{book.id_room}}" hidden>

                <button type="submit">Check Availability</button>
            </form>
        </div>
    </div>

{% endblock %}