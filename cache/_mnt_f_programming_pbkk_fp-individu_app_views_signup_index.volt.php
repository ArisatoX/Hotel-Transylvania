<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Phalcon PHP Framework</title>
        
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
        <link rel="stylesheet" href="css/flaticon.css" type="text/css">
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="css/nice-select.css" type="text/css">
        <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
        <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">

        <!-- Form -->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="css/form/util.css">
        <link rel="stylesheet" type="text/css" href="css/form/main.css">

    </head>
    <body>

        <!-- Content -->
        

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



        <!-- jQuery first, then Popper.js, and then Bootstrap's JavaScript -->

        <!-- Main -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/jquery.slicknav.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/main.js"></script>

        <!-- Form -->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="vendor/select2/select2.min.js"></script>
        <script src="js/form/main.js"></script>

    </body>
</html>

<!-- <form method = "POST" action="signup/register">

    <h2> REGISTER FORM </h2><br>

    <label for="firstName"> First name </label><br>
    <input type="text" name="firstName"><br>

    <label for="lastName">Last name</label><br>
    <input type="text" name="lastName"><br>

    <label for="email"> Email</label><br>
    <input type="text" name="email"><br>

    <label for="pass">Password</label><br>
    <input type="password" name="pass"><br>

    <label for="confirm">Confirm Password</label><br>
    <input type="password" name="confirm"><br>

    <label for="country"> Country / Region </label><br>
    <input type="text" name="country"><br><br>

    <label for="phone">Phone Number</label><br>
    <input type="text" name="phone"><br><br>

    <input type="submit" value="Submit">

</form> -->