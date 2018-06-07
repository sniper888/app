<?php

namespace Core;

/**
 * View
 *
 * PHP version 7.0
 */
class View {

    /**
     * Render a view file
     *
     * @param string $view  The view file
     * @param array $args  Associative array of data to display in the view (optional)
     *
     * @return void
     */
    public static function render($view, $args = [], $layout = "main", $return = false) {
        $output = self::renderPartial($view, $args, true);
        if (($layoutFile = self::getLayoutFile($layout)) !== false)
            $output = self::renderInternal($layoutFile, array('content' => $output), true);
        if ($return)
            return $output;
        else
            echo $output;
    }

    public static function renderPartial($view, $data = null, $return = false) {
        if (($viewFile = self::getViewFile($view)) !== false) {
            $output = self::renderInternal($viewFile, $data, true);

            if ($return)
                return $output;
            else
                echo $output;
        } else
            throw new \Exception("$view not found");
    }

    public static function renderInternal($_viewFile_, $_data_ = null, $_return_ = false) {
        // we use special variable names here to avoid conflict when extracting data
        if (is_array($_data_))
            extract($_data_, EXTR_PREFIX_SAME, 'data');
        else
            $data = $_data_;
        if ($_return_) {
            ob_start();
            ob_implicit_flush(false);
            require($_viewFile_);
            return ob_get_clean();
        } else
            require($_viewFile_);
    }

    public static function getLayoutFile($view) {
        $file = dirname(__DIR__) . "/App/Views/layouts/$view.php";
        if (is_readable($file)) {
            return $file;
        } else {
            return false;
        }
    }

    public static function getViewFile($view) {
        $file = dirname(__DIR__) . "/App/Views/$view.php";
        if (is_readable($file)) {
            return $file;
        } else {
            return false;
        }
    }

}
