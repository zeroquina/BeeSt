<?php get_header(); ?>

    <!-- mvの中身 -->
    <div class="mv wow fadeIn" data-wow-duration="1.5s">
        <h2 class="mv__title wow fadeInUp" data-wow-duration="1.5s">気になることがあれば<br>
            お気軽にご相談ください&nbsp;&#9834;
        </h2>
    </div>
    <!-- mvの中身終わり -->

    <!-- blogの中身 -->
    <div class="contact">
        <div class="contact-inner inner">
            <div class="contact__title">
                <h2 class="util-title wow fadeInUp" data-wow-duration="1.5s">contact</h2>
            </div>

                <!-- breadcrumbの中身 -->
                <div class="breadcrumb archive__breadcrumb">
                    <?php bcn_display(); ?>
                </div>
                <!-- breadcrumb終わり -->

            <div class="contact__wrapper">

                <!-- テキスト・ボタン欄 -->
                <div class="contact__txt-btn">
                    <p class="contact__main-txt sm-hidden  wow fadeInUp" data-wow-delay=".5s">お問い合わせはSNSのDMからでも承っております。<br>
                        メールでのお問い合わせは、以下のフォームからお願いします。<br>
                        お気軽にどうぞ！<br>
                        （内容によってはお答えできない場合がございます）
                    </p>
                    <p class="contact__main-txt is-sm wow fadeInUp" data-wow-delay=".5s">お問い合わせはSNSのDMからでも<br>承っております。<br>
                        メールでのお問い合わせは、以下の<br>フォームからお願いします。<br>
                        お気軽にどうぞ！<br>
                        （内容によってはお答えできない<br>場合がございます）
                    </p>
                    <p class="contact__sub-txt sm-hidden wow fadeInUp" data-wow-delay=".5s">
                        &#8251;&nbsp;SNSからのお問い合わせは、<span>Twitter</span>をオススメいたします。
                    </p>
                    <p class="contact__sub-txt is-sm wow fadeInUp" data-wow-delay=".5s">
                        &#8251;&nbsp;SNSからのお問い合わせは、<br><span>Twitter</span>をオススメいたします。
                    </p>

                    <div class="contact__sns wow fadeInUp" data-wow-delay=".8s">
                        <a href="https://twitter.com/beest_quina" class="contact__sns-twitter" rel="noopener noreferrer" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.instagram.com/quistazero/?hl=ja" class="contact__sns-instagram" rel="noopener noreferrer" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <!-- テキスト・ボタン欄終わり -->

                <!-- コメント欄 -->
                <div class="cf wow fadeInUp" data-wow-delay=".5s">
                <?php echo do_shortcode( '[contact-form-7 id="32" title="cf_1" html_class="cf__items"]' ); ?>
                </div>
            </div>
            <!-- コメント終わり -->
        </div>
    </div>
<?php get_footer(); ?>