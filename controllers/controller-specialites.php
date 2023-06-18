<?php 


// charge les données
require "../models/data.php";


// fonction permettant de creer des cartes
// @param array $data
// @param int $limit




function generateProduct($data, $limit = 18)
{

    $i = 1;
    foreach ($data as $product) {

        if ($i > $limit) {
            break;
        }
        if ($product['categorie'] == 'specialites') {
            
        
        echo    '<div class="infocardContainer">';
        echo    '<div id="main">';
        echo    '<img src="../assets/img/' . $product['image'] . '">';
        echo    '</div>';
        echo    '<div id="textbois">';
        echo    '<h2>' . $product['nom'] . '</h2>';
        echo    '<h6>' . $product['reference'] . '</h6>';
        echo    '<h6>' . $product['contenu'] . '</h6>';
        echo    '<h6>' . $product['poids'] . '</h6>';
        echo    '<h5>' . $product['prix'] . '&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">ajouter au panier</a></h5>';
        echo    '</div>';
        echo    '</div>';
        $i++;    
      }  
    }
}



// charge la vue
// include "../views/home.php";


include "../views/specialites.php";
