<?php get_header(); ?>

    <main>
        <!-- mvの中身 -->
        <section class="mv wow fadeIn" data-wow-duration="1.5s">
            <h2 class="mv__title util-title wow fadeInUp" data-wow-duration="1.5s">why&nbsp;do&nbsp;you&nbsp;like...?</h2>
        </section>
        <!-- mvの中身終わり -->

        <!-- introの中身 -->
        <section class="about">
            <div class="about-inner">
                <div class="about__items">

                <!-- breadcrumbの中身 -->
                <div class="breadcrumb about__breadcrumb">
                    <?php bcn_display(); ?>
                </div>
                <!-- breadcrumb終わり -->

                    <?php
                        $abouts = SCF::get( 'abouts', 15 );
                        foreach ( $abouts as $about_fields ):
                    ?>
                    <div class="about__item">
                        <h2 class="about__title util-title"><?php echo $about_fields[ 'about_title-first' ]; ?></h2>
                        <div class="about__item__wrapper">
                            <figure class="about__img wow fadeIn" data-wow-delay=".4s">
                                <img src="<?php echo wp_get_attachment_image_url( $about_fields[ 'about_img-first' ], 'full' ); ?>" alt="<?php echo $about_fields[ 'about_title-first' ]; ?>">
                            </figure>
                            <div class="about__txts wow fadeIn" data-wow-delay=".6s">
                                <p class="about__txt"><?php echo $about_fields[ 'about_text-one-first' ]; ?></p>
                                <p class="about__txt"><?php echo $about_fields[ 'about_text-two-first' ]; ?></p>
                                <p class="about__txt"><?php echo $about_fields[ 'about_text-three-first' ]; ?></p>
                                <p class="about__txt"><?php echo $about_fields[ 'about_text-four-first' ]; ?></p>
                                <p class="about__txt"><?php echo $about_fields[ 'about_text-five-first' ]; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="about__item">
                        <h2 class="about__title util-title"><?php echo $about_fields[ 'about_title-second' ]; ?></h2>
                        <div class="about__item__wrapper about__item__wrapper-reverse">
                            <figure class="about__img wow about__img-reverse fadeIn" data-wow-delay=".4s">
                            <img src="<?php echo wp_get_attachment_image_url( $about_fields[ 'about_img-second' ], 'full' ); ?>" alt="<?php echo $about_fields[ 'about_title-second' ]; ?>">
                            </figure>
                            <div class="about__txts wow fadeIn" data-wow-delay=".6s">
                                <p class="about__txt"><?php echo $about_fields[ 'about_text-one-second' ]; ?></p>
                                <p class="about__txt"><?php echo $about_fields[ 'about_text-two-second' ]; ?></p>
                                <p class="about__txt"><?php echo $about_fields[ 'about_text-three-second' ]; ?></p>
                                <p class="about__txt"><?php echo $about_fields[ 'about_text-four-second' ]; ?></p>
                                <p class="about__txt"><?php echo $about_fields[ 'about_text-five-second' ]; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="about__item">
                        <h2 class="about__title util-title"><?php echo $about_fields[ 'about_title-third' ]; ?></h2>
                        <div class="about__item__wrapper">
                            <figure class="about__img wow fadeIn" data-wow-delay=".4s">
                                <img src="<?php echo wp_get_attachment_image_url( $about_fields[ 'about_img-third' ], 'full' ); ?>" alt="<?php echo $about_fields[ 'about_title-third' ]; ?>">
                            </figure>
                            <div class="about__txts wow fadeIn" data-wow-delay=".6s">
                                <p class="about__txt"><?php echo $about_fields[ 'about_text-one-third' ]; ?></p>
                                <p class="about__txt"><?php echo $about_fields[ 'about_text-two-third' ]; ?></p>
                                <p class="about__txt"><?php echo $about_fields[ 'about_text-three-third' ]; ?></p>
                                <p class="about__txt"><?php echo $about_fields[ 'about_text-four-third' ]; ?></p>
                                <p class="about__txt"><?php echo $about_fields[ 'about_text-five-third' ]; ?></p>
                            </div>
                        </div>
                    </div>
                    <?
                        endforeach;
                    ?>
                </div>
            </div>
        </section>
        <!-- introの中身終わり -->

    </main>

<?php get_footer(); ?>