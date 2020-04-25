<?php
declare(strict_types=1);

namespace App\Controllers;

use Phalcon\Paginator\Adapter\Model as PaginatorModel;
use App\Models\Rooms;

class RoomController extends ControllerBase
{
    public function indexAction() 
    {
        $rooms = Rooms::find();
        $this->view->rooms = $rooms;
        
        // $currentPage = (int) $_GET['page'];

        // $paginator = new PaginatorModel(array(
        //     "data"  => $rooms,
        //     "limit" => 3,
        //     "page"  => $currentPage
        //    ));
           
        //    $this->view->page = $paginator->paginate();

    }

    public function showAction($userId)
    {
        $conditions = ['id_user'=>$userId];
        $room = Rooms::findFirst([
        'conditions' => 'id= :id_user:',
        'bind' => $conditions,
        ]);
        $this->view->room = $room;
        
    }
}