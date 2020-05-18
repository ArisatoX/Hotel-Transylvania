<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Hotel Transylvania</title>

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
                                            <li><a href="/reserve/history">Reservations</a></li>
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
                                    <li><a href="/meeting">Meetings</a></li>
                                    <li><a href="/#aboutus">About Us</a></li>
                                    
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </header>

        <!-- Content -->
        

    <div class = "container">
        <?php if ($flag == 1) { ?>

            <section class="hp-room-section">
                <div class="container-fluid">
                    <div class="hp-room-items">
                        <div class="row">

                            <!-- Room Exist -->
                            <?php foreach ($rooms as $room) { ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="room-item">
                                    <?= $this->tag->image([$room->picture]) ?>
                                    <div class="ri-text">
                                        <h4><?= $room->names ?></h4>

                                        <h3>Rp <?= $room->price ?><span> / night</span></h3>

                                        
            
                                        <form method = "POST" action = "confirmation">
                                            <input class="input100" type="text" name="id_user" value="<?= $this->session->get('auth_id') ?>" hidden>
                                            <input class="input100" type="text" name="id_room" value="<?= $room->id ?>" hidden>
                                            <input class="input100" type="text" name="duration" value="<?= $duration ?>" hidden>
                                            <input class="input100" type="text" name="totalroom" value="<?= $totalroom ?>" hidden>
                                            <input class="input100" type="text" name="price" value="<?= $room->price ?>" hidden>
                                            <button type="submit" class="primary-btn">Select</a>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            
                            
                        </div>
                    </div>
                </div>
            </section>
                        
        <?php } else { ?>

            <!-- Room Doesn't Exist -->
            <div class = "container">
                <section class="aboutus-section spad">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="about-text">
                                    <div class="section-title">
                                        <h2>Oops...</h2>
                                    </div>
                                    <p class="f-para"> The room that you are searching right now is not available or it might be full.
                                    </p>
                                    <br>
                                    <a href="/booking" class="primary-btn about-btn">Back to Booking</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="about-pic">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <img src="<?= $this->url->get('img/icons/sad.png') ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        
        <?php } ?>
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
                                    <li><strong>Patrick Sungkharisma</strong> - 05111740000041</li>
                                    <li><strong>Octavianus Giovanni Y</strong> - 05111740000113</li>
                                    <li>PBKK C - FP Kelompok</li>
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