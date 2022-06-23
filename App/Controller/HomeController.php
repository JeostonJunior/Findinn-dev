<?php
require "IController.php";

class HomeController implements IController
{

    public function Controller()
    {
        require "App/View/Home.php";
    }
}
