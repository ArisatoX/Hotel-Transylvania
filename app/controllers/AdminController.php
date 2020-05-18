<?php
declare(strict_types=1);

namespace App\Controllers;

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

    public function roomdeleteAction()
    {
         
    }

    public function roomcreateregisterAction()
    {
        $name = $this->request->getPost('name', 'string');
        $price = $this->request->getPost('price', 'string');
        $size = $this->request->getPost('size', 'string');
        $capacity = $this->request->getPost('capacity', 'string');
        $bed = $this->request->getPost('bed', 'string');
        $features = $this->request->getPost('features', 'string');
        $description = $this->request->getPost('description', 'string');
        $available = $this->request->getPost('available', 'string');
        $memberprice = $price * 0.95;
        
        $path = 'img/room/';

        if($this->request->hasFiles())
        {
            $picture = $this->request->getUploadedFiles()[0];
            $allow = array('jpeg', 'png', 'jpg');
            $picturename = $picture->getName();
            $extension = pathinfo($picturename, PATHINFO_EXTENSION);

             // Checking extension
             if (in_array($extension, $allow))
             {
                 $path = $path . $picturename;
                 $picture->moveTo($path);
             }
        }

        // New room
        $room = new Rooms();

        // Set room
        $room->name = $name;
        $room->price = $price;
        $room->memberprice = $memberprice;
        $room->size = $size;
        $room->capacity = $capacity;
        $room->bed = $bed;
        $room->features = $features;
        $room->descriptions = $description;
        $room->available = $available;
        $room->picture = $path;

        $savestatus = $room->save();

        echo $savestatus;
        $this->view->disable;

        // echo $path. PHP_EOL . $name . PHP_EOL . $price . PHP_EOL . $memberprice . PHP_EOL . $size . PHP_EOL . $capacity . PHP_EOL . $bed;
        // $this->view->disable();

        if ($savestatus)
        {
            echo "success";
            $this->view->disable();
        }
        else
        {
            echo "failed";
            $this->view->disable();
        }
    }

    public function roomdeleteregisterAction()
    {
        $id = $this->request->getPost('id', 'string');

        $conditions = ['id'=>$id];
        $room = Rooms::findFirst([
        'conditions' => 'id= :id:',
        'bind' => $conditions,
        ]);

        $room->delete();

        echo "deleted";
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