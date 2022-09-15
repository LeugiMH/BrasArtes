<?php 
    //Incluir Controllers
    include_once "controller/ViewController.php";

    define("URL","http://localhost/Brasartes/Site");
    if($_GET)
    {
        //Caso tenha URL
        $url = $_GET["url"];
        $url = explode("/",$url);
        
        switch($url[0])
        {
            case "home":
                $url = new ViewController();
                $url->abrirHome();
            break;
            
            default:
                $url = new ViewController();
                $url->abrirPaginaNaoEncontrada();
            break;
        }
    }
    else
    {
        //Caso não tenha URL
        $url = new ViewController();
        $url->abrirHome();
    }
?>