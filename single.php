<?php get_header(); ?>

    <!-- blogの中身 -->
    <div <?php post_class( array( 'article' ) ); ?>>
        <div class="article-inner inner">
            <div class="article-items">

                <!-- 左側 -->
                <main class="article__wrapper wow fadeIn" data-wow-delay=".5s">

                <!-- breadcrumbの中身 -->
                <div class="breadcrumb archive__breadcrumb">
                    <?php bcn_display(); ?>
                </div>
                <!-- breadcrumb終わり -->
                    <?php
                    if ( have_posts() ) :
                    while ( have_posts() ) :
                    the_post();
                    ?>
                    <article class="article__content">

                        <!-- 記事の中身 -->
                        <div class="article__header">
                            <?php
                            $category = get_the_category();
                            if ( $category[0] ) : ?>
                                <div class="article__category">
                                    <a href="<?php echo esc_url( get_category_link( $category[0]->term_id ) ); ?>"><?php echo $category[0]->cat_name; ?></a>
                                </div>
                            <?php endif; ?>
                            <h1 class="article-title"><?php the_title(); ?></h1>
                        </div>

                        <div class="article__time">
                            <time class="article__published" datetime="<?php the_time( 'c' ); ?>">公開日 <?php the_time( 'Y/n/j' ); ?></time>
                            <?php if ( get_the_modified_time( 'Y-m-d' ) !== get_the_time( 'Y-m-d' ) ) : ?>
                            <time class="article__updated"  datetime="<?php the_modified_time( 'c' ); ?>">最終更新日 <?php the_modified_time( 'Y/n/j' ); ?></time>
                            <?php endif; ?>
                        </div>

                        <div class="article__img">
                            <?php
                                if (has_post_thumbnail() ) {
                                    the_post_thumbnail('large');
                                } else {
                                    echo '<img src="'.esc_url(get_template_directory_uri()).'/src/images/no-image.png" alt="No image">';
                            }?>
                        </div>

                        <div class="article__body">
                            <?php the_content(); ?>
                        </div>
                        <div class="article__links">
                            <?php
                            wp_link_pages(
                            array(
                            'before' => '<nav class="post-nav">',
                            'after' => '</nav>',
                            'link_before' => '',
                            'link_after' => '',
                            'next_or_number' => 'number',
                            'separator' => '',
                            )
                            );
                            ?>
                        </div>
                        <!-- 記事の中身 終わり -->

                        <!-- タグ欄 -->
                        <?php $post_tags = get_the_tags(); ?>
                        <div class="article__tags">
                            <div class="article__tag__head">タグ</div>
                                <?php if ( $post_tags ) : ?>
                                <?php foreach ( $post_tags as $tag ) : ?>
                            <div class="article__tag__item">
                                <a href="<?php echo esc_url( get_tag_link($tag->term_id) ); ?>"><?php echo esc_html( $tag->name ); ?></a>
                            </div>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <!-- タグ欄 終わり -->

                        <!-- コメント欄 -->
                        <?php comments_template(); ?>
                        <!-- コメント終わり -->
                    </article>

                    <!-- 前後のページ -->
                    <div class="article__pre-next">
                    <?php
                        $next_post = get_next_post();
                        $prev_post = get_previous_post();
                        if ( $next_post ):
                    ?>
                        <div class="article__prev">
                               <a href="<?php echo get_permalink($next_post->ID); ?>" class="article__prev__link">
                                <p>次の記事へ</p>
                                <div class="article__prev__wrapper">
                                    <div class="article__prev__img">
                                        <?php echo get_the_post_thumbnail($next_post->ID); ?>
                                    </div>
                                    <span class="article__prev__txt"><?php echo esc_attr($next_post->post_title); ?></span>
                                </div>
                            </a>
                            </div>
                        <?php 
                        endif;
                        if( $prev_post ):
                        ?>
                        <div class="article__next">
                            <a href="<?php echo get_permalink($prev_post->ID); ?>" class="article__next__link">
                                <p>前の記事へ</p>
                                <div class="article__next__wrapper">
                                    <div class="article__next__img">
                                        <?php echo get_the_post_thumbnail($prev_post->ID); ?>
                                    </div>
                                    <span class="article__next__txt"><?php echo esc_attr($prev_post->post_title); ?></span>
                                </div>
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                    <!-- 前後のページ 終わり -->
                    <?php
                        endwhile;
                        endif;
                    ?>
                </main>
                <!-- 左側 終わり -->

                <!-- 右側（ウィジェット） -->
                <?php get_sidebar(); ?>
                <!-- 右側（ウィジェット） 終わり -->

            </div>
        </div>
    </div>
    <!-- blogの中身終わり -->

<?php get_footer(); ?>