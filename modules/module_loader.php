<?php
function render(string $module, $parameters = [])
{
    extract($parameters);
    include 'modules/' . $module . '.php';
}
;


/* Cette fonction est utilisée pour générer les modules avec des paramètres de votre choix
exemple :

pour générér un header il suffit de taper
render('header');

si il y'a besoin de gérer des paramètres complémentaire comme choisir le titre du header
il suffit de taper
render('header', ['title' => 'Accueil']);

les champs de paramètres sont à définir directement dans les modules
en les écrivant dans la forme suivante : 
<title> 
    <?= $title ?? 'Resa Site'; ?>
</title>

Dans cette balise html <Title> on va ouvrir une balise php
    "<?=" puis créer une variable "$title", puis ajouter ?? 'titre de la page';?>
    cela permettra de définir une valeur par défaut à $title si on en assigne pas une nous même avec l'argument
    "$parameters" de Render.

    ?>
    */