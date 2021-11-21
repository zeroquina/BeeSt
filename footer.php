<?php if( !is_single() ): ?>

<footer class="footer">
    <div class="footer__inner inner">
        <div class="footer__link">
            <a href="<?php echo esc_url( home_url('/') ); ?>" class="footer__txt">BeeSt</a>
        </div>
        <p class="footer__sub-txt is-pc">&copy;&nbsp;Copyright&nbsp;Takao&nbsp;Kawai&nbsp;2020&nbsp;All&nbsp;right&nbsp;reserved</p>
        <p class="footer__sub-txt is-md">&copy;&nbsp;Copyright&nbsp;Takao&nbsp;Kawai<br>&nbsp;2020&nbsp;All&nbsp;right&nbsp;reserved</p>
    </div>
</footer>

<?php else: ?>

<footer class=" article__footer footer">
    <div class="footer__inner inner">
        <p class="footer__txt">BeeSt</p>
        <p class="footer__sub-txt is-pc">
            &copy;&nbsp;Copyright&nbsp;Takao&nbsp;Kawai&nbsp;2020&nbsp;All&nbsp;right&nbsp;reserved</p>
        <p class="footer__sub-txt is-md">
            &copy;&nbsp;Copyright&nbsp;Takao&nbsp;Kawai<br>&nbsp;2020&nbsp;All&nbsp;right&nbsp;reserved</p>
    </div>
</footer>

    <!-- footer__snsの中身 -->
    <div class="footer__sns">
        <div class="footer__sns__inner inner">
            <div class="footer__sns__head">この記事をシェアする</div>
            <nav class="footer__sns__buttons">
                <ul>
                    <li>
                        <a class="footer__sns__twitter" href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php echo get_the_title(); ?>" rel="nofollow" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a class="footer__sns__facebook" href="https://www.facebook.com/share.php?u=<?php the_permalink(); ?>&t=<?php echo get_the_title(); ?>" rel="nofollow" target="_blank">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a class="footer__sns__hatena" href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php the_permalink(); ?>&title=<?php echo get_the_title(); ?>" rel="nofollow" target="_blank">
                            <i class="fa fa-hatena"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- footer__sns 終わり -->

<?php endif; ?>

    <!-- スクロールトップ -->
    <div class="return-top">
        <a href="#">
            <i class="fas fa-angle-up"></i>
        </a>
    </div>
    <!-- スクロールトップ 終わり -->

    <?php wp_footer(); ?>
</body>

</html>