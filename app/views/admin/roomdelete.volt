{% extends "layouts/adminbase.volt" %}

{% block content %}

    <div class="container-contact100" style="background-image: url('img/background/bgform1.jpg');">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method ="POST" action="../admin/roomdeleteregister" enctype="multipart/form-data">
				<span class="contact100-form-title">
					DELETE ROOM
				</span>

				{# Access booking before login #}
				<b style="color:red">{{flashSession.output()}}</b>
				<br><br>

				<div class="wrap-input100 validate-input" data-validate="id is required">
					<span class="label-input100">Room Name</span>
					<input class="input100" type="text" name="name" placeholder="">
                </div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							Submit
						</button>
					</div>
				</div>
			</form>
		</div>

	</div>

{% endblock %}