<div class="container-80p container-lg container-md container-sm m-auto spacer-5 d-flex flex-wrap pl-0">

    <div class="col pl-0">
        <a href="<?php the_permalink() ?>">
            <div class="font-xlg lh-xlg font-Ivy font-weight-300"><?php the_title() ?></div>
            <span class="font-md font-roboto text-grey pr-3 l-space-09"><?php the_date(); ?></span>
        </a>
    </div>
    <div class="col text-center pl-0">
        <img src="<?php the_post_thumbnail_url(); ?>">
    </div>
</div>