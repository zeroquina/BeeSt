<?php get_header(); ?>

    <!-- mvの中身 -->
    <div class="mv wow fadeIn" data-wow-duration="1.5s">
        <h2 class="mv__title wow fadeInUp" data-wow-duration="1.5s">クワカブの情報や飼育記録<br>
            その他ワクワクできる情報を<br>お届けします
        </h2>
    </div>
    <!-- mvの中身終わり -->

    <!-- blogの中身 -->
    <div class="blog">
        <div class="blog-inner inner">
            <div class="blog__title">
                <h2 class="util-title wow fadeInUp" data-wow-duration="1.5s">blog</h2>
            </div>

                <!-- breadcrumbの中身 -->
                <div class="breadcrumb archive__breadcrumb">
                    <?php bcn_display(); ?>
                </div>
                <!-- breadcrumb終わり -->

            <div class="blog-items">
            <?php
                if ( have_posts() ) :
                ?>
                <div class="blog__wrapper">
                    <main class="blog__cards wow fadeIn" data-wow-delay=".5s">
                        <?php
                        while ( have_posts() ) :
                        the_post();
                        ?>
                        <article class="blog__card">
                            <a href="<?php the_permalink(); ?>" class="blog__card__link">
                                <div class="blog__card__img">
                                    <?php
                                        if (has_post_thumbnail() ) {
                                            the_post_thumbnail('large');
                                        } else {
                                            echo '<img src="'.esc_url(get_template_directory_uri()).'/src/images/no-image.png" alt="No image">';
                                        }
                                    ?>
                                </div>
                                <div class="blog__card__body">
                                    <div class="blog__card-meta">
                                        <?php
                                        $category = get_the_category();
                                        if ($category[0] ) {
                                            echo '<a href="'.esc_url(get_category_link( $category[0]->term_id )).'">'.$category[0]->cat_name.'</a>';
                                        }
                                        ?>
                                        <time class="blog__card__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                                    </div>
                                    <h3 class="blog__card__title"><?php the_title(); ?></h3>
                                </div>
                            </a>
                        </article>
                        <?php
                        endwhile;
                        ?>
                        <?php endif; ?>
                    </main>
                <!-- Pagination -->
                <?php get_template_part('template-parts/pagination'); ?>
                <!-- Pagination 終わり -->
                </div>
                <!-- 右側（ウィジェット） -->
                <?php get_sidebar(); ?>
                <!-- 右側（ウィジェット） 終わり -->
            </div>
        </div>
    </div>
    <!-- blogの中身終わり -->

    <?php get_footer(); ?>