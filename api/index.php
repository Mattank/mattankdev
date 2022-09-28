<?php

spl_autoload_register(function($nome_arquivo)
{
    if(file_exists('Controllers/'.$nome_arquivo.'.php'))
    {
        require 'Controllers/'.$nome_arquivo.'.php';

    }elseif (file_exists('Core/'.$nome_arquivo.'.php'))
    {
        require 'Core/'.$nome_arquivo.'.php';

    }elseif(file_exists('Models/'.$nome_arquivo.'Model.php'))
    {
        require 'Models/'.$nome_arquivo.'Model.php';

    }elseif(file_exists('Views/'.$nome_arquivo.'.php'))
    {
        require 'Views/'.$nome_arquivo.'.php';
    }

});
require 'homeController.php';

//
Class Core{
    public function __construct()
    {
        $this->run();
    }

    public function run()
    {
        //Verifica se foi passado algo no dominio e salva na variavel url
        if(isset($_GET['pag']))
        {
            $url = $_GET['pag'];
        }
        //Verifica é a url não está vazia e separa Controlador, Metodo e parametro
        if(empty($url)){
            $controller = 'homeController';
            $metodo = 'index';
            $parametros = array();
        }
        if(!empty($url)) 
        {
            $url = explode('/',$url);
            $controller = $url[0].'Controller';
            array_shift($url);
            
            if(isset($url[0]) && !empty($url[0]))
            {
                $metodo = $url[0];
                array_shift($url);
            }else
            {
                $metodo = 'index';
            }
            if(count($url) > 0)
            {
                $parametros = $url;
            }else{
                $parametros = $url;
            }
        }
        
        // Procura o Controller passado e executa o seu metodo
        $caminho = 'Controllers/'.$controller.'.php';

        if(!file_exists($caminho) && !method_exists($controller, $metodo))
        {
            $controller = 'homeController';
            $metodo = 'index';
        }
            
        
        $c = new $controller;
        call_user_func_array(array($c,$metodo), $parametros);
    }
}

$c = new Core();

?>