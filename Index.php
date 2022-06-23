<?php

//testa a variável url que veio lá do htaccess
if (isset($_GET['url'])) //se estiver preenchida, pega o valor
{
    $url =  strtoupper($_GET['url']);
    // echo $url;
    switch ($url) {
        case "USERPAGE":
            require "App/Controller/UserPageController.php";
            $UserPageController = new UserPageController();
            $UserPageController->Controller();
            break;
        case "CADASTRO":
            require "App/Controller/CadastroController.php";
            $CadastroController = new CadastroController();
            $CadastroController->Controller();
            break;
        case "AUTHUSER":
            require "App/Controller/UserController.php";
            $userController = new UserController();
            $userController->Controller();
            break;
        case "TESTE":
            require "App/View/teste.php";
            break;

            // case "USERPAGE":
            //     require "Controller/UserPageController.php";
            //     $UserController = new UserPageController();
            //     $UserController->Controller();
            //     break;
            // case "CADASTRARACOMODACAO":
            //     require "Controller/CadastroAcomodacaoController.php";
            //     $CadastrarAcomodacao = new CadastroAcomodacaoController();
            //     $CadastrarAcomodacao->Controller();
            //     $CadastrarAcomodacao->CadastrarAcomodacao();
            //     break;
            // case "LOGIN":
            //     require "Controller/LoginController.php";
            //     $LoginController = new LoginController();
            //     $LoginController->Controller();
            //     break;
            // case "ACOMODACOES":
            //     require "Controller/AcomodacaoController.php";
            //     $AcomodacaoController = new AcomodacaoController();
            //     $AcomodacaoController->Controller();
            //     break;
            // case "ALTERARLIVRO":
            //     require "Controller/ControladorLivroAlterar.php";
            //     $controlador = new ControladorLivroAlterar();
            //     $controlador->processaRequisicao();
            //     break;
            // case "LISTARLIVRO":
            //     require "Controller/ControladorLivroListar.php";
            //     $controlador = new ControladorLivroListar();
            //     $controlador->processaRequisicao();
            //     break;
        default:
            require "App/Controller/HomeController.php";
            $HomeController = new HomeController();
            $HomeController->Controller();
            break;
    }
} else {
    $url = 'App/View/404.php';
}
