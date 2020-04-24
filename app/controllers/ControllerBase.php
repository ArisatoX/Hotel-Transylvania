<?php
declare(strict_types=1);

namespace App\Controllers;

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    // Implement common logic

    // Set CSS and JS
    public function onConstruct(){

        //Remote
        $this->assets->addCss("https://fonts.googleapis.com/css?family=Lora:400,700&display=swap", false);
        $this->assets->addCss("https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap");

        // Local
        $this->assets->addCss("css/bootstrap.min.css", true);
        $this->assets->addCss("css/font-awesome.min.css");
        $this->assets->addCss("css/elegant-icons.css");
        $this->assets->addCss("css/flaticon.css");
        $this->assets->addCss("css/owl.carousel.min.css");
        $this->assets->addCss("css/nice-select.css");
        $this->assets->addCss("css/jquery-ui.min.css");
        $this->assets->addCss("css/magnific-popup.css");
        $this->assets->addCss("css/slicknav.min.css");
        $this->assets->addCss("css/style.css");

        $this->assets->addCss("fonts/font-awesome-4.7.0/css/font-awesome.min.css");
        $this->assets->addCss("fonts/Linearicons-Free-v1.0.0/icon-font.min.css");
        $this->assets->addCss("vendor/animate/animate.css");
        $this->assets->addCss("vendor/css-hamburgers/hamburgers.min.css");
        $this->assets->addCss("vendor/select2/select2.min.css");
        $this->assets->addCss("css/form/util.css");
        $this->assets->addCss("css/form/main.css");
        
        $this->assets->addJs("js/jquery-3.3.1.min.js", true);
        $this->assets->addJs("js/bootstrap.min.js");
        $this->assets->addJs("js/jquery.magnific-popup.min.js");
        $this->assets->addJs("js/jquery.nice-select.min.js");
        $this->assets->addJs("js/jquery-ui.min.js");
        $this->assets->addJs("js/jquery.slicknav.js");
        $this->assets->addJs("js/owl.carousel.min.js");
        $this->assets->addJs("js/main.js");
        
        $this->assets->addJs("vendor/jquery/jquery-3.2.1.min.js");
        $this->assets->addJs("vendor/bootstrap/js/popper.js");
        $this->assets->addJs("vendor/bootstrap/js/bootstrap.min.js");
        $this->assets->addJs("vendor/select2/select2.min.js");
        $this->assets->addJs("js/form/main.js");
        
    }
}
