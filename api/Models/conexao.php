<?php

Class Conexao{

    private static $instancia;    

    private /*static*/ function __construct(){}

    public static function getConexao()
    {
        if(!isset(self::$instancia))
        {
            $dbname= 'testemvc';
            $host = 'localhost';
            $user = 'root';
            $senha = '';
            try
            {
                self::$instancia = new PDO('mysql:dbname='.$dbname.';host='.$host,$user,$senha);
            }
            catch (Exception $e)
            {
                echo 'Erro: '.$e;
            }
        }
        return self::$instancia;
    }
}

?>