<?php
get_header();
?>

<span class="min-height">
    <div class="container-80p m-auto archive-title post-title">
        <h1 class="title-5 font-weight-100 lh-6vw">OUR LATEST GUIDED WALKS
            AND EXCITING FESTIVALS</h1>
        <div class="container-lg container-md container-sm spacer-4">
            <span class="font-xlg whats-on-text">It's all about sharing and we love to share. On here you will find information about our guided walks and some of the adventures walkers have enjoyed on them. We also write about past and future festivals! Relive the last and peek into the future.</span>
        </div>
    </div>



    <?php
    if (have_posts()) {

        while (have_posts()) {
            the_post();
            get_template_part('template-parts/content', 'archive');
        }
    }
    ?>

    <?php
    the_posts_pagination();
    ?>
</span>

<?php
get_footer();
?>