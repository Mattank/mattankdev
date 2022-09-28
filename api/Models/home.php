<?php
require_once 'conexao.php';

Class home{
    private $con;

    public function __construct()
    {
        $this->con = conexao::getConexao(); 
    }
    public function getHome()
    {
        
        /*$dados = array();
        $cmd = $this->con->query('SELECT * FROM usuario');
        $dados = $cmd->fetchall(PDO::FETCH_ASSOC);
        return $dados;*/
    }
}