<?php include "components/head.php" ?>
<?php include "components/navbar.php" ?>



<div class="results">
<?php 
generateProduct($data, $limit = 15) 

?>
</div>

<?php include "components/footer.php" ?>