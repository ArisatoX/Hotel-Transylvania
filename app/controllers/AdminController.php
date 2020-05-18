<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\Users;
use App\Models\Rooms;
use App\Models\Meetings;

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

    public function meetinglistAction()
    {
            $rooms = Meetings::find();
            $this->view->rooms = $rooms;
            
    }

    public function meetingcreateAction()
    {
        
    }
}