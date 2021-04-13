<div >
    <div class="container-80p">
        <?php
        wp_list_comments(
            array(
                'avatar_size' => 120,
                'style' => 'div',
            )


        );
        ?>
    </div>

    <?php
    if (comments_open()) {
        comment_form(
            array(
                'class_form' => ''
            )
        );
    }
    ?>
</div>