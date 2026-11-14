<?php
spl_autoload_register(function ($className) {
    $arquivo = BASE_DIR . '/' . $className . '.php';    

    if(file_exists($arquivo)){
        include $arquivo;
    }else{
        throw new Exception('Arquivo não encontrado!');
    }
    //echo $arquivo;
});
