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
                $felhasznalo = \App\Models\Felhasznalok::model()->sql("SELECT * FROM " . \App\Models\Felhasznalok::tableName() . " WHERE email=:email", [':email' => $_POST['email']])->findOne();
                if ($felhasznalo) {
                    if (password_verify($_POST['jelszo'], $felhasznalo->jelszo)) {
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
        \Core\View::render('admin/belepes', ["hiba" => $hiba, 'action' => ''], 'admin');
    }

    public function kilepesAction() {
        session_destroy();
        header("Location: " . \Core\Router::getBaseUrl() . "admin/index");
    }

    //blog
    public function blogAction() {
        $this->checkBelepett();
        $action = "blog";
        $posts = \App\Models\Blog::model()->findAll();
        \Core\View::render('admin/blog', ["posts" => $posts, "action" => $action], 'admin');
    }

    //új poszt és poszt szerkesztése
    public function postAction() {
        $this->checkBelepett();
        $action = "blog";
        $post = null;
        $hiba = '';
        if (!empty($_GET['id'])) {
            $post = \App\Models\Blog::model()->findByPk($_GET['id']);
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $hir = $_POST;
            if (empty($_POST['cim'])) {
                $hiba .= 'A cím megadása kötelező<br>';
            }
            if (empty($_POST['leiras'])) {
                $hiba .= 'A leírás megadása kötelező';
            }
            if (empty($hiba)) {
                \App\Models\Blog::postMent($_POST, (isset($_GET['id']) ? $_GET['id'] : null));
                header("Location: " . \Core\Router::getBaseUrl() . "admin/blog");
            }
        }
        \Core\View::render('admin/post', ["post" => $post, "hiba" => $hiba, "action" => $action], 'admin');
    }

    //post törlése
    public function posttorolAction() {
        $this->checkBelepett();
        \App\Models\Blog::postTorol($_GET['id']);
        header("Location: " . \Core\Router::getBaseUrl() . "admin/blog");
    }

}
