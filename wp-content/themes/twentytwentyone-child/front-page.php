<?php

get_header();




$accueil_introduction = get_field('accueil_introduction');
// var_dump($accueil_introduction);
$bg_header = get_field( 'accueil_image_bg' );
$accueil_slogan = get_field( 'accueil_slogan' );

if ( ( $bg_header) ) {
    $bg_header = $bg_header['url'];
} else {
    $bg_header = wp_get_attachment_url( 83 ); // id image par défaut
}
?>




<header class="accueil-header" id="masthead" style="background-image: url(<?php echo $bg_header; ?>)">
    <p><?php echo $accueil_slogan; ?></p>

</header>

<div class="accueil-intro">
    <?php echo $accueil_introduction; ?>
</div>


<div class="grille service">
<?php
$args_vaisselle =array(
    'posts_per_page'    => -1,
    'post_type'     => 'article',
);
// var_dump($args_vaisselle);


$the_query = new WP_Query( $args_vaisselle );

if( $the_query->have_posts() ):
    $count = 0;
    $count_vaisselle = 0;
    $categorie_service = false; 
    $categorie_vaisselle = false; ?>

    <section class="grille-article">
        <?php while( $the_query->have_posts() ) :
            $the_query->the_post();
            $champs = get_fields();

            // var_dump($champs);

            $article_image = $champs['article_image']['url'];
            $article_categorie = $champs['article_categorie'];
            $article_actif = $champs['article_actif'];
            // echo $article_categorie;

        ?>

            <?php if( $article_image && $article_categorie == 'Service' && $article_actif && $count < 4 ): ?>
                <?php $args_vaisselle =array(
                    'posts_per_page'    => 4,
                    'post_type'     => 'article',
                );

                if (!$categorie_service) {
                    echo '<h2>' . $article_categorie . '</h2>';
                    $categorie_service = true;
                }
                
                // $the_query = new WP_Query( $args_vaisselle );
                ?>
                <div class="article">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo $article_image; ?>" />
                        <div class="info">
                            <h3><?php the_title(); ?></h3>
                        </div>
                    </a>
                </div>
                <?php 
                $count++; 
                ?>
            <?php endif; ?>
            <?php if( $article_image && $article_categorie == 'Vaisselle' && $article_actif && $count_vaisselle < 4 ): ?>
                <?php $args_vaisselle =array(
                    'posts_per_page'    => 4,
                    'post_type'     => 'article',
                );

                if (!$categorie_vaisselle) {
                    echo '<h2>' . $article_categorie . '</h2>';
                    $categorie_vaisselle = true;
                }
                
                // $the_query = new WP_Query( $args_vaisselle );
                ?>
                <div class="article">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo $article_image; ?>" />
                        <div class="info">
                            <h3><?php the_title(); ?></h3>
                        </div>
                    </a>
                </div>
                <?php 
                $count_vaisselle++; 
                ?>
            <?php endif; ?>
            
        <?php endwhile; ?>
    </section>
<?php endif; ?>

<?php wp_reset_query();   // Restore global post data
?>
</div>

<?php
get_footer();