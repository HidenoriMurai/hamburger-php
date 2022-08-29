                <!-- header-->
                <?php get_header ();?>


                <div class="p-page__top">
                    <div class="p-page__top-bg">
                        <h1 class="p-page__top-sub-title"><?php the_title(); ?></h1>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page-top.jpg" alt="top-images" class="p-page__top-images">
                    </div>
                </div>
            
            <section class="l-page__contents">

                <?php if ( have_posts()) : ?>
                <?php while ( have_posts()) : the_post();?>
                <?php $slug = $post->post_name; ?><!-- スラッグを $slug に代入 -->

                <?php endwhile;
                    endif;
                ?>                
                    <!-- コンテンツ出力 -->
                <?php the_content(); ?>

            </section>
            </section>

                <!---sidebar---->
                <?php get_sidebar ();?>
                
                <!---footer---->
                <?php get_footer ();?>