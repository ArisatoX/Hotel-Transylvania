<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\Rooms;
use App\Models\Booking;

class BookingController extends ControllerBase
{   

    public function indexAction()
    {
        if (!$this->session->has('auth_id'))
        {
            return $this->response->redirect('login');
        }
    }

    public function SuccessAction()
    {

    }

    public function listAction()
    {
        // get data
        $capacity = $this->request->getPost('capacity', 'string');
        $totalroom = $this->request->getPost('room', 'string');
        
        $query = $this->modelsManager->createQuery("SELECT * FROM App\Models\Rooms x WHERE x.available >= $totalroom AND x.capacity >= $capacity");
        $available = $query->execute();

        if ($available->count() > 0)
        {
            $this->view->rooms = $available;
            $this->view->flag = 1;
            $this->view->totalroom = $totalroom;
        }
        else
        {
            $this->view->flag = 0;
        }
    }

    public function createAction()
    {
        // Get data
        $id_user = $this->request->getPost('id_user', 'string');
        $id_room = $this->request->getPost('id_room', 'string');
        $totalroom = $this->request->getPost('totalroom', 'string');
        $price = $this->request->getPost('price', 'string');

        // echo $id_user . PHP_EOL . $id_room . PHP_EOL . $totalroom . PHP_EOL . ($totalroom * $price);

        // New booking
        $booking = new Booking();

        // Set Booking
        $booking->id_user = $id_user;
        $booking->id_room = $id_room;
        $booking->totalroom = $totalroom;
        $booking->totalprice = $totalroom * $price;
        $booking->payment = ' ';
        $booking->paid = 0;
        $booking->stat = "Waiting for payment";

        // Change room availability
    
        $query = $this->modelsManager->createQuery("UPDATE App\Models\Rooms SET available = available - $totalroom WHERE id = $id_room");
        $query->execute();

        // Save booking
        $success = $booking->save();

        if ($success)
        {
            $this->response->redirect('booking/success');
        }
        else
        {
            echo "Sorry, the following problems were generated: " . implode('<br>', $booking->getMessages());
            $this->view->disable();
        }
    }

    




}