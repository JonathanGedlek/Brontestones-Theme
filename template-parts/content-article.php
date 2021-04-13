<div class="container-80p d-flex flex-wrap spacer-b-5 min-height">

    <div class="post-content">
    <div class="pb-5">
        <div class="col post-date">
            <span class="font-roboto text-grey"><?php the_date(); ?></span>
        </div>
    </div>
        <?php
        the_content();
        ?>
    </div>
</div>
<?php
comments_template();

?>