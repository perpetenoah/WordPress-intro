<?php /* Template name: Page "Contacts" */?>

<?php get_header(); ?>
<main>

    <?php
    // On ouvre "la boucle" (The loop), la structure de contrôle propre à Wordpress:
    if(have_posts()):while(have_posts()):the_post();?>

        <h2><?= get_the_title(); ?></h2>

        <ul>
            <li>LinkedIn</li>
            <li>Github</li>
            <li>Email</li>
        </ul>
        <div><?= get_the_content(); ?></div>

    <?php
        // On ferme "la boucle" (The loop):
    endwhile; else:?>
        <p>La page est vide</p>
    <?php endif; ?>
</main>
    <?php get_footer(); ?>
