<?php
get_header();
?>

<?php
if (have_posts()) {

    while (have_posts()) {

?>
        <div class="page-header-img mb-5" style="background-image: url(<?php the_post_thumbnail_url() ?>);" class>
            <div class="center">
                <h1 class="page-header-text"><?php strtoupper(the_title()); ?></h1>
            </div>
        </div>
        <article>
    <?php
        the_post();
        get_template_part('template-parts/content', 'page');
    }
}
    ?>
        </article>
        <?php
        get_footer();
        ?>