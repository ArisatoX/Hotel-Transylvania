{% extends "layouts/base.volt" %}

{% block content %}

    <!-- Register & Login -->
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tn-right">
                            <a href="/signup" class="bk-btn">Register</a>
                            <a href="/login" class="bk-btn">Log In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar -->
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">      
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="">Rooms</a></li>
                                    <li><a href="">About Us</a></li>
                                    <li><a href="">Booking</a>
                                    <li><a href="">Contact</a>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container-contact100" style="background-image: url('img/background/bgform.jpg');">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method = "POST" action="/signup/register">
				<span class="contact100-form-title">
					Register
				</span>

				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="First Name is required">
					<span class="label-input100">First Name</span>
					<input class="input100" type="text" name="firstName" placeholder="">
                </div>
                
                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Last Name is required">
					<span class="label-input100">Last Name</span>
					<input class="input100" type="text" name="lastName" placeholder="">
				</div>

				<div class="wrap-input100 validate-input" data-validate="Email is required">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="">
                </div>

                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Password is required">
					<span class="label-input100">Password</span>
					<input class="input100" type="password" name="pass" placeholder="">
                </div>
                
                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Confirm Password is required">
					<span class="label-input100">Confirm Password</span>
					<input class="input100" type="password" name="confirm" placeholder="">
				</div>

				<div class="wrap-input100 validate-input" data-validate="Country is required">
					<span class="label-input100">Country / Region</span>
					<input class="input100" type="text" name="country" placeholder="">
                </div>

                <div class="wrap-input100 validate-input" data-validate="Phone is required">
					<span class="label-input100">Phone Number</span>
					<input class="input100" type="text" name="phone" placeholder="">
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





