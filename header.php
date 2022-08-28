
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<div <?php post_class('p-header__backgroundImage'); ?>>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?> class="l-body">
    <?php wp_body_open(); ?>

        <section class="l-column">
            <section class="l-column__contents">
                <header class="l-header">
                    <button class="c-button-box"><p class="c-button--menu js-button--menu">Menu</p></button>
                    <div class="p-header__layout">
                        <h1 class="p-header">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?><span class="p-header__logo"></span></a>
                        </h1>
                        <!----検索フォーム----->
                        <?php get_search_form(); ?>
                    </div>
                </header>
                
