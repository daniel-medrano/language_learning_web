<?php

    session_start();

    require_once "libs/smarty-4.1.0/Config.php";
    require_once "model/UsersModel.php";

    class Control {
        private $configSmarty;
        private $action;
        private $usersModel;

        
        function __construct () {
            $this->configSmarty = new Config();
            $this->action = null;
            $this->usersModel = new UsersModel();
        }

        function index () {
            if (isset($_REQUEST["action"])) {
                $this->action = $_REQUEST["action"];
            }

            $this->checkSession();

            switch ($this->action) {
                case "show_lesson1":
                    $this->showLesson1();
                    break;
                case "show_lesson2":
                    $this->showLesson2();
                    break;                
                case "show_lesson3":
                    $this->showLesson3();
                    break;
                case "open_login":
                    $this->showLogin();
                    break;
                case "show_lessons":
                    $this->showLessons();
                    break;
                case "open_signup":
                    $this->showSignup();
                    break;
                case "show_home":
                    $this->showHome();
                    break;
                case "login_submission":
                    $this->checkLogin();
                    break;
                case "signup_submission":
                    $this->registerUser();
                    break;
                default:
                $this->showHome();
                break;

            }

        }


        function checkLogin() {
            // Se recuperan el user y el password del POST.
            $username = $_POST["username"];
            $password = $_POST["password"];
            // Se usa el model para validar los datos y devuelve una array con el registro de la BD.
            $results = $this->usersModel->validateLogin($username, $password);
            // Se valida si devolvio algo, si no devolvio nada significa que el username o password son incorrectos o inexistentes.
            if (sizeof($results) != 0) {
                // Se guardan los datos del registro en la sesión.
                $_SESSION["username"] = $username;
                $_SESSION["user_id"] = $results[0]["user_id"];
                $_SESSION["name"] = $results[0]["name"];
                // Se le manda el view o la vista al usuario.
                $this->showLessons();
            } else {
                $this->showLogin();
            }
        }
        
        // Crea un nuevo usuario.
        function registerUser() {
            // Se obtienen los datos del POST.
            $name = $_POST["name"];
            $last_name = $_POST["last_name"];
            $username = $_POST["username"];
            $password = $_POST["password"];          
            // Con ayuda del modelo se crea el usuario.
            $registered = $this->usersModel->create($name, $last_name, $username, $password);
            // Se verifica si el usuario se creo y muestra en el view lo que corresponda.
            if ($registered) {
                $this->showLogin();
            } else {
                $this->showSignup();
            }
        }

        
        function checkSession() {
            if (!isset($_SESSION["time"])) {
                $_SESSION["time"] = time();

            } else if (time() - $_SESSION["time"] > 300) {
                session_destroy();
                header("Location: index.php");
                exit;
            }
            $_SESSION["time"] = time();
        }

        
        //------------------------------------------------------------------------
        // MÉTODOS PARA EL VIEW 
        //------------------------------------------------------------------------

        // Muestra la pantalla principal de las lecciones.
        function showLessons() {
            $this->configSmarty->setAssign("isLoggedIn", true);
            $this->configSmarty->setDisplay("lessons.tpl");            
        }
        // Muestra la pantalla de la leccion de frutas.
        function showLesson1() {
            $this->configSmarty->setDisplay("lesson1.tpl");
        }
        // Muestra la pantalla de la leccion de numeros.
        function showLesson2() {
            $this->configSmarty->setDisplay("lesson2.tpl");
        }
        // Muestra la pantalla de la leccion de colores.
        function showLesson3() {
            $this->configSmarty->setDisplay("lesson3.tpl");
        }
        // Muestra la pantalla para que el usuario inicie seccion.
        function showLogin() {
            $this->configSmarty->setDisplay("login.tpl");
        }

        // Muestra la pantalla para que el usuario se registre.
        function showSignup() {
            if (isset($_SESSION["user_id"])) {
                $this->configSmarty->setAssign("isLoggedIn", true);
            } else {
                $this->configSmarty->setAssign("isLoggedIn", false);
            }
            $this->configSmarty->setDisplay("signup.tpl");
        }
         // Muestra la pantalla que accede por primera vez.
        function showHome() {
            if (isset($_SESSION["user_id"])) {
                $this->configSmarty->setAssign("isLoggedIn", true);
            } else {
                $this->configSmarty->setAssign("isLoggedIn", false);
            }
            $this->configSmarty->setDisplay("home.tpl");
        }

        
    }
?>