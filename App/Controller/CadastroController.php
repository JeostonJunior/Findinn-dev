<?php
require 'App/Model/Usuario.php';
require "IController.php";

class CadastroController implements IController
{

    public function Controller()
    {
        require 'App/View/Cadastro.php';
    }
}
