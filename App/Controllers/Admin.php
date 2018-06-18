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
        $hiba = '';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST['email'])) {
                $hiba .= 'A e-mail kitöltése kötelező!<br>';
            }
            if (empty($_POST['jelszo'])) {
                $hiba .= 'A jelszó kitöltése kötelező!<br>';
            }
            if (empty($hiba)) {
                $felhasznalo = false;
                if ($felhasznalo) {
                    if (password_verify($_POST['jelszo'], $felhasznalo['jelszo'])) {
                        //helyes jelszó
                        $_SESSION['belepett'] = true;
                        header("Location: " . \Core\Router::getBaseUrl() . "admin/index");
                    } else {
                        $hiba .= 'Hibás név vagy jelszó!';
                    }
                } else {
                    //nincs felhasználó
                    $hiba .= 'Hibás név vagy jelszó!';
                }
            }
        }
        View::render('admin/belepes', ["hiba" => $hiba, 'action' => ''], 'admin');
    }

}
