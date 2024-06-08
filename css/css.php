<?php

$footer ="/css/footer.css";
$nav ="/css/nav.css"; 
$style ="/css/style.css";




function getCss(){
   
    $about ="/css/about.css";
    $contact ="/css/contact.css";
    $career ="/css/career.css";
    $service ="/css/service.css";
    $portifolio ="/css/portifolio.css";
    $project ="/css/project.css";
    $notfound ="/css/notfound.css";

    $requestUri = $_SERVER['REQUEST_URI'];

    if($requestUri=="/controller/about.php"){
        echo $about;
    } elseif($requestUri=="/controller/contact.php"){
        echo $contact;
    } elseif($requestUri=="/controller/career.php"){
        echo $career;
    }elseif($requestUri=="/controller/portifolio.php"){
        echo $portifolio;
    } elseif($requestUri=="/controller/service.php"){
        echo $service;
    } elseif($requestUri=="/controller/project.php"){
        echo $project;
    }else{
        echo $notfound;
    }

    

}