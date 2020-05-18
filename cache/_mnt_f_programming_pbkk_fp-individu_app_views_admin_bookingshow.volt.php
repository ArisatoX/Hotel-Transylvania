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
                    <div class="col-lg-8">      
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li><a href="/admin/roomlist">Rooms</a></li>
                                    <li><a href="/admin/meetinglist">Meetings</a></li>
                                    <li><a href="#contact">Contact Us</a></li>
                                    
                                    
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
                        <h2>Validation</h2>
                        <div class="bt-option">
                            <a href="../roomlist">Room List</a>
                            <a href="../bookinglist">Validation List</a>
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
                <div class="col-lg-8">
                    <div class="room-details-item">
                        <div class="rd-text">

                            <?php if ($book->stat == 'Payment in process') { ?>

                                <div class="rd-title">
                                    <h3>Booking #<?= $book->id ?></h3>
                                    <div class="rdt-right">
                                        <div class="rating">
                                            
                                        </div>
                                        <a href="../bookingvalidation/<?= $book->id ?>">Verify</a>
                                    </div>
                                </div>
                            
                            <?php } ?>
                                

                            
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">ID User:</td>
                                        <td><?= $book->id_user ?> sqm</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">ID Room:</td>
                                        <td><?= $book->id_room ?></td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Duration:</td>
                                        <td><?= $book->duration ?></td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Total Room:</td>
                                        <td><?= $book->totalroom ?></td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Total Price:</td>
                                        <td><?= $book->totalprice ?></td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Status:</td>
                                        <td><?= $book->stat ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <?php if ($book->stat != 'Waiting for payment') { ?>
                            <?= $this->tag->image([$book->payment]) ?>
                        <?php } ?>

                    </div>
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
