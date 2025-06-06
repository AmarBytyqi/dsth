<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
                <header>
                    <h1><?php the_title(); ?></h1>
                    <?php if ( 'post' == get_post_type() ): ?>
                    <div class="meta-info">
                        <p>Posted in: <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                        <p>Categories: <?php the_category( ' ' ); ?></p>
                        <p>Tags: <?php the_tags('', ', ') ?></p>


                    </div>
                    <?php endif; ?>
                </header>
                <div class="content">
                    <?php the_content(); ?>
                </div>
</article>