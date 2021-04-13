<!DOCTYPE html>
<html class="noselect" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The Bronte Stones Project">
    <?php
    wp_head()
    ?>
</head>

<body>

    <nav class="navbar navbar-page navbar-expand-xl navbar-light background-height fixed-top">
        <div class="container-fluid d-flex navbar-white-bg">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <i class="fas fa-bars"></i>
            </button>
            <div class="navbar-collapse collapse " id="navbar">
                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul class="navbar-nav nav-fill w-100">%3$s</ul>'
                    )
                );
                ?>
            </div>
        </div>
    </nav>