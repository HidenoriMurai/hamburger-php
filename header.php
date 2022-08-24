
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Hamburger</title>
        <?php wp_head(); ?>
    </head>

    <body class="l-body">

        <section class="l-column">
            <section class="l-column__contents">
                <header class="l-header">
                    <button class="c-button-box"><p class="c-button--menu js-button--menu">Menu</p></button>
                    <div class="p-header__layout">
                        <h1 class="p-header"><a class="p-header__logo">Hamburger</a></h1>
                        <form class="p-header__form" action="#" method="post">
                            <input class="p-header__search js-header__search" type="search">
                            <input class="p-header__submit" type="submit" value="検索">
                            <div class="p-header__search-icon1"><span class="p-header__search-icon2"></span></div>
                        </form>
                    </div>
                </header>
                
