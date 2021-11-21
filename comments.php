<div id="comments">
    <?php if ( have_comments() ): ?>
    <h3>コメント</h3>

    <ul>
        <?php wp_list_comments( 'avater_size=0&max_depth=1' ); ?>
    </ul>
        <?php endif; ?>

    <?php comment_form( 'format=html5' ); ?>
</div>
