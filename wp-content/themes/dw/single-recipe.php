<?php /* Template name: Page "Recette" */?>

<?php get_header(); ?>

<style type="text/css">
     .recipe{
         display: flex;
         flex-direction: row-reverse;
         justify-content: space-between;
     }
     .recipe_ingredients{
         width: 320px;
         padding: 20px;
         background: #f1f1f1;
         display: flex;
         flex-direction: column-reverse;
     }
     .recipe_fig{
         display: block;
         position: relative;
         width: 100%;
         height: 0;
         padding-top: 100%;
     }
     .recipe_img{
         display: block;
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         object-fit: cover;
     }
</style>
<main>

    <aside>
        <h2>À propos de moi</h2>
    </aside>
    <?php
    // On ouvre "la boucle" (The loop), la structure de contrôle propre à Wordpress:
    if(have_posts()):while(have_posts()):the_post();?>

        <h2><?= get_the_title(); ?></h2>
        <p><?= get_the_excerpt(); ?></p>

            <div class="recipe">
                    <aside class="recipe_ingredients">
                        <div>
                            <h3>Ingrédients</h3>
                            <p>À compléter</p>
                        </div>
                        <figure class="recipe_fig">
                            <?= get_the_post_thumbnail(size:'large', attr: ['class' => 'recipe_img']); ?>
                        </figure>
                    </aside>

                <section>
                    <h3>Étapes</h3>
                    <div><?= get_the_content(); ?></div>

                </section>
            </div>
    <?php
        // On ferme "la boucle" (The loop):
    endwhile; else:?>
        <p>Cette recette n'existe pas</p>
    <?php endif; ?>
</main>
<?php get_footer(); ?>
