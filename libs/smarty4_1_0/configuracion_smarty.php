<?php


require_once('libs/smarty4_1_0/Smarty.class.php');
    class configuracion_smarty{
        //Atributos 
        private $instSmarty;

        function __construct(){      //condtructores
            $this->instSmarty = new Smarty();
            $this->Inicializar();

        }

        function Inicializar(){
            $this->instSmarty->template_dir = 'view/templates';
            $this->instSmarty->compile_dir  = 'view/templates_c';
            $this->instSmarty->cache_dir    = 'control/cache';
            $this->instSmarty->config_dir   = 'control/configs';
        }

        function set_assign($variable,$valor){

        }
        function set_display($pantalla){
            $this->instSmarty->display($pantalla);
        }




    }





?>