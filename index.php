<?php
/* Template Name: Default Page */
get_header('sub');
?>

<div class="section section--body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="wp-output">
                    <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            the_content();
                        }
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>