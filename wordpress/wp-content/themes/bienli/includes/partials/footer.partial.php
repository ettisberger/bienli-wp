<footer class="bienli-main-footer">
    <div class="bienli-inlay">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-xs-12">
                <div class="bienli-footer-box">
                    <div class="bienli-footer-box-title"><?php the_field('column-left-title', 'option'); ?></div>
                    <div class="bienli-footer-box-content">

                     <?php $post_objects = get_field('column-left-links', 'option'); ?>
                        <ul>
                        <?php foreach( $post_objects as $post): ?>
                        <?php setup_postdata($post); ?>
                            <li>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-xs-12">
                <div class="bienli-footer-box">
                    <div class="bienli-footer-box-title"><?php the_field('column-right-title', 'option'); ?></div>
                    <div class="bienli-footer-box-content"><?php the_field('column-right-text', 'option'); ?></div>
                </div>
            </div>
        </div>
    </div>
</footer>
