<?php get_header(); ?>

    <!-- load画面 -->
    <div class="loading">
        <div class="loading-inner">
        <div class="orbit-spinner">
            <div class="orbit"></div>
            <div class="orbit"></div>
            <div class="orbit"></div>
        </div>
        <div class="loading__txt">
            <span>N</span>
            <span>O</span>
            <span>W</span>
            <span></span>
            <span>L</span>
            <span>O</span>
            <span>A</span>
            <span>D</span>
            <span>I</span>
            <span>N</span>
            <span>G</span>
        </div>
        </div>
    </div>
    <!-- load画面終わり -->

    <main>
        <!-- mvの中身 -->
        <section class="mv wow fadeIn" data-wow-duration="1.5s">
            <h2 class="mv__title wow fadeInUp" data-wow-duration="1.5s">クワカブで<br>
                ちょっとワクワクさせる日々</h2>
        </section>
        <!-- mvの中身終わり -->

        <!-- conceptの中身 -->
        <section class="concept">
            <div class="concept-inner inner">
                <div class="concept__content">
                    <h2 class="util-title wow fadeInUp" data-wow-duration="1.5s">concept</h2>
                    <h3 class="concept__subtitle wow fadeIn" data-wow-delay=".5s">「毎日をちょっとワクワクさせる」</h3>
                    <div class="concept__txts wow fadeInUp" data-wow-delay=".8s">
                        <p class="concept__txt">子どもたちのヒーロー的な存在である「カブトムシ」と「クワガタムシ」。<br>
                            夏の昆虫採集で、目をキラキラさせながら採集しに行った経験もあるかと思います。
                        </p>
                        <p class="concept__txt">
                            でも年を重ねるにつれて、周りに合わせたり、比較をされたり、仕事に謀殺されたりしますよね…。
                        </p>
                        <p class="concept__txt">
                            いつしか…
                        </p>
                        <p class="concept__txt">
                            「本当にやりたいことはこんなことじゃない」<br>
                            「自分は何のために生まれてきたのだろうか…？」
                        </p>
                        <p class="concept__txt">
                            こんな感じで、あのときのキラキラ、ワクワクを忘れてしまってはいないでしょうか？
                        </p>
                        <p class="concept__txt">
                            このサイトは、子どものまま大人になってしまったわたしが、あのときのキラキラを、心からワクワクしていたあの感覚を、ほんのわずかな時間でも取り戻せるお手伝いができればと思い、立ち上げました！
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- conceptの中身終わり -->

        <!-- blogの中身をかく -->
        <section class="blog">
            <div class="blog-inner inner">
                <div class="blog__title">
                    <h2 class="util-title wow fadeInUp" data-wow-duration="1.5s">blog</h2>
                </div>
                <?php
                $blog_query = new WP_Query(
                    array(
                      'post_type' => 'post',
                      'posts_per_page' => 6,
                    )
                  );
                ?>
                <div class="blog__cards wow fadeIn" data-wow-delay=".5s">
                <?php
                    if ( $blog_query->have_posts() ) : ?>
                        <?php while ( $blog_query->have_posts() ): ?>
                            <?php $blog_query->the_post(); ?>
                    <article class="blog__card">
                        <a href="<?php the_permalink(); ?>" class="blog__card__link">
                            <div class="blog__card__img">
                            <?php
                            if (has_post_thumbnail() ) {
                                the_post_thumbnail('large');
                            } else {
                                echo '<img src="'.esc_url(get_template_directory_uri()).'/src/images/no-image.png" alt="No image">';
                            }?>
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
                <?php wp_reset_postdata(); ?>
                    <a class="blog__btn wow fadeInUp" data-wow-delay=".5s" href="<?php echo esc_url( home_url( 'blog' ) ); ?>">
                    <div class="blog__beetles">ブログ一覧へ</div>
                </a>
                </div>
            </div>
        </section>
        <!-- blogの中身終わり -->

        <!-- serviceの中身をかく -->
        <section class="service">
            <div class="service-inner inner">
                <div class="service__title">
                    <h2 class="util-title wow fadeInUp" data-wow-duration="1.5s">service</h2>
                </div>
                <div class="service__cards">
                <?php
                        $top_pages = SCF::get( 'top_page', 6 );
                        foreach ( $top_pages as $top_fields ):
                    ?>
                    <div class="service__card wow fadeInUp" data-wow-delay=".5s">
                        <div class="service__card__img">
                            <img src="<?php echo wp_get_attachment_image_url( $top_fields[ 'top-service_img' ], 'thumbnail' ); ?>" alt="<?php echo $top_fields[ 'top-service_title' ]; ?>">
                        </div>
                        <div class="service__card__body">
                            <h3 class="service__card__title"><?php echo $top_fields[ 'top-service_title' ]; ?></h3>
                            <p class="service__card__subtitle"><?php echo $top_fields[ 'top-service_text-one' ]; ?></p>
                            <p class="service__card__subtitle"><?php echo $top_fields[ 'top-service_text-two' ]; ?></p>
                            <p class="service__card__subtitle"><?php echo $top_fields[ 'top-service_text-three' ]; ?></p>
                        </div>
                    </div>
                    <?
                        endforeach;
                    ?>
                </div>
                <a class="service__btn wow fadeInUp" data-wow-delay=".5s" href="<?php echo esc_url( home_url( 'service' ) ); ?>">詳しく見てみる</a>
            </div>
        </section>
        <!-- serviceの中身終わり -->

        <!-- aboutの中身をかく -->
        <section class="about">
            <div class="about-inner inner">
                <h2 class="util-title wow fadeInUp" data-wow-duration="1.5s">about</h2>
                <div class="about__profile">
                    <h3 class="about__profile__title wow fadeIn" data-wow-delay=".5s">My&nbsp;name&nbsp;is…</h3>
                    <p class="about__profile__txt wow fadeIn" data-wow-delay=".5s">川井&nbsp;貴雄&emsp;<span>-&nbsp;Takao&nbsp;Kawai&nbsp;-</span></p>
                    <h3 class="about__profile__title wow fadeIn" data-wow-delay=".5s">My&nbsp;birthday&nbsp;is…</h3>
                    <p class="about__profile__txt wow fadeIn" data-wow-delay=".5s">1994年9月17日（26歳）</p>
                    <h3 class="about__profile__title wow fadeIn" data-wow-delay=".5s">I'm&nbsp;from…</h3>
                    <p class="about__profile__txt wow fadeIn" data-wow-delay=".5s">大阪府</p>
                    <h3 class="about__profile__title wow fadeIn" data-wow-delay=".5s">My&nbsp;work&nbsp;is…</h3>
                    <p class="about__profile__txt wow fadeIn" data-wow-delay=".5s">制作会社でアルバイトしてます</p>
                    <h3 class="about__profile__title wow fadeIn" data-wow-delay=".5s">My&nbsp;hobby&nbsp;is…</h3>
                    <p class="about__profile__txt wow fadeIn" data-wow-delay=".5s">クワガタムシの飼育、旅・観光、サイクリング&nbsp;etc…</p>
                    <h3 class="about__profile__title wow fadeIn" data-wow-delay=".5s">Comment</h3>
                    <p class="about__profile__comment-txt wow fadeIn" data-wow-delay=".5s">ご覧いただきましてありがとうございます！<br>
                        わたしは元々、ある建設会社にて営業事務をしていました。</p>
                    <p class="about__profile__comment-txt wow fadeIn" data-wow-delay=".5s">そこからWebライターを経験し、今に至ります。</p>
                    <p class="about__profile__comment-txt wow fadeIn" data-wow-delay=".5s">わたしが発信する内容で、あなたを少しでもワクワクさせれたら嬉しいです。</p>
                    <p class="about__profile__comment-txt wow fadeIn" data-wow-delay=".5s">また、個人で案件に携わることもあり、お客さま目線で行動するように努めております。</p>
                    <p class="about__profile__comment-txt wow fadeIn" data-wow-delay=".5s">一緒にワクワクしていきましょう&#9834;</p>
                </div>
            </div>
        </section>
        <!-- aboutの中身終わり -->

        <!-- contactの中身 -->
        <section class="contact">
            <div class="contact-inner inner">
                <h2 class="util-title wow fadeInUp" data-wow-duration="1.5s">contact</h2>
                <p class="contact__txt wow fadeIn" data-wow-delay=".5s">下記ボタンから、お気軽にお問い合わせください。</p>
                <a class="contact__btn wow fadeInUp" data-wow-delay=".8s" href="<?php echo esc_url( home_url( 'contact' ) ); ?>">
                    <div class="contact__beetles">
                        <span class="contact-rotate">お問い合わせはこちら</span>
                    </div>
                </a>
            </div>
        </section>
        <!-- contactの中身終わり -->
    </main>

<?php get_footer(); ?>