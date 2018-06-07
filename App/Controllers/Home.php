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

        $cim = "Ez itt a főoldal";
        $varosok = \App\Models\Varos::model()->findAll();
        \Core\View::render('index', ["valtozo" => $cim, "varosok" => $varosok]);
    }

    public function kapcsolatAction() {
        \Core\View::render('kapcsolat');
    }

}
