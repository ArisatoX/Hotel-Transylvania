<?php
declare(strict_types=1);

namespace App\Controllers;
use App\Models\Meetings;

class MeetingController extends ControllerBase
{

    public function indexAction()
    {
        $rooms = Meetings::find();
        $this->view->rooms = $rooms;
    }
    
}
