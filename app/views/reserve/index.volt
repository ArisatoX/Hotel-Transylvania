{% extends "layouts/base.volt" %}

{% block content %}

<div class="container-contact100" style="background-image: url('img/background/bgform2.jpg');">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form" method = "POST" action="/reserve/confirm">
            <span class="contact100-form-title">
                Meeting Room Reservation
            </span>

            <div class="wrap-input100 validate-input">
                <span class="label-input100">Rooms</span>
                <br>
                <select id="room" name="room">
                    {% for room in rooms %}
                        <option value='{{room.id}}'>{{room.name}}</option>
                    {% endfor %}
                </select>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Invalid date">
                <span class="label-input100">Choose reservation date (mm/dd/yyyy):</span>
                <input class="input100" type="date" name="reserveDate" placeholder=""
                    value="{{ date('Y-m-d',time()) }}"
                    min="2020-01-01" max="2030-12-31" required>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Time must in between 7:00 AM and 8:00 PM">
                <span class="label-input100">Start Time</span>
                <input class="input100" type="time" name="start_time" placeholder=""
                    value="{{ date('H:i',time()) }}"
                    min="07:00" max="20:00" required>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Time must in between 8:00 AM and 9:00 PM">
                <span class="label-input100">Finish Time</span>
                <input class="input100" type="time" name="end_time" placeholder=""
                    value="{{ date('H:i',time()+3600) }}"
                    min="08:00" max="21:00" required>
            </div>

            <div class="container-contact100-form-btn">
                <div class="wrap-contact100-form-btn">
                    <div class="contact100-form-bgbtn"></div>
                    <button class="contact100-form-btn">
                        Reserve
                    </button>
                </div>
            </div>
        </form>
    </div>

</div>
{% endblock %}