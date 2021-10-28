<?php
    $url = (isset($_GET['url'])) ? $_GET['url']:'Home';
    $url = array_filter(explode('/',$url));
            
    $classe = (isset($url[0])?$url[0]:'Home');
    $metodo = (isset($url[1])?$url[1]:'index');
            
    $classe .= 'Controller';


     
    if(is_file('controller/'.$classe.'.php')){
        
        require_once 'controller/'.$classe.'.php';
        $obj = new $classe();
        $obj->$metodo($url);

    }else{
        include '404.php';
    }
?>