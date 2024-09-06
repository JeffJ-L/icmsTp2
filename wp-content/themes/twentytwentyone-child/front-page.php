<?php

get_header();





$accueil_introduction = get_field('accueil_introduction');
// var_dump($accueil_introduction);
?>

<div class="accueil-intro">
    <?php echo $accueil_introduction; ?>
</div>


<?php
get_footer();