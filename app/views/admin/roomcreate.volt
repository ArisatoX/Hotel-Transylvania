{% extends "layouts/adminbase.volt" %}

{% block content %}

    <div class="container-contact100" style="background-image: url('img/background/bgform1.jpg');">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method ="POST" action="../admin/roomcreateregister" enctype="multipart/form-data">
				<span class="contact100-form-title">
					CREATE ROOM
				</span>

				{# Access booking before login #}
				<b style="color:red">{{flashSession.output()}}</b>
				<br><br>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Name</span>
					<input class="input100" type="text" name="name" placeholder="">
                </div>

                <div class="wrap-input100 validate-input" data-validate="Price is required">
					<span class="label-input100">Price</span>
					<input class="input100" type="text" name="price" placeholder="">
                </div>

                <div class="wrap-input100 validate-input" data-validate="Size is required">
					<span class="label-input100">Size</span>
					<input class="input100" type="text" name="size" placeholder="">
                </div>

                <div class="wrap-input100 validate-input" data-validate="Capacity is required">
					<span class="label-input100">Capacity</span>
					<input class="input100" type="text" name="capacity" placeholder="">
                </div>

                <div class="wrap-input100 validate-input" data-validate="Bed is required">
					<span class="label-input100">Bed</span>
					<input class="input100" type="text" name="bed" placeholder="">
                </div>

                <div class="wrap-input100 validate-input" data-validate="Features is required">
					<span class="label-input100">Features</span>
					<input class="input100" type="text" name="features" placeholder="">
                </div>

                <div class="wrap-input100 validate-input" data-validate="Description is required">
					<span class="label-input100">Description</span>
					<input class="input100" type="text" name="description" placeholder="">
                </div>

                <div class="wrap-input100 validate-input" data-validate="Room Count is required">
					<span class="label-input100">Available</span>
					<input class="input100" type="text" name="available" placeholder="">
                </div>

                <input type="file" name="picture" placeholder="">
                <br><br>

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