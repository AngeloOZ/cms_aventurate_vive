<?php
require_once 'ruteo.php';

class App
{

    function __construct()
    {
        $rutasPage = ["galeria", "tours", "contactos", "inicio"];
        $rutasAdmin = ["admin", "admin-galeria", "admin-tours", "admin-email", "admin-login", "admin-lockscreen"];
        $ruteo = new Ruteo();

        if (in_array($ruteo->get_controlador(), $rutasPage)) {
            $this->controlador = 'pageViewsController';
            $this->method = $ruteo->get_controlador();
            if ($ruteo->get_method() === "index") {
                $this->params = [];
            } else {
                $this->params[] = $ruteo->get_method();
            }
        } else {
            $patron = ['/_/', '/-/'];
            $this->controlador = preg_replace($patron, "", $ruteo->get_controlador()) . 'Controller';
            $this->method = $ruteo->get_method();
            $this->params = $ruteo->get_params();
        }
        $this->load_session();
        $this->load_language();
        $this->load_controller();
    }

    function load_controller()
    {
        $GLOBALS['variable_super_global_secret'] = "Hola mundo";
        $path = CONTROLLERS . $this->controlador . '.php';
        if (file_exists($path)) {
            require_once $path;
            $class = new $this->controlador();
            if (method_exists($class, $this->method)) {
                if (empty($this->params)) {
                    call_user_func([$class, $this->method]);
                } else {
                    call_user_func_array([$class, $this->method], $this->params);
                }
            } else {
                $this->page_not_found(402);
            }
        } else {
            $this->page_not_found();
        }
    }

    function load_language()
    {
        if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
            $idioma = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
            if (isset($_GET["lang"])) {
                $idioma = $_GET["lang"];
                setcookie("language", $idioma, time() + (86400 * 30), '/');
                $_SESSION["language"] = $idioma;
                header("location: " . URL);
            } else {
                if (isset($_COOKIE['language']) && !empty($_COOKIE['language'])) {
                    $_SESSION["language"] = $_COOKIE['language'];
                } else {
                    setcookie("language", $idioma, time() + (86400 * 30), '/');
                    $_SESSION["language"] = $idioma;
                }
            }
            $this->load_file_language($_SESSION["language"]);
        }
    }

    function load_file_language($aux)
    {
        $filename = LANGUAGES . "lang-{$aux}.json";
        global $lang;
        $lang = json_decode(file_get_contents($filename), true);
    }

    function load_session()
    {
        session_start();
    }

    function page_not_found($code = 404)
    {
        echo "<h1>Error $code</h1>";
    }
}
