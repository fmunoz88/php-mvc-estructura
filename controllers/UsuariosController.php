<?php

    class UsuariosController extends Controller
    {
        public $conectar;
        public $adapter;
     
        public function __construct()
        {
            parent::__construct();
          
            $this->conectar = new Conectar();
            $this->adapter = $this->conectar->conexion();
        }
        
        public function index()
        {
            $usuarios = new Usuarios($this->adapter);
            $allUsers = $usuarios->getAll();

            $this->view('index', array(
                'dataProvider' => $usuarios,
                'allUsers' => $allUsers,
                'prueba' => 'Kraimoz CORP.'
            ));
        }
        
        public function create()
        {
            $model = new Usuarios($this->adapter);

            if (isset($_POST['post'])) {

                //Se puede mejorar el seteo de los atributos con una function que los recorrar con el post.
                //Tienen que llamarse igual para que funcione.
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $email = $_POST['email'];
                $password = md5($_POST['password']);
            
                $model->setNombre($nombre);
                $model->setApellido($apellido);
                $model->setEmail($email);
                $model->setPassword($password);

                if ($model->save()) {
                    $this->redirect('usuarios', 'index');
                } else {
                    $this->redirect('default', 'error');
                }
            }

            $this->view('_form', array(
                'model' => $model,
                'prueba' => 'Kraimoz CORP.'
            ));
        }
        
        public function delete()
        {
            if ($_GET['id']) {
                $id = (int) $_GET['id'];
                
                $usuario = new Usuarios($this->adapter);
                if ($usuario->deleteById($id)) {
                    $this->redirect('Usuarios', 'index');
                } else {
                    $this->redirect('default', 'error');
                }
            }
        }
    }
