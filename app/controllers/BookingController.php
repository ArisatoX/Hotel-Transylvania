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

    public function successbookAction()
    {

    }

    public function successdeleteAction()
    {

    }

    public function bookinglistAction()
    {
        $getUserId = $this->session->get('auth_id');

        $query = $this->modelsManager->createQuery("SELECT * FROM App\Models\Booking x WHERE x.id_user = $getUserId");
        $booking = $query->execute();

        if ($booking->count() > 0)
        {
            $this->view->booking = $booking;
            $this->view->flag = 1;
        }
        else
        {
            $this->view->flag = 0;
        }
    }

    public function listAction()
    {
        // get data
        $duration = $this->request->getPost('duration', 'string');
        $capacity = $this->request->getPost('capacity', 'string');
        $totalroom = $this->request->getPost('room', 'string');
        
        $query = $this->modelsManager->createQuery("SELECT * FROM App\Models\Rooms x WHERE x.available >= $totalroom AND x.capacity >= $capacity");
        $available = $query->execute();

        if ($available->count() > 0)
        {
            $this->view->rooms = $available;
            $this->view->flag = 1;
            $this->view->totalroom = $totalroom;
            $this->view->duration = $duration;
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
        $duration = $this->request->getPost('duration', 'string');
        $totalroom = $this->request->getPost('totalroom', 'string');
        $totalprice = $this->request->getPost('totalprice', 'string');

        // echo $id_user . PHP_EOL . $id_room . PHP_EOL . $totalroom . PHP_EOL . ($totalroom * $price);

        // New booking
        $booking = new Booking();

        // Set Booking
        $booking->id_user = $id_user;
        $booking->id_room = $id_room;
        $booking->duration = $duration;
        $booking->totalroom = $totalroom;
        $booking->totalprice = $totalprice;
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
            $this->response->redirect('booking/successbook');
        }
        else
        {
            echo "Sorry, the following problems were generated: " . implode('<br>', $booking->getMessages());
            $this->view->disable();
        }
    }

    public function confirmationAction()
    {
        // Get data
        $id_user = $this->request->getPost('id_user', 'string');
        $id_room = $this->request->getPost('id_room', 'string');
        $duration = $this->request->getPost('duration', 'string');
        $totalroom = $this->request->getPost('totalroom', 'string');
        $price = $this->request->getPost('price', 'string');
        $totalprice = $totalroom * $price * $duration;
        
        // Search room info
        $conditions = ['id_room'=>$id_room];
        $room = Rooms::findFirst([
        'conditions' => 'id= :id_room:',
        'bind' => $conditions,
        ]);
        $this->view->room = $room;  

        $this->view->id_user = $id_user;
        $this->view->id_room = $id_room;
        $this->view->duration = $duration;
        $this->view->totalroom = $totalroom;
        $this->view->price = $price;
        $this->view->totalprice = $totalprice;
    }

    public function showAction($id_booking)
    {
        $conditions = ['id_book'=>$id_booking];
        $book = Booking::findFirst([
        'conditions' => 'id= :id_book:',
        'bind' => $conditions,
        ]);
        $this->view->book = $book;

        $conditions = ['id_room'=>$book->id_room];
        $room = Rooms::findFirst([
        'conditions' => 'id= :id_room:',
        'bind' => $conditions,
        ]);
        $this->view->room = $room;         
    }

    public function updateAction($id_booking)
    {
        $conditions = ['id_book'=>$id_booking];
        $book = Booking::findFirst([
        'conditions' => 'id= :id_book:',
        'bind' => $conditions,
        ]);

        $conditions = ['id_room'=>$book->id_room];
        $room = Rooms::findFirst([
        'conditions' => 'id= :id_room:',
        'bind' => $conditions,
        ]);
         
        if ($book->paid == 0)
        {
            $this->view->book = $book;
            $this->view->room = $room; 
        }
        else
        {
            echo "can't change";
            $this->view->disable();
        }
    }

    public function updatelistAction()
    {
        // get data
        $duration = $this->request->getPost('duration', 'string');
        $capacity = $this->request->getPost('capacity', 'string');
        $totalroom = $this->request->getPost('room', 'string');

        // old data
        $id_book = $this->request->getPost('id_book', 'string');
        $old_totalroom = $this->request->getPost('old_totalroom', 'string');
        $old_id_room = $this->request->getPost('old_id_room', 'string');
        
        $query = $this->modelsManager->createQuery("SELECT * FROM App\Models\Rooms x WHERE x.available >= $totalroom AND x.capacity >= $capacity");
        $available = $query->execute();

        if ($available->count() > 0)
        {
            // new data
            $this->view->rooms = $available;
            $this->view->flag = 1;
            $this->view->totalroom = $totalroom;
            $this->view->duration = $duration;

            // old data
            $this->view->id_book = $id_book;
            $this->view->old_totalroom = $old_totalroom;
            $this->view->old_id_room = $old_id_room;
        }
        else
        {
            $this->view->flag = 0;
        }
    }

    public function updateconfirmationAction()
    {
        // Get data
        $id_user = $this->request->getPost('id_user', 'string');
        $id_room = $this->request->getPost('id_room', 'string');
        $duration = $this->request->getPost('duration', 'string');
        $totalroom = $this->request->getPost('totalroom', 'string');
        $price = $this->request->getPost('price', 'string');
        $totalprice = $totalroom * $price * $duration;

        // old data
        $id_book = $this->request->getPost('id_book', 'string');
        $old_totalroom = $this->request->getPost('old_totalroom', 'string');
        $old_id_room = $this->request->getPost('old_id_room', 'string');
        
        // Search room info
        $conditions = ['id_room'=>$id_room];
        $room = Rooms::findFirst([
        'conditions' => 'id= :id_room:',
        'bind' => $conditions,
        ]);
        $this->view->room = $room;  

        // new data
        $this->view->id_user = $id_user;
        $this->view->id_room = $id_room;
        $this->view->duration = $duration;
        $this->view->totalroom = $totalroom;
        $this->view->price = $price;
        $this->view->totalprice = $totalprice;

        // old data
        $this->view->id_book = $id_book;
        $this->view->old_totalroom = $old_totalroom;
        $this->view->old_id_room = $old_id_room;
    }

    public function updatefixAction()
    {
        // Get data
        $id_room = $this->request->getPost('id_room', 'string');
        $duration = $this->request->getPost('duration', 'string');
        $totalroom = $this->request->getPost('totalroom', 'string');
        $totalprice = $this->request->getPost('totalprice', 'string');

        // old data
        $id_book = $this->request->getPost('id_book', 'string');
        $old_totalroom = $this->request->getPost('old_totalroom', 'string');
        $old_id_room = $this->request->getPost('old_id_room', 'string');

        // Change old room availability
    
        $query = $this->modelsManager->createQuery("UPDATE App\Models\Rooms SET available = available + $old_totalroom WHERE id = $old_id_room");
        $query->execute();

        // Search booking
        $conditions = ['id_book'=>$id_book];
        $book = Booking::findFirst([
        'conditions' => 'id= :id_book:',
        'bind' => $conditions,
        ]);
        $this->view->book = $book;

        // echo $id_book;
        // $this->view->disable();

        // Set Booking
        $book->id_room = $id_room;
        $book->duration = $duration;
        $book->totalroom = $totalroom;
        $book->totalprice = $totalprice;

        // Search new room for update
        $conditions = ['id_room'=>$book->id_room];
        $room = Rooms::findFirst([
        'conditions' => 'id= :id_room:',
        'bind' => $conditions,
        ]);

        // Change new room availability
    
        $query = $this->modelsManager->createQuery("UPDATE App\Models\Rooms SET available = available - $totalroom WHERE id = $room->id");
        $query->execute();

        // Save booking
        $success = $book->save();

        if ($success)
        {
            $this->response->redirect('booking/successbook');
        }
        else
        {
            echo "Sorry, the following problems were generated: " . implode('<br>', $book->getMessages());
            $this->view->disable();
        }
    }

    public function deleteAction($bookingId)
    {
        $conditions = ['id_book'=>$bookingId];
        $book = Booking::findFirst([
        'conditions' => 'id= :id_book:',
        'bind' => $conditions,
        ]);

        $conditions = ['id_room'=>$book->id_room];
        $room = Rooms::findFirst([
        'conditions' => 'id= :id_room:',
        'bind' => $conditions,
        ]);
        $this->view->room = $room;  
        
        // Delete booking
        if ($book->paid == 0)
        {
            // Update the room stock
            $room->available += $book->totalroom;
            $room->save();

            $book->delete();

            $this->response->redirect('booking/successdelete');
        }
        else
        {
            echo "can't delete";
            $this->view->disable();
        }
        
    }

    

    




}