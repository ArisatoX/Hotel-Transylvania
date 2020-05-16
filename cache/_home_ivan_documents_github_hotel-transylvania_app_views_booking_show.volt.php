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
        

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Booking Details</h2>
                        <div class="bt-option">
                            <a href="/">Home</a>
                            <a href="../bookinglist">Bookings</a>
                            <span><?= $book->id ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Room Details Section Begin -->
    <section class="room-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="room-details-item">

                        <div class="rd-text">

                            <h2>Booking ID: #<?= $book->id ?></h2>
                            <h4><b>Rp <?= $book->totalprice ?></b></h4>
                            <br>
                            
                            

                            
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Booking ID:</td>
                                        <td><?= $book->id ?></td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Room Name:</td>
                                        <td><?= $room->names ?></td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Price:</td>
                                        <td>Rp <?= $room->price ?> <span> / night</span></td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Room Count:</td>
                                        <td><?= $book->totalroom ?> Room(s)</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Duration:</td>
                                        <td><?= $book->duration ?> Day(s)</td>
                                    </tr>

                                    <?php if ($book->paid == 0) { ?>
                                        <tr>
                                            <td class="r-o">Paid:</td>
                                            <td>No</td>
                                        </tr>
                                    <?php } else { ?>
                                        <tr>
                                            <td class="r-o">Paid:</td>
                                            <td>Yes</td>
                                        </tr>
                                    <?php } ?>
                                            
                                    <tr>
                                        <td class="r-o">Status:</td>
                                        <td><?= $book->stat ?></td>
                                    </tr>
                                    
                                </tbody>
                            </table>

                            <div class="room-details-item">
                                <div class="rd-text">
                                    <div class="rd-title">
                                        <div class="rdt-left">
                                            <a href="../payment/<?= $book->id ?>">Payment</a>
                                            <a href="../update/<?= $book->id ?>">Change</a>
                                            <a href="../delete/<?= $book->id ?>">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            <?php if ($book->paid == 1) { ?>
                                <?= $this->tag->image([$book->payment]) ?>
                            <?php } ?>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    
                    <?= $this->tag->image([$room->picture]) ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Room Details Section End -->

    






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
