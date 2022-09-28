<?php

spl_autoload_register(function($nome_arquivo)
{
    if(file_exists('api/Controllers/'.$nome_arquivo.'.php'))
    {
        require 'api/Controllers/'.$nome_arquivo.'.php';

    }elseif (file_exists('api/Core/'.$nome_arquivo.'.php'))
    {
        require 'api/Core/'.$nome_arquivo.'.php';

    }elseif(file_exists('/api/Models/'.$nome_arquivo.'Model.php'))
    {
        require 'api/Models/'.$nome_arquivo.'Model.php';

    }elseif(file_exists('api/Views/'.$nome_arquivo.'.php'))
    {
        require 'api/Views/'.$nome_arquivo.'.php';
    }

});

?>