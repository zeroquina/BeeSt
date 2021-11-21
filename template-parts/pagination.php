                    <?php if (paginate_links() ) : ?>
                        <div class="pagenation">
                            <?php
                                echo
                                paginate_links(
                                array(
                                'end_size' => 1,
                                'mid_size' => 1,
                                'prev_next' => true,
                                'prev_text' => '<i class="fas fa-hand-point-left"></i>',
                                'next_text' => '<i class="fas fa-hand-point-right"></i>',
                                )
                                );
                            ?>
                        </div>
                    <?php endif; ?>