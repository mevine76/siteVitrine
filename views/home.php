<?php include "components/head.php" ?>
<?php include "components/navbar.php" ?>

<?php 

$limit = 15;

$i = 1;

foreach ($data as $product) { 
    
      if ($i > $limit) {
        break;
      }  
    
?>

    <div class="card" style="width: 18rem;">
        <img src="../assets/img/product<?=$i++?>.png" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text1">Nom:  <?= $product['nom'] ?></p>
            <p class="card-text2">référence:  <?= $product['reference'] ?></p>
            <p class="card-text3">contenu:  <?= $product['contenu'] ?></p>
            <p class="card-text4">poids:  <?= $product['poids'] ?></p>
            <p class="card-text5">prix:  <?= $product['prix'] ?></p>
        </div>

<?php } ?>

    </div>


<?php include "components/footer.php" ?>