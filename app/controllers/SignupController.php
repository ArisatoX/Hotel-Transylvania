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
            $this->flashSession->error("*Email already exist");
            $this->response->redirect('signup');
            return false;
            // echo "Sorry, the following problems were generated: Email already exist";
            // $this->view->disable();
        }
        else
        {
            if ($pass != $confirm)
            {
                $this->flashSession->error("*Password doesn't match");
                $this->response->redirect('signup');
                return false;
                // echo "Sorry, the following problems were generated: Password doesn't match";
                // $this->view->disable();
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
                $user->ismember = 0;

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
                
                // Log the user/admin in
                if ($success) 
                {
                    // Set a session
                    $this->session->set('auth_id', $user->id);
                    $this->session->set('auth_firstName', $user->firstName);
                    $this->session->set('auth_lastName', $user->lastName);
                    $this->session->set('auth_email', $user->email);
                    $this->session->set('auth_created', $user->created);
                    $this->session->set('auth_updated', $user->updated);
                    $this->session->set('auth_ismember', $user->ismember);
                    
                    // Go to User
                    if ($user->roles == 0) 
                    {
                        $this->response->redirect("/");
                    } 
                    // Go to Admin
                    else if ($user->roles == 1) 
                    {
                        return $this->response->redirect('admin');
                        // echo "ADMIN LOGGED IN:" . PHP_EOL;
                        // echo $this->session->get("auth_firstName") . $this->session->get("auth_lastName");
                        // $this->view->disable();
                    }
                    // Exit 
                    else 
                    {
                        return $this->response->redirect('login');
                    }
                } 
                else 
                {
                    return $this->response->redirect('signup/failedsignup');
                }
            }
        }
    }

    public function failedsignupAction()
    {
        
    }
}

