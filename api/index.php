<?php
//Core Load
require 'Core/Controller.php';
require 'Core/Core.php';
//Controllers Load
require 'Controllers/homeController.php';

//Model Load
require 'Models/conexao.php';
require 'Models/home.php';
//Views Load
require 'Views/home.php';

$c = new Core();

?>