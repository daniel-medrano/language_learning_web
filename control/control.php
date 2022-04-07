<?php

    require_once "libs/smarty-4.1.0/Config.php";

    class Control {
            private $configSmarty;
            private $action;

        
        function __construct () {
            $this->configSmarty = new Config();
            $this->action = null;
        }

        function index () {
            if (isset($_REQUEST["action"])) {
                $this->action = $_REQUEST["action"];
            }

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
                    $this->Show_open_login();
                    break;
                case "show_lessons":
                    $this->showLesson();
                    break;
                case "open_signup":
                    $this->Show_open_signup();
                    break;
                case "show_homepage":
                    $this->showHomepage();
                    break;
                default:
                $this->configSmarty->setDisplay("lessons.tpl");
                break;

            }

        }

        function showLesson () {
            $this->configSmarty->setDisplay("lessons.tpl");
            
        }

        function showLesson1 () {
            $this->configSmarty->setDisplay("lesson1.tpl");
        }

        function showLesson2 () {
            $this->configSmarty->setDisplay("lesson2.tpl");
        }

        function showLesson3 () {
            $this->configSmarty->setDisplay("lesson3.tpl");
        }
        function Show_open_login () {
            $this->configSmarty->setDisplay("login.tpl");
        }
        function Show_open_signup () {
            $this->configSmarty->setDisplay("signup.tpl");
        }
        function showHomepage () {
            $this->configSmarty->setDisplay("homepage.tpl");
        }
    }
?>