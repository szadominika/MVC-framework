<?php

namespace App\Controllers;

use \Core\View;

/**
 * Home controller
 */

class Home extends \Core\Controller
{

    /**
     * Before filter
     *
     * @return void
     */
    protected function before()
    {
      //  echo "(before) ";
        //return false; // just before() function will be executed 
    }

    /**
     * After filter
     *
     * @return void
     */
    protected function after()
    {
       // echo " (after)";
    }

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        //echo 'Hello from the index action in the Home controller!';
        /*View::render('Home/index.php', [
            'name' => 'Dave',
            'colours' => ['red', 'green', 'blue' , 'pink']
        ]);*/

        View::renderTemplate('Home/index.html', [
            'name' => 'Dominika Szaja',
            'colours' => ['red', 'blue', 'green', 'pink']
        ]);
    }
}
