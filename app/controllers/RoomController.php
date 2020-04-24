<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\Rooms;

class RoomController extends ControllerBase
{
    public function indexAction() 
    {
        $rooms = Rooms::find();
        $this->view->rooms = $rooms;
        
    }

    public function showAction($userId)
    {
        $conditions = ['id'=>$userId];
        $room = Rooms::findFirst([
        'conditions' => 'id=:id:',
        'bind' => $conditions,
        ]);
        $this->view->room = $room;
        
    }
}