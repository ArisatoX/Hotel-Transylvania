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
        else
        {
            $available = Rooms::query()
            ->where('available > 0')
            ->execute();
            $this->view->rooms = $available;
        }
    }


}