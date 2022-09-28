<?php
//Core Load
require 'Core/Core.php';
require 'Core/Controller.php';
//Controllers Load
require 'Controllers/homeController.php';

//Model Load
require 'Models/conexao.php';
require 'Models/home.php';
//Views Load
require 'Views/home.php';

$c = new Core();

?>