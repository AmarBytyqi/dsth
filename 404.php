<?php get_header(); ?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <header>
                    <h1>Page not found</h1>
                    <p>Unfortnately, the page you tried to reach does not exist on the site</p>
                </header>
                <div class="error"></div>
                <p>How about doing a search?</p>
                <?php get_search_form(); ?>
                <?php 
                the_widget(
                    'WP_Widget_Recent_Posts',
                    array(
                        'title' => 'Latest Posts',
                        'number' => 3
                    )
                );
                ?>
            </div>
        </main>
    </div>
</div>
<?php get_footer(); ?>