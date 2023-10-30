<?php

$modulePath = "modules/";
require $modulePath . "module_loader.php";

render('header', ['title' => 'testtest']);
render('slider');
render('courses', ['courseTitle' => 'Formation initiale de Sauveteur Secouriste du Travail']);

render('events');
render('footer');


?>