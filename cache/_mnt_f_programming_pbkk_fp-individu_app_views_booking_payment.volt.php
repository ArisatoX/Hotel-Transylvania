<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Phalcon PHP Framework</title>

        <!-- Load CSS -->
        <?= $this->assets->outputCss() ?>

    </head>
    <body>

        <header class="header-section header-normal">

        <?php if ($this->session->has('auth_id')) { ?>
            <!-- Logged in -->
            <div class="top-nav">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tn-right">
                                <div class="language-option">
                                    <span class="bk-btn"><?= $this->session->get('auth_firstName') ?><i class="fa fa-angle-down"></i></span>
                                    <div class="flag-dropdown">
                                        <ul>
                                            <li><a href="#">Profile</a></li>
                                            <li><a href="/booking/bookinglist">Bookings</a></li>
                                            <li><a href="/logout">Logout</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        

        <?php } else { ?>
            <!-- Not Logged In -->
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
        <?php } ?>

        <!-- Logo -->
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">      
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <div class="logo">
                                    <a href="/">
                                        <img src="<?= $this->url->get('img/icons/MainIcon.png') ?>" alt="">
                                    </a>
                                </div>
                            </nav>
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
                                    <li><a href="/room">Rooms</a></li>
                                    <li><a href="/booking">Booking</a></li>
                                    <li><a href="/#aboutus">About Us</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </header>

        <!-- Content -->
        

    <div class="container">
        <div class="booking-form">
            <h3>Payment</h3>
            <h6 style="color:red">*Please upload the payment</h6>
            <br>
            <form method ="POST" action="/booking/uploadpayment" enctype="multipart/form-data">

                <input type="file" name="payment" placeholder="">  
                <input type="text" name="id_book" value="<?= $book->id ?>" hidden>  
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>



        <!-- Footer -->
        <footer class="footer-section">
            <div class="container" id="contact">
                <div class="footer-text">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="ft-about">
                            </div>
                        </div>
                        <div class="col-lg-3 offset-lg-1">
                            <div class="ft-contact">
                                <h6>Contact Us</h6>
                                <ul>
                                    <li>Patrick Sungkharisma</li>
                                    <li>05111740000041</li>
                                    <li>PBKK C - FP Individu</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 offset-lg-1">
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->


        <!-- Load JS -->
        <?= $this->assets->outputJs() ?>

    </body>
</html>