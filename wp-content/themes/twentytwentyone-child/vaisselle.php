<?php

get_header();





$vaisselle_introduction = get_field('vaisselle_service_introduction');
// var_dump($accueil_introduction);
?>

<div class="vaisselle-intro">
    <?php echo $vaisselle_introduction; ?>
</div>


<?php
get_footer();