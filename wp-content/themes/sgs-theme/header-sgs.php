<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?=  get_template_directory_uri()."/webfiles/css/style.css"?>">
    <script src="<?= get_template_directory_uri()."/webfiles/js/upbutton.js"?>" defer></script>
    <script src="<?= get_template_directory_uri()."/webfiles/js/burgerMenu.js"?>" defer></script>


</head>

<header>
    <nav>

        <div>
            <?php the_custom_logo("Logo_SGS"); ?>
            <a href="#">Soissons Game Show</a>
        </div>

        <div class="burgerMenu">
            <span class="slice"></span>
            <?= wp_nav_menu()?>
        </div>
    </nav>
 
</header>