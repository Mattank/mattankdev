<?php
/*Login Controller
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
    header('location:/login');
}*/
Class homeController extends Controller{

    public function index()
    {
        //verifica login
       
        $n = new home();
        $dados = $n->getHome();
        $this->carregarPagina('home',$dados,$dados2);
    }

}