<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\User;

/**
 * Signup controller

 */
class Signup extends \Core\Controller
{
  /**
   * Show the signup page
   *
   * @return void
   */
  public function newAction()
  {
      View::renderTemplate('Signup/new.html');
  }

  /**
     * Sign up a new user
     *
     * @return void
     */
    public function createAction()
    {
        $user = new User($_POST);

        if ($user->save()) {

            //View::renderTemplate('Signup/success.html');
            //header('Location: http://' . $_SERVER['HTTP_HOST'] . '/signup/success', true, 303);
            //exit;
            $user->sendActivationEmail();
            $this->redirect('/signup/success');

        } else {

            View::renderTemplate('Signup/new.html', [
                'user' => $user
            ]);

        }
    }

    /**
     * Show signup success page
     * 
     * @return void
     */
    public function successAction()
    {
        View::renderTemplate('Signup/success.html'); 
    }

    /**
     * Activate a new account
     *
     * @return void
     */
    public function activateAction()
    {
        User::activate($this->route_params['token']);

        $this->redirect('/signup/activated');        
    }

    /**
     * Show the activation success page
     *
     * @return void
     */
    public function activatedAction()
    {
        View::renderTemplate('Signup/activated.html');
    }
}


