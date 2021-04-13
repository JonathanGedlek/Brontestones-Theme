<?php
get_header();
?>

<span class="min-height">
    <div class="container-80p m-auto spacer-5  post-title">
        <h1 class="title-5 font-roboto"><?php the_title() ?></h1>
    </div>


    <article class="container-80p font-roboto m-auto spacer-b-5">
        <?php
        if (have_posts()) {

            while (have_posts()) {

                the_post();
                get_template_part('template-parts/content', 'article');
            }
        }
        ?>

    </article>
    <?php
    get_footer();
    ?>
</span>