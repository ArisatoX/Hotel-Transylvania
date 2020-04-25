<?php

Namespace App\Models;

use Phalcon\Mvc\Model;

class Booking extends Model
{
    // variables
    public $id;
    public $id_user;
    public $id_room;
    public $totalroom;
    public $totalprice;
    public $payment;
    public $paid;
    public $stat;
    
}
