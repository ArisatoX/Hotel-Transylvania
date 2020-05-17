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
                                    <li><a href="/meeting">Meeting Rooms</a></li>
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
        

<br><br><br><br>
<?php if (($books->count() > 0)) { ?>
<!-- <div class="welcome-area" id="welcome"> -->
    <div class="container">
        <table class="table table-bordered table-hover">
            <thead class="thead-light">
            <tr>
                <th><h5>Room Name</h5></th>
                <th><h5>Room Location</h5></th>
                <th><h5>Reserve Date</h5></th>
                <th><h5>Start Time</h5></th>
                <th><h5>Finish Time</h5></th>
                <th><h5>Price</h5></th>
                <th colspan="3"></th>
            </tr>
            </thead>
            
            <tbody class="table-secondary">
            <?php foreach ($books as $data) { ?>
                <?php foreach ($rooms as $room) { ?>
                    <?php if ($room->id == $data->RoomID && $userid == $data->userID) { ?>
                        <tr>
                            <td><h6><?= $room->name ?></h6></td>
                            <td><h6><?= $room->location ?></h6></td>
                            <td><h6><?= $data->reserveDate ?></h6></td>
                            <td><h6><?= date('H:i', strtotime($data->start_time)) ?></h6></td>
                            <td><h6><?= date('H:i', strtotime($data->end_time)) ?></h6></td>
                            <td><h6>Rp.<?= $data->price ?></h6></td>
                            <?php if (!$data->paid) { ?>
                            <td>
                                <form action="/reserve/update" method="post">
                                    <input type="text" name="id" value="<?= $data->id ?>" hidden>
                                    <button class="updatebutton" type="submit"><h6>Update</h6></button>
                                </form>
                            </td>
                            <td>
                                <form action="/reserve/delete" method="post">
                                    <input type="text" name="id" value="<?= $data->id ?>" hidden>
                                    <button class="deletebutton" type="submit"><h6>Delete</h6></button>
                                </form>
                            </td>
                            <td>
                                <form action="/reserve/payment" method="post">
                                    <input type="text" name="id" value="<?= $data->id ?>" hidden>
                                    <button class="updatebutton" type="submit"><h6>Payment</h6></button>
                                </form>
                            </td>
                            <?php } else { ?>
                            <td>
                                <button class="offbutton" type="submit" disabled><h6>Update</h6></button>
                            </td>
                            <td>
                                <button class="offbutton" type="submit" disabled><h6>Delete</h6></button>
                            </td>
                            <td>
                                <button class="offbutton" type="submit" disabled><h6>Paid</h6></button>
                            </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
            </tbody>
        </table>
        <br>
    </div>
<!-- </div> -->
<?php } else { ?>

<?php } ?>


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
