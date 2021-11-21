<?php get_header(); ?>

    <main>
        <!-- mvの中身 -->
        <section class="mv wow fadeIn" data-wow-duration="1.5s">
            <h2 class="mv__title wow fadeInUp" data-wow-duration="1.5s">わたしができることを<br>
                ご紹介します</h2>
        </section>
        <!-- mvの中身終わり -->

        <!-- introの中身 -->
        <section class="intro">
            <div class="intro-inner inner">
                <div class="intro__items">

                <!-- breadcrumbの中身 -->
                <div class="breadcrumb archive__breadcrumb">
                    <?php bcn_display(); ?>
                </div>
                <!-- breadcrumb終わり -->
                
                    <?php
                        $services = SCF::get( 'service', 13 );
                        foreach ( $services as $service_fields ):
                    ?>
                    <div class="intro__item">
                        <h2 class="intro__title"><?php echo $service_fields[ 'service_title' ]; ?></h2>
                        <figure class="intro__img">
                            <img src="<?php echo wp_get_attachment_image_url( $service_fields[ 'service_img' ], 'full' ); ?>" alt="<?php echo $top_fields[ 'service_title' ]; ?>">
                        </figure>
                        <p class="intro__txt"><?php echo $service_fields[ 'service_text-one' ]; ?></p>
                        <p class="intro__txt"><?php echo $service_fields[ 'service_text-two' ]; ?></p>
                        <p class="intro__txt"><?php echo $service_fields[ 'service_text-three' ]; ?></p>
                        <p class="intro__txt"><?php echo $service_fields[ 'service_text-four' ]; ?></p>
                        <div class="intro__btn">
                            <a href="<?php echo $service_fields[ 'service_link' ]; ?>" target="_blank" rel="noopener noreferrer">ちょっとみてみる</a>
                        </div>
                    </div>
                    <?
                        endforeach;
                    ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- introの中身終わり -->

    </main>

<?php get_footer(); ?>