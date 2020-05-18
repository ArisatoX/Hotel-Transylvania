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
        

<div class="container-contact100" style="background-image: url('img/background/bgform2.jpg');">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form" method = "POST" action="/reserve/updating">
            <span class="contact100-form-title">
                Update Reservation
            </span>

            <div class="wrap-input100 validate-input">
                <span class="label-input100">Rooms</span>
                <h4><?= $room->name ?></h4>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Invalid date">
                <span class="label-input100">Choose reservation date:</span>
                <input class="input100" type="date" name="dates" placeholder=""
                    value="<?= $book->reserveDate ?>"
                    min="2020-01-01" max="2030-12-31" required>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Time must in between 7:00 AM and 8:00 PM">
                <span class="label-input100">Start Time</span>
                <input class="input100" type="time" name="start_time" placeholder=""
                    value="<?= date('H:i', strtotime($book->start_time)) ?>"
                    min="07:00" max="20:00" required>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Time must in between 8:00 AM and 9:00 PM">
                <span class="label-input100">Finish Time</span>
                <input class="input100" type="time" name="end_time" placeholder=""
                    value="<?= date('H:i', strtotime($book->end_time)) ?>"
                    min="08:00" max="21:00" required>
            </div>

            <input type="text" name="id" value="<?= $book->id ?>" hidden>

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
                    <label for="roomName1"><strong>Meeting Room:</strong> <?= $room->name ?></label>
                    <label for="dates1"><strong>Reservation Date:</strong></label>
                    <input type="date" id="dates" name="dates"
                        value="<?= $book->reserveDate ?>"
                        min="2020-01-01" max="2030-12-31" required>
                    <label for="start_time1"><strong>Start time:</strong></label>
                    <input type="time" id="start_time" name="start_time"
                        value="<?= date('H:i', strtotime($book->start_time)) ?>"
                        min="07:00" max="20:00" required>
                    <label for="end_time1"><strong>Finish time:</strong></label>
                    <input type="time" id="end_time" name="end_time"
                        value="<?= date('H:i', strtotime($book->end_time)) ?>"
                        min="08:00" max="21:00" required>
                    <input type="text" name="id" value="<?= $book->id ?>" hidden>
                </fieldset>
                <button class="formsbutton" type="submit">Update</button>
            </form>
            <br>
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
