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
        

    <div class="container">
        <div class="booking-form">
            <h3>Edit</h3>
            <h6 style="color:red">*Please refill your data</h6>
            <br>
            <form method ="POST" action="/admin/roomupdate" enctype="multipart/form-data">
                
                <div class="wrap-input100 validate-input" data-validate="Name is required" enctype="multipart/form-data">
					<span class="label-input100">Name</span>
					<input class="input100" type="text" name="name" placeholder="<?= $room->names ?>">
                </div>

                <div class="wrap-input100 validate-input" data-validate="Price is required">
					<span class="label-input100">Price</span>
					<input class="input100" type="text" name="price" placeholder="<?= $room->price ?>">
                </div>

                <div class="wrap-input100 validate-input" data-validate="Size is required">
					<span class="label-input100">Size</span>
					<input class="input100" type="text" name="size" placeholder="<?= $room->size ?>">
                </div>

                <div class="wrap-input100 validate-input" data-validate="Capacity is required">
					<span class="label-input100">Capacity</span>
					<input class="input100" type="text" name="capacity" placeholder="<?= $room->capacity ?>">
                </div>

                <div class="wrap-input100 validate-input" data-validate="Bed is required">
					<span class="label-input100">Bed</span>
					<input class="input100" type="text" name="bed" placeholder="<?= $room->bed ?>">
                </div>

                <div class="wrap-input100 validate-input" data-validate="Features is required">
					<span class="label-input100">Features</span>
					<input class="input100" type="text" name="features" placeholder="<?= $room->features ?>">
                </div>

                <div class="wrap-input100 validate-input" data-validate="Description is required">
					<span class="label-input100">Description</span>
					<input class="input100" type="text" name="description" placeholder="<?= $room->descriptions ?>">
                </div>

                <div class="wrap-input100 validate-input" data-validate="Room Count is required">
					<span class="label-input100">Available</span>
					<input class="input100" type="text" name="available" placeholder="<?= $room->available ?>">
                </div>

                <span class="label-input100"><?= $room->picture ?><br></span>
                <input type="file" name="picture" placeholder="">
                <br><br>

                <input class="input100" type="text" name="id" value="<?= $room->id ?> "placeholder="<?= $room->id ?>" hidden>

                <button type="submit">Edit</button>
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
