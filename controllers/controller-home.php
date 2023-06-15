<?php
// charge les données
require "../models/data.php";


// fonction permettant de creer des cartes
// @param array $data
// @param int $limit




function generateProduct($data, $limit = 5)
{

    $i = 1;
    foreach ($data as $product) {

        if ($i > $limit) {
            break;
        }

        echo    '<div class="card" style="width: 18rem;">';
        echo    '<img src="../assets/img/product' . $i++ . '.png" class="card-img-top" alt="...">';
        echo    '<div class="card-body">';
        echo    '<p class="card-text1"><b>Nom:</b>' . $product['nom'] . '</p>';
        echo    '<p class="card-text2"><b>référence:</b>' . $product['reference'] . '</p>';
        echo    '<p class="card-text3"><b>contenu:</b>' . $product['contenu'] . '</p>';
        echo    '<p class="card-text4"><b>poids:</b>' . $product['poids'] . '</p>';
        echo    '<p class="card-text5"><b>prix:</b>' . $product['prix'] . '</p>';
        echo    '</div>';
    }
}



// charge la vue
include "../views/home.php";
