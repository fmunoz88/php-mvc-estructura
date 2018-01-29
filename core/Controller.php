<?php 

    class Controller
    {
        public function __construct()
        {
            require_once 'Conectar.php';
            require_once 'EntidadBase.php';
            require_once 'Model.php';
            
            foreach (glob("models/*.php") as $file) {
                require_once $file;
            }
        }
        
        public function view($view, $data)
        {
            foreach ($data as $id_assoc => $value) {
                ${$id_assoc} = $value;
                
                if ($id_assoc === 'dataProvider' || $id_assoc === 'model') {
                    //Get name class from dataProvider
                    $nameClass = get_class($value);
                }
            }

            require_once 'core/ViewsHelper.php';
            $helper = new ViewsHelper();
            
            require_once 'views/'.$nameClass.'/'.$view.'.php';
        }
        
        public function redirect($controller = CONTROLLER_DEFAULT, $action = ACTION_DEFAULT)
        {
            header("Location: index.php?controller=".$controller."&action=".$action);
        }
    }
