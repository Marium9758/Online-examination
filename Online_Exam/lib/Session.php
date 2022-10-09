<?php

class Session {

    public static function init() {
        session_start();
    }

    public static function set($key, $val) {
        $_SESSION[$key] = $val;
    }

    public static function get($key) {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        } else {
            return FALSE;
        }
    }

    public static function checkAdminSession() {
        self::init();
        if (self::get('adminLogin') == FALSE) {
            self::destroy();
            header("Location:adminLogin.php");
        }
    }

    public static function checkAdminLogin() {
        self::init();
        if (self::get('adminLogin') == TRUE) {
            header("Location:index.php");
        }
    }

    public static function checkSession() {
        if (self::get('login') == FALSE) {
            self::destroy();
            header("Location:index.php");
        }
    }

    public static function checkLogin() {
        if (self::get('login') == TRUE) {
            header("Location:exam.php");
        }
    }

    public static function destroy() {
        session_destroy();
        session_unset();
    }

}

?>