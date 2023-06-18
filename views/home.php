<?php include "components/head.php" ?>
<?php include "components/navbar.php" ?>



<div class="results">
    <?php
    generateProduct($data, $limit = 18)

    ?>
</div>

<?php include "components/footer.php" ?>