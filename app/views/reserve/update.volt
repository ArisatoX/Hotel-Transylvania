{% extends "layouts/base.volt" %}

{% block content %}

<div class="container-contact100" style="background-image: url('img/background/bgform2.jpg');">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form" method = "POST" action="/reserve/updating">
            <span class="contact100-form-title">
                Update Reservation
            </span>

            <div class="wrap-input100 validate-input">
                <span class="label-input100">Rooms</span>
                <h4>{{room.name}}</h4>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Invalid date">
                <span class="label-input100">Choose reservation date:</span>
                <input class="input100" type="date" name="dates" placeholder=""
                    value="{{book.reserveDate}}"
                    min="2020-01-01" max="2030-12-31" required>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Time must in between 7:00 AM and 8:00 PM">
                <span class="label-input100">Start Time</span>
                <input class="input100" type="time" name="start_time" placeholder=""
                    value="{{date('H:i', strtotime(book.start_time))}}"
                    min="07:00" max="20:00" required>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Time must in between 8:00 AM and 9:00 PM">
                <span class="label-input100">Finish Time</span>
                <input class="input100" type="time" name="end_time" placeholder=""
                    value="{{date('H:i', strtotime(book.end_time))}}"
                    min="08:00" max="21:00" required>
            </div>

            <input type="text" name="id" value="{{ book.id }}" hidden>

            <div class="container-contact100-form-btn">
                <div class="wrap-contact100-form-btn">
                    <div class="contact100-form-bgbtn"></div>
                    <button class="contact100-form-btn">
                        Update
                    </button>
                </div>
            </div>
        </form>
    </div>

</div>

<div class="container">
    <div class="forms">
            <br><br><br>
            <form action="/reserve/updating" method="post">
                <h1 class="form-header">Update</h1>
                
                <fieldset>
                    <label for="roomName1"><strong>Meeting Room:</strong> {{room.name}}</label>
                    <label for="dates1"><strong>Reservation Date:</strong></label>
                    <input type="date" id="dates" name="dates"
                        value="{{book.reserveDate}}"
                        min="2020-01-01" max="2030-12-31" required>
                    <label for="start_time1"><strong>Start time:</strong></label>
                    <input type="time" id="start_time" name="start_time"
                        value="{{date('H:i', strtotime(book.start_time))}}"
                        min="07:00" max="20:00" required>
                    <label for="end_time1"><strong>Finish time:</strong></label>
                    <input type="time" id="end_time" name="end_time"
                        value="{{date('H:i', strtotime(book.end_time))}}"
                        min="08:00" max="21:00" required>
                    <input type="text" name="id" value="{{ book.id }}" hidden>
                </fieldset>
                <button class="formsbutton" type="submit">Update</button>
            </form>
            <br>
    </div>
</div>
{% endblock %}