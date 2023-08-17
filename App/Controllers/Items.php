<?php

namespace App\Controllers;

use \Core\View;
use \App\Auth;

/**
 * Items controller (example)
 */
class Items extends Authenticated
{
    /**
     * Items index
     *
     * @return void
     */
    public function indexAction()
    {
        

        View::renderTemplate('Items/index.html');
    }
}
