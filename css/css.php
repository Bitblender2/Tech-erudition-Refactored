<?php

$footer ="css/footer.css";
$nav ="css/nav.css"; 
$style ="css/style.css";




function getCss(){
   
    $about ="css/about.css";
    $contact ="css/contact.css";
    $career ="css/career.css";
    $service ="css/service.css";
    $portifolio ="css/portifolio.css";
    $project ="css/project.css";
    $notfound ="css/notfound.css";

    $requestUri = $_SERVER['REQUEST_URI'];

    if($requestUri==="/about"){
        echo $about;
    }elseif($requestUri==="/contact"){
        echo $contact;
    } elseif($requestUri==="/career"){
        echo $career;
    }elseif($requestUri==="/portifolio"){
        echo $portifolio;
    } elseif($requestUri==="/service"){
        echo $service;
    } elseif($requestUri==="/project"){
        echo $project;
    }else{
        echo $notfound;
    }

    

}