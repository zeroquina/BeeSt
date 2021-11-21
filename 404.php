<?php get_header(); ?>

    <!-- mvの中身 -->
    <div class="mv wow fadeIn" data-wow-duration="1.5s">
        <h1 class="mv__title wow fadeInUp" data-wow-duration="1.5s">お探しのページが<br>
            見つかりませんでした…。
        </h1>
    </div>
    <!-- mvの中身終わり -->

    <!-- secretの中身 -->
    <div class="not404">
        <div class="not404-inner inner">
            <div class="not404__title">
                <h2 class="util-title wow fadeInUp" data-wow-duration="1.5s">404 Not Found</h2>
            </div>
            <div class="not404__content">
                <p class="not404__txt wow fadeInUp" data-wow-delay=".5s">
                    申し訳ございませんが、お探しのページは<br>
                    存在していないか、アクセスできません。<br>
                    キーワード検索やカテゴリーから<br class="is-md">記事を探すことができます。
                </p>
                <!-- 検索・カテゴリー・トップへ戻るボタン -->
                <div class="not404__search wow fadeInUp" data-wow-duration="1.5s">
                    <div class="not404-util-title">検索</div>
                    <form method="get" class="not404__search__form" action="<?php echo home_url('/'); ?>">
                        <input type="search" class="not404__search__field" value="" placeholder="キーワード" name="s" id="s">
                        <button type="submit" class="not404__search__submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
                <div class="not404__category wow fadeInUp" data-wow-delay=".5s">
                    <div class="not404-util-title">カテゴリー</div>
                    <ul class="not404__category__items">
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
                <div class="not404__btn">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップへ戻る</a>
                </div>
                <!-- /検索・カテゴリー・トップへ戻るボタン -->
            </div>
        </div>
    </div>
    <!-- secret終わり -->

<?php get_footer(); ?>