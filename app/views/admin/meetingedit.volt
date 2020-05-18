{% extends "layouts/adminbase.volt" %}

{% block content %}

<div class="container-contact100" style="background-image: url('img/background/bgform2.jpg');">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form" method = "POST" action="/admin/meetingupdate">
            <span class="contact100-form-title">
                Editing Meeting Room
            </span>
            
            <input type="text" name="id" value="{{ meet.id }}" hidden>

            <div class="wrap-input100 validate-input">
                <span class="label-input100">Room Name:</span>
                <input class="input100" type="text" name="room" placeholder="" value="{{meet.name}}" required>
            </div>

            <div class="wrap-input100 validate-input">
                <span class="label-input100">Room Location:</span>
                <input class="input100" type="text" name="location" placeholder="" value="{{meet.location}}" required>
            </div>

            <div class="wrap-input100 validate-input">
                <span class="label-input100">Capacity:</span>
                <input class="input100" type="number" name="capacity" placeholder="" value="{{meet.capacity}}" required>
            </div>

            <div class="wrap-input100 validate-input">
                <span class="label-input100">Description:</span>
                <input class="input100" type="text" name="description" placeholder="" value="{{meet.description}}" required>
            </div>
            
            <div class="wrap-input100 validate-input">
                <span class="label-input100">Price per Hour:</span>
                <input class="input100" type="number" name="hourprice" placeholder="" value="{{meet.hourPrice}}" required>
            </div>

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

{% endblock %}