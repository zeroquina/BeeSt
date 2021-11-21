<?php get_header(); ?>

    <!-- mvの中身 -->
    <div class="mv wow fadeIn" data-wow-duration="1.5s">
        <h2 class="mv__title wow fadeInUp" data-wow-duration="1.5s">ん？<br>
            わたしに何かご用ですか…？
        </h2>
    </div>
    <!-- mvの中身終わり -->

    <!-- secretの中身 -->
    <div class="secret">
        <div class="secret-inner inner">
            <div class="secret__title">
                <h2 class="util-title wow fadeInUp" data-wow-duration="1.5s">secret page</h2>
            </div>

                <!-- breadcrumbの中身 -->
                <div class="breadcrumb archive__breadcrumb">
                    <?php bcn_display(); ?>
                </div>
                <!-- breadcrumb終わり -->

            <div class="secret__wrapper">

                <!-- テキスト欄 -->
                <div class="secret__txt-btn">
                    <p class="secret__main-txt wow fadeInUp" data-wow-delay=".5s">
                        ついにこのページへやって来たか…<br>
                        わたしは実に300年…は盛りすぎたが、<br class="is-sm">2020年12月から<br>
                        ある1人のクワガタオタクによって<br class="is-sm">封印された者…<br>
                        名乗るほど名前は持ち合わせて<br class="is-sm">いないが、そうだな…<br>
                        わたしのことは、とりあえず<br class="is-sm">「もょもと」とでも<br class="is-md">呼んでくれ。<br>
                    </p>
                    <p class="secret__main-txt wow fadeInUp" data-wow-delay=".5s">
                        さて、たまたまここを見つけた<br class="is-sm">運の良いそこのお前…<br>
                        あるいは、このホームページを<br class="is-sm">くまなく調べ尽くした<br class="is-md">物好きな君…<br>
                        あるいは、検証機能を使って<br class="is-sm">リンクを発見し、<br class="is-md sm-hidden">ここにたどり着いた<br class="is-pc">勘の良い貴様…</p>
                    <p class="secret__main-txt wow fadeInUp" data-wow-delay=".5s">
                        ぼくと契約して、<br class="is-sm">「魔法少女」になってよ！
                    </p>
                    <p class="secret__main-txt wow fadeInUp" data-wow-delay=".5s">
                        というとでも思ったか？<br>
                        何？ノリについていけないから<br class="is-sm">合わせてくれ…だと？<br>
                        …黙れ。なぜわたしがお前のノリに<br class="is-sm">合わせなければ<br class="is-md sm-hidden">ならんのだ…。<br>
                        甚だ図々しい。身の程を弁えろ。
                    </p>

                    <div class="secret__btn secret__trap">
                        <a href="<?php echo esc_url( home_url('/') ); ?>">ち…違います！違います！</a>
                    </div>

                    <p class="secret__main-txt wow fadeInUp" data-wow-delay=".5s">
                        上のトラップに引っかからず、<br class="is-md">スクロールしまくったお前…<br>
                        あるいはトラップに引っかかっても<br class="is-md">なおわたしの元へきたお前…<br>
                        気に入った。<br class="is-sm">わたしの自慢話をふんだんに<br class="is-md">聞かせてやろう。
                    </p>
                    <p class="secret__main-txt wow fadeInUp" data-wow-delay=".5s">
                        何？聞きたくないだと…？<br>
                        黙れ…。同じセリフを2回も使わせるな。<br>
                        甚だ図々しい。身の程を弁えろ。</p>
                    <p class="secret__main-txt wow fadeInUp" data-wow-delay=".5s">
                        ではここだけの制作秘話をしてやろう。<br>
                        実は下のホームボタン、制作当初はわたしの<br>『闇ブログ』を載せようとしていた…。<br>
                        しかしクワガタオタクがこのサイトと旅ブログを<br>持っていることを考えて、ボツになったのだ…。<br>
                        嘘だと思うなら、あのクワガタオタクに聞いてみるといい。<br>
                    </p>
                    <p class="secret__main-txt wow fadeInUp" data-wow-delay=".5s">
                        この情報は絶対に漏洩してはならない。<br>
                        それだと他のお客さまの楽しみが<br class="is-sm">減ってしまうからだ…。<br>
                        わたしのことは喋っちゃいけない。<br class="is-md">わたしはずっと君をみている。<br>
                        どうせ話すなら、クワガタオタクのTwitterに<br class="is-sm">DMでもしてみろ…。<br>
                        お前もあいつも幸せになれることだろう…。
                    </p>

                    <div class="secret__btn">
                        <a href="https://twitter.com/beest_quina">管理人のTwitterへ</a>
                    </div>

                    <p class="secret__main-txt wow fadeInUp" data-wow-delay=".5s">
                        わたしからの話は以上だ。<br>
                        また話を聞きたくなったら戻ってこい。<br>
                        わたしがいつでもお前の相手をしてやろう…。<br>
                    </p>
                    <div class="secret__btn">
                        <a href="<?php echo esc_url( home_url('/') ); ?>">結局ホームに戻る</a>
                    </div>
                </div>
                <!-- テキスト欄終わり -->
            </div>
        </div>
    </div>
    <!-- secret終わり -->

<?php get_footer(); ?>