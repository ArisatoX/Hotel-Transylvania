<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\Users;
use Phalcon\Security;

class SignupController extends ControllerBase
{
    
    public function indexAction()
    {
        
    }

    public function registerAction()
    {
        $user = new Users();

        // get value
        $firstName = $this->request->getPost('firstName', 'string');
        $lastName = $this->request->getPost('lastName', 'string');
        $email = $this->request->getPost('email', 'string');
        $pass = $this->request->getPost('pass', 'string');
        $confirm = $this->request->getPost('confirm', 'string');
        $country = $this->request->getPost('country', 'string');
        $phone = $this->request->getPost('phone', 'string');

        $exist = Users::findFirst(
            [
                'conditions' => 'email = :email:',
                'bind'       => [
                    'email' => $email,
                ],
            ]
        );

        if ($exist)
        {
            echo "Sorry, the following problems were generated: Email already exist";
            $this->view->disable();
        }
        else
        {
            if ($pass != $confirm)
            {
                echo "Sorry, the following problems were generated: Password doesn't match";
                $this->view->disable();
            }
            else
            {
                // set value
                $user->firstName = $firstName;
                $user->lastName = $lastName;
                $user->email = $email;
                $user->pass = $this->security->hash($pass);
                $user->country = $country;
                $user->phone = $phone;
                $user->active = 1;
                $user->created = time();
                $user->updated = time();

                // Check admin
                if (strpos($user->email, "@admin.com") !== false)
                {
                    $user->roles = 1; // Admin
                }
                else
                {
                    $user->roles = 0; // User
                }
                
                // Store and check for errors
                $success = $user->save();

                // passing the result to the view
                // $this->view->success = $success;

                if ($success) {
                    echo "Thanks for registering!";
                    $this->view->disable();
                } else {
                    echo "Sorry, the following problems were generated: " . implode('<br>', $user->getMessages());
                    $this->view->disable();
                }

                // passing a message to the view
                // $this->view->message = $message;
            }
        }

        
    }
}

