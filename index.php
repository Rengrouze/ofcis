<?php


$modulePath = "modules/";
require $modulePath . "module_loader.php";

render('header', ['title' => 'Accueil']);
render('slider');
render('courses');
render('callToAction');
render('events');
render('footer');


?>