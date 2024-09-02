<?php

get_header();


$args =array(
    'posts_per_page'    => -1,
    'post_type'     => 'article',
);


$the_query = new WP_Query( $args );

// var_dump($the_query);

if( $the_query->have_posts() ): ?>
    <section>
    <?php while( $the_query->have_posts() ) :
         $the_query->the_post();
        $champs = get_fields();
        var_dump($champs);
        die();

        $produit_description = $champs['produit_description'];
        $produit_image = $champs['produit_image']['url'];
        $produit_prix = $champs['produit_prix'];

    ?>


        <article>
            <a href="<?php the_permalink(); ?>">   
            <?php if($produit_image): ?> 
                <img src="<?php echo $produit_image; ?>" />
            <?php endif; ?>
                <h3><?php the_title(); ?></h3>
            </a>
        </article>    
    <?php endwhile; ?>
    </section>
<?php endif; ?>

<?php wp_reset_query();   // Restore global post data stomped by the_post().


get_footer();