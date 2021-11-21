<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BeeSt</title>
    <meta name="description" content="カブトムシ・クワガタムシなどの情報を発信している、BeeStです。">
    <!-- font Awesome -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico">
    <?php wp_head(); ?>
</head>

<body>

    <!-- headerの中身 -->
    <header class="header wow fadeInUp" data-wow-delay=".5s">
        <div class="header-inner">
            <div class="header__left">
                <div class="header__logo-left">
                    <img src="<?php echo get_template_directory_uri() ?>/src/images/stag_beetle.png" alt="クワガタムシ">
                </div>
                <div class="header__logo-main">
                    <a href="/secret.html" class="header__logo-main__link">
                        <div class="header__logo-main__img"><img src="<?php echo get_template_directory_uri() ?>/src/images/BeeSt.png" alt="BeeStのロゴ"></div>
                    </a>
                </div>
            </div>
            <div class="header__right">
                <nav class="header__nav">
                <?php
                wp_nav_menu(
                    array(
                        'depth' => 1,
                        'theme_location' => 'global',
                        'container' => 'false',
                        'menu_class' => 'header-list',
                    )
                );
                 ?>
                </nav>
                <div class="header__logo-right">
                    <img src="<?php echo get_template_directory_uri() ?>/src/images/beetle.png" alt="カブトムシ">
                </div>
            </div>
        </div>
        <!-- headerの中身終わり -->



        <!-- drawerの中身 -->
        <button class="gnav-icon js-gnav for-gnav" type="button" data-target="for-gnav">
            <span class="gnav-bars">
                <span class="gnav-bar"></span>
                <span class="gnav-bar"></span>
                <span class="gnav-bar"></span>
            </span>
        </button>

        <div class="gnav-background for-gnav"></div>
        <div class="gnav-content for-gnav">
            <?php
                wp_nav_menu(
                    array(
                        'depth' => 1,
                        'theme_location' => 'global',
                        'container' => 'false',
                        'menu_class' => 'header-list',
                    )
                );
            ?>
        </div>
    </header>
    <!-- drawerの中身終わり -->