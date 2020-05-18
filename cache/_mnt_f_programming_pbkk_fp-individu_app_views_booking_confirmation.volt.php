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
        

    <div class="container">
        <br>
        <div class="room-booking">
            <h3>Booking Confirmation</h3>

                <section class="room-details-section spad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="room-details-item">

                                <div class="rd-text">

                                    <!-- Repost Data -->
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="r-o">Room Name:</td>
                                                <td><?= $room->names ?> </td>
                                            </tr>
                                            <tr>
                                                <td class="r-o">Price:</td>
                                                <td>Rp <?= $room->price ?> </td>
                                            </tr>
                                            <tr>
                                                <td class="r-o">Duration:</td>
                                                <td><?= $duration ?> Day(s)</td>
                                            </tr>
                                            <tr>
                                                <td class="r-o">Total Room:</td>
                                                <td><?= $totalroom ?> Room(s)</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <h5><b>Subtotal:</b></h5>
                                    <h2>Rp <?= $totalprice ?></h2>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <form method = "POST" action = "create">
                    <input class="input100" type="text" name="id_user" value="<?= $id_user ?>" hidden>
                    <input class="input100" type="text" name="id_room" value="<?= $id_room ?>" hidden>
                    <input class="input100" type="text" name="duration" value="<?= $duration ?>" hidden>
                    <input class="input100" type="text" name="totalroom" value="<?= $totalroom ?>" hidden>
                    <input class="input100" type="text" name="totalprice" value="<?= $totalprice ?>" hidden>
                    <button type="submit">Confirm</a>
                </form>
        </div>
        <br>
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
