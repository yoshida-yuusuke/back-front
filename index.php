<?php get_header(); ?>

<h2 class="pageTitle"><?php single_tag_title(); ?></h2>
<?php get_template_part('template-parts/breadcrumb'); ?>
<?php $posttags = get_the_tags();
if ($posttags) {
foreach($posttags as $tag) {
echo '#'.$tag->name . ' ';
}
}
?>
<main class="main">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-9">
                <div class="row">
                    <!-- メインループの開始 -->
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="col-md-4">
                                <?php get_template_part('template-parts/loop', 'speical'); ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <?php if (function_exists('wp_pagenavi')) {
                    wp_pagenavi();
                } ?>
            </div>

        </div>
    </div>
</main>

<!-- header.phpをインクルードする -->
<?php get_footer(); ?>
