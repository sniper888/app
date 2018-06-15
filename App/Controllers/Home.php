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
        $page = "index";
        $models = \App\Models\Blog::model()->findAll(4);
        \Core\View::render('index', ['kiscica' => $models, 'page' => $page]);
    }

    public function kapcsolatAction() {
        $page = "kapcsolat";
        \Core\View::render('kapcsolat', ['page' => $page]);
    }

    public function rolunkAction() {
        $page = "rolunk";
        \Core\View::render('rolunk', ['page' => $page]);
    }

    public function portfolioAction() {
        $page = "portfolio";
        \Core\View::render('portfolio', ['page' => $page]);
    }

}
