<?php

namespace App\Controllers;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class Admin extends \Core\Controller {

    private function checkBelepett() {
        if (!empty($_SESSION['belepett'])) {
            //be van lépve
            return true;
        } else {
            //nincs belépve
            header("Location: "
                    . \Core\Router::getBaseUrl()
                    . "admin/belepes");
        }
    }

    public function indexAction() {
        $this->checkBelepett();
        \Core\View::render('admin/aindex', [], 'admin');
    }

    public function belepesAction() {
        
        
        
        \Core\View::render('admin/belepes', [], 'admin');
    }

}
