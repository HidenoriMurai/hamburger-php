                <!-- header-->
                <?php get_header ();?>


                <div class="p-single__top">
                    <div class="p-single__top-bg">
                        <h1 class="p-single__top-sub-title"><?php the_title(); ?></h1>
                    </div>
                </div>

                <?php if ( have_posts()) : ?>
                <?php while ( have_posts()) : the_post();?>
                <?php $slug = $post->post_name; ?><!-- スラッグを $slug に代入 -->
                
                <?php
                    the_post_thumbnail('full'); //アイキャッチ
                    endwhile;
                    endif;
                ?>

            <section class="l-single__contents">
                <div class="p-single_content">
                    <?php the_content(); ?>         <!--管理画面からの投稿内容--> 
                </div>
                <!-- ページ分割 -->
                <?php wp_link_pages(); ?>


            </section>
            </section>

                <!---sidebar---->
                <?php get_sidebar ();?>
                
                <!---footer---->
                <?php get_footer ();?>