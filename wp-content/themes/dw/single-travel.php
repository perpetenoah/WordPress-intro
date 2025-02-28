<?php /* Template name: Page "Recette" */?>

<?php get_header(); ?>

<style type="text/css">
    .travel{
        display: flex;
        flex-direction: row-reverse;
        justify-content: space-between;
    }
    .travel_location{
        width: 320px;
        padding: 20px;
        background: #f1f1f1;
        display: flex;
        flex-direction: column-reverse;
    }
    .travel_fig{
        display: block;
        position: relative;
        width: 100%;
        height: 0;
        padding-top: 100%;
    }
    .travel_img{
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

        <div class="travel">
            <aside class="travel_location">
                <div>
                    <h3>Images du voyage</h3>
                    <p>À compléter</p>
                </div>
                <figure class="travel_fig">
                    <?= get_the_post_thumbnail(size:'large', attr: ['class' => 'travel_img']); ?>
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
        <p>Ce voyages n'existe pas</p>
    <?php endif; ?>
</main>
<?php get_footer(); ?>
