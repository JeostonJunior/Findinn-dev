<?php

require_once 'App/Model/Usuario.php';
require_once 'IController.php';

class UserController implements IController
{
    private $usuario;

    public function __construct()
    {
        $this->usuario = new Usuario();
    }

    public function Controller()
    {
        $this->usuario->setnome($_POST['nome']);
        $this->usuario->setCpf($_POST['cpf']);
        $this->usuario->setTel($_POST['telefone']);
        $this->usuario->setsenha($_POST['senha']);
        $this->usuario->setEmail($_POST['email']);
        $this->usuario->setpais($_POST['pais']);

        $this->usuario->cadastrarUsuario();

        require_once 'App/View/UserPage.php';
    }
}
