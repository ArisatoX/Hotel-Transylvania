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
        $names = $this->request->getPost('name', 'string');
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
        $room->names = $names;
        $room->price = $price;
        $room->memberprice = $memberprice;
        $room->size = $size;
        $room->capacity = $capacity;
        $room->bed = $bed;
        $room->features = $features;
        $room->descriptions = $description;
        $room->available = $available;
        $room->picture = $path;

        $success = $room->create();

        // echo $room->names . PHP_EOL . $room->price . PHP_EOL . $room->memberprice . PHP_EOL . $room->size . PHP_EOL . $room->capacity . PHP_EOL . $room->bed . PHP_EOL . $room->features. PHP_EOL . $room->descriptions. PHP_EOL . $room->available. PHP_EOL . $room->picture;
        // $this->view->disable();

        if ($success)
        {
            $this->response->redirect('admin/roomlist');
        }
        else
        {
            echo "failed";
            $this->view->disable();
        }
    }

    public function roomdeleteregisterAction()
    {
        $names = $this->request->getPost('name', 'string');

        $conditions = ['names'=>$names];
        $room = Rooms::findFirst([
        'conditions' => 'names= :names:',
        'bind' => $conditions,
        ]);

        $room->delete();

        $this->response->redirect('admin/roomlist');
    }

    public function roomshowAction($id)
    {
        $conditions = ['id'=>$id];
        $room = Rooms::findFirst([
        'conditions' => 'id= :id:',
        'bind' => $conditions,
        ]);
        $this->view->room = $room;
    }

    public function roomeditAction($id)
    {
        $conditions = ['id'=>$id];
        $room = Rooms::findFirst([
        'conditions' => 'id= :id:',
        'bind' => $conditions,
        ]);
        $this->view->room = $room;
    }

    public function roomupdateAction()
    {
        $id = $this->request->getPost('id', 'string');
        $names = $this->request->getPost('name', 'string');
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
        
        // Search Room
        $conditions = ['id'=>$id];
        $room = Rooms::findFirst([
        'conditions' => 'id= :id:',
        'bind' => $conditions,
        ]);
        $this->view->book = $room;

        // Update room
        $room->names = $names;
        $room->price = $price;
        $room->memberprice = $memberprice;
        $room->size = $size;
        $room->capacity = $capacity;
        $room->bed = $bed;
        $room->features = $features;
        $room->descriptions = $description;
        $room->available = $available;
        $room->picture = $path;

        // echo $id . PHP_EOL . $room->names . PHP_EOL . $room->price . PHP_EOL . $room->memberprice . PHP_EOL . $room->size . PHP_EOL . $room->capacity . PHP_EOL . $room->bed . PHP_EOL . $room->features. PHP_EOL . $room->descriptions. PHP_EOL . $room->available. PHP_EOL . $room->picture;
        // $this->view->disable();

        $success = $room->save();
        
        if ($success)
        {
            $this->response->redirect("../admin/roomlist");
        }
        else
        {
            echo "failed";
            $this->view->disable();
        }

    }

    public function meetinglistAction()
    {
            $rooms = Meetings::find();
            $this->view->rooms = $rooms;
            
    }

    public function meetingcreateAction()
    {
        $name = $this->request->getPost('name', 'string');
        $location;
        $capacity;
        $description;
        $hourPrice;
    }
}