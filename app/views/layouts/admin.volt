<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Hotel Transylvania</title>

        <!-- Load CSS -->
        {{ assets.outputCss() }}

    </head>
    <body>

        <header class="header-section header-normal">

        {% if session.has("auth_id") %}
            <!-- Logged in -->
            <div class="top-nav">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tn-right">
                                <div class="language-option">
                                    <span class="bk-btn">{{ session.get("auth_firstName")}}<i class="fa fa-angle-down"></i></span>
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

        {% else %}
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
        {% endif %}

        <!-- Logo -->
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">      
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <div class="logo">
                                    <a href="/">
                                        <img src="{{ url("img/icons/MainIcon.png") }}" alt="">
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
                                    <li><a href="admin/roomlist">Rooms</a></li>
                                    <li><a href="/">Meetings</a></li>
                                    
                                    {# <li><a href="#contact">Contact</a></li> #}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </header>

        <!-- Content -->
<<<<<<< HEAD:app/views/layouts/_mnt_f_programming_pbkk_fp-individu_app_views_admin_roomlist.volt.php
        

<div class="container">

    <br><br>

    
    <section class="hp-room-section">
        <div class="container-fluid">
            <div class="hp-room-items">
                <div class="row">

                    <!-- Room -->
                    <?php foreach ($rooms as $room) { ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="room-item">
                            <?= $this->tag->image([$room->picture]) ?>
                            <div class="ri-text">
                                <h4><?= $room->names ?></h4>
                                
                                <h3>Rp <?= $room->price ?><span> / night</span></h3>

                                
    
                                <a href="room/show/<?= $room->id ?>" class="primary-btn">Details</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    
                </div>
            </div>
        </div>
    </section>

    <div class="room-booking">
        <form method="get" action="../admin/roomcreate">
            <button type="submit">Create</button><br>
        </form>
    </div>

</div>


=======
        {% block content %} {% endblock %}
>>>>>>> e2f940c06281e2a71af1181dd727ed29cbaa45a2:app/views/layouts/admin.volt

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
        {{ assets.outputJs() }}

    </body>
</html>