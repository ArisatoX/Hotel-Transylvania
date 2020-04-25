{% extends "layouts/base.volt" %}

{% block content %}

    <div class="container-contact100" style="background-image: url('img/background/bgform2.jpg');">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method = "POST" action="/booking/list">
				<span class="contact100-form-title">
					Booking
				</span>

				<div class="wrap-input100 validate-input" data-validate="Capacity is required">
					<span class="label-input100">Capacity</span>
					<input class="input100" type="text" name="capacity" placeholder="">
                </div>

                <div class="wrap-input100 validate-input" data-validate="Room is required">
					<span class="label-input100">Room</span>
					<input class="input100" type="text" name="room" placeholder="">
                </div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							Check availability
						</button>
					</div>
				</div>
			</form>
		</div>

	</div>

{% endblock %}