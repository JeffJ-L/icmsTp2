<?php
get_header();


if(have_posts() ): ?>
    <section class="single-article">
    <?php while(have_posts() ) : the_post();
        $champs = get_fields();
    ?>

        <article class="single-details">
            <?php if($champs['article_image']): ?> 
                <div class="product-image">
                    <img src="<?php echo $champs['article_image']['url']; ?>" alt="<?php the_title(); ?>" />
                </div>
            <?php endif; ?>
            <div class="single-infos">
                <h1><?php the_title(); ?></h1>
                <p class="category"><?php echo $champs['article_categorie']; ?></p>
                <h3>Description</h3>
                <p class="description"><?php echo $champs['article_description']; ?></p>
                <p class="price"><?php echo $champs['article_prix'] . " $"; ?></p>
            </div>
        </article>    
    <?php endwhile; ?>
    </section>
<?php endif; ?>

<?php wp_reset_query(); ?>
<?php get_footer(); ?>
