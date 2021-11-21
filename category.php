<?php get_header(); ?>

    <!-- categoryの中身 -->
    <div class="archive">
        <div class="archive-inner inner">

            <div class="archive-wrapper">
                <main class="archive__cards wow fadeIn" data-wow-delay=".5s">
                
                <!-- breadcrumbの中身 -->
                <div class="breadcrumb archive__breadcrumb">
                <?php bcn_display(); ?>
                </div>
                <!-- breadcrumb終わり -->
    
                <!-- アーカイブのヘッド -->
                <div class="archive__head">
                    <div class="archive__leading">ARCHIVE</div>
                    <h1 class="archive__title"><?php the_archive_title(); ?></h1>
                    <div class="archive__description">
                        <p>
                            <?php the_archive_description(); ?>
                        </p>
                    </div>
                </div>
                <!-- アーカイブのヘッド終わり -->
                <?php
                if ( have_posts() ) :
                ?>
                <div class="archive__items">
                    <?php
                    while ( have_posts() ) :
                    the_post();
                    ?>
                    <article class="archive__card">
                        <a href="<?php the_permalink(); ?>" class="archive__card__link">
                            <div class="archive__card__img">
                                <?php
                                    if (has_post_thumbnail() ) {
                                        the_post_thumbnail('large');
                                    } else {
                                        echo '<img src="'.esc_url(get_template_directory_uri()).'/src/images/no-image.png" alt="No image">';
                                    }
                                ?>
                            </div>
                            <div class="archive__card__body">
                                <div class="archive__card-meta">
                                <?php
                                    $category = get_the_category();
                                    if ($category[0] ) {
                                        echo '<a href="'.esc_url(get_category_link( $category[0]->term_id )).'">'.$category[0]->cat_name.'</a>';
                                    }
                                    ?>
                                    <time class="archive__card__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                                </div>
                                <h3 class="archive__card__title"><?php the_title(); ?></h3>
                            </div>
                        </a>
                    </article>
                    <?php
                    endwhile;
                    ?>
                    <?php endif; ?>
                    </div>
                    <!-- Pagination -->
                    <?php get_template_part('template-parts/pagination'); ?>
                    <!-- Pagination 終わり -->
                </main>
                <!-- 右側（ウィジェット） -->
                <?php get_sidebar(); ?>
                <!-- 右側（ウィジェット） 終わり -->
            </div>
        </div>
    </div>
    <!-- categoryの中身終わり -->

<?php get_footer(); ?>