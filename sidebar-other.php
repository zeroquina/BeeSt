                <aside class="widget">
                    <div class="widget__search wow fadeInUp" data-wow-duration="1.5s">
                        <div class="widget__title">検索</div>
                        <form method="get" class="widget__search__form" action="<?php echo home_url('/'); ?>">
                            <input type="search" class="widget__search__field" value="" placeholder="キーワード" name="s" id="s">
                            <button type="submit" class="widget__search__submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="widget__profile wow fadeInUp" data-wow-delay=".5s">
                        <div class="widget__title">プロフィール</div>
                        <div class="widget__profile__img">
                            <img src="<?php echo get_template_directory_uri() ?>/src/images/profile.jpg" alt="BeeStの管理人、たーやまのプロフィール">
                        </div>
                        <div class="widget__profile__contents">
                        <h2 class="widget__profile__ttl">川井貴雄（たーやま）</h2>
                            <p class="widget__profile__txt">クワガタムシが好きすぎてホームページを作成してしまいました…。笑<br>
                            今年こそ天然のオオクワガタをペアで採集してみせます。<br>
                            ちなみに「たーやま」はあだ名です。<br>
                            そういえば<span class="widget__profile-red">このサイト…</span>やっぱいいや。笑</p>
                            <p class="widget__profile__invite">&#x25BC;&nbsp;フォローしちゃう？&nbsp;&#x25BC;</p>
                            <ul class="widget__profile__sns">
                                <li class="widget__profile__twitter">
                                    <a href="https://twitter.com/beest_quina" rel="noopener noreferrer" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="widget__profile__facebook">
                                    <a href="https://www.facebook.com/profile.php?id=100010217850999" rel="noopener noreferrer" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="widget__profile__instagram">
                                    <a href="https://www.instagram.com/quistazero/?hl=ja" rel="noopener noreferrer" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget__new wow fadeInUp" data-wow-delay=".5s">
                        <div class="widget__title">新着記事</div>
                        <div class="widget__new__items">
                        <?php
                            $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 5,
                            'orderby' => 'date',
                            'order' => 'DESC',
                            );
                            $new_posts = get_posts($args);
                            foreach($new_posts as $post): setup_postdata( $post );
                        ?>
                            <a href="<?php the_permalink(); ?>" class="widget__new__item">
                                <div class="widget__new__img">
                                <?php
                                    if (has_post_thumbnail() ) {
                                    the_post_thumbnail('medium');
                                    } else {
                                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/src/no-image.png" alt="No image">';
                                    }
                                ?>
                                </div>
                                <p class="widget__new__txt"><?php the_title(); ?></p>
                            </a>
                            <?php endforeach; wp_reset_postdata(); ?>
                        </div>
                    </div>
                    <div class="widget__archive wow fadeInUp" data-wow-delay=".5s">
                        <div class="widget__title">アーカイブ</div>
                        <ul class="widget__archive__items">
                        <?php
                            $args = array(
                            'type' => 'monthly',
                            'limit' => '',
                            'format' => 'html',
                            'before' => '',
                            'after' => '',
                            'show_post_count' => false,
                            'echo' => 1,
                            'order' => 'DESC',
                            'post_type' => 'post'
                            );
                            wp_get_archives( $args );
                        ?>
                        </ul>
                    </div>
                    <div class="widget__category wow fadeInUp" data-wow-delay=".5s">
                        <div class="widget__title">カテゴリー</div>
                        <ul class="widget__category__items">
                        <?php
                            $cats = wp_list_categories('echo=0&show_count=1&title_li=');
                            $cats = preg_replace('/ title=\"(.*?)\"/','', $cats);
                            $cats = preg_replace('/ class=\"(.*?)\"/','', $cats);
                            $cats = preg_replace('/<\/a> (\([0-9]*\))/', ' $1</a>', $cats);
                            $cats = str_replace(array('(',')'), array('<span class="count">','</span>'), $cats);
                            echo $cats;
                        ?>
                        </ul>
                    </div>
                </aside>