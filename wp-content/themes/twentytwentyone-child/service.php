<?php

get_header();





$service_introduction = get_field('vaisselle_service_introduction');
// var_dump($accueil_introduction);
?>

<div class="service-intro">
    <?php echo $vaisselle_introduction; ?>
</div>


<?php
get_footer();