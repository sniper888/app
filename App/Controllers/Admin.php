<?php

namespace App\Controllers;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class Admin extends \Core\Controller {

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction() {

        \Core\View::render('admin/aindex', [], 'admin');
    }

}
