<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\Users;
use App\Models\Rooms;

class AdminController extends ControllerBase
{
    public function indexAction()
    {
        
    }

    public function roomlistAction()
    {
            $rooms = Rooms::find();
            $this->view->rooms = $rooms;
            
    }

    public function roomcreateAction()
    {
        
    }
}