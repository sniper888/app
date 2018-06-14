<?php

namespace App\Controllers;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class Home extends \Core\Controller {

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction() {
        $models = \App\Models\Blog::model()->findAll(4);
        \Core\View::render('index', ['kiscica' => $models]);
    }

    public function kapcsolatAction() {
        \Core\View::render('kapcsolat');
    }

    public function rolunkAction() {
        \Core\View::render('rolunk');
    }

}
