{% extends "layouts/base.volt" %}

{% block content %}

    <div class="container-contact100" style="background-image: url('img/background/bgform.jpg');">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method ="POST" action="">
				<span class="contact100-form-title">
					Login
				</span>

				<div class="wrap-input100 validate-input" data-validate="Email is required">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="">
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
					<span class="label-input100">Password</span>
					<input class="input100" type="password" name="pass" placeholder="">
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