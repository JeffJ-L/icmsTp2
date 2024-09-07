<?php

/*
Template Name: Vaisselle Page
*/
?>

<?php

get_header();


$bg_header = get_field( 'vaisselle_service_image_bg' );


$vaisselle_introduction = get_field('vaisselle_service_introduction');
// var_dump($accueil_introduction);




if ( ( $bg_header) ) {
    $bg_header = $bg_header['url'];
} else {
    $bg_header = wp_get_attachment_url( 83 ); // id image par défaut
}
?>




<header class="vaisselle-header" id="masthead" style="background-image: url(<?php echo $bg_header; ?>)">
    <p><?php echo $vaisselle_introduction ?></p>

</header>


<div class="grille service">
<?php
$args_vaisselle =array(
    'posts_per_page'    => -1,
    'post_type'     => 'article',
);
?>




<?php
$args =array(
    'posts_per_page'    => -1,
    'post_type'     => 'article',
);


$the_query = new WP_Query( $args );

// var_dump($the_query);

if( $the_query->have_posts() ): ?>
    <section class="grille-vaisselle">
    <?php while( $the_query->have_posts() ) :
         $the_query->the_post();
        $champs = get_fields();
        // var_dump($champs);


        if( $champs['article_categorie'] == 'Vaisselle' && $champs['article_actif'] ):
            $article_image = $champs['article_image']['url'];

        ?>
            <article>
                <a href="<?php the_permalink(); ?>">   
                <?php if($article_image): ?> 
                    <img src="<?php echo $article_image; ?>" />
                <?php endif; ?>
                    <div class="info">
                        <h3><?php the_title(); ?></h3>
                    </div>
                </a>
            </article> 
        <?php endif; ?>   
    <?php endwhile; ?>
    </section>
<?php endif; ?>

<?php wp_reset_query(); 
get_footer();