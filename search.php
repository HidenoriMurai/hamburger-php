                <!-- header-->
                <?php get_header ();?>

                <div class="p-archive-search__top">
                    <div class="p-archive-search__top-bg">
                        <p class="p-archive-search__top-sub-title">Search:</p>
                        <p class="p-archive-search__top-sub-title-1">
                            <?php echo get_search_query(); ?>
                        </p>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/archive-top-sp.jpg" alt="top-images" class="p-archive-search__top-images">
                    </div>
                </div>

                <p class="p-archive-search-snumber">『<?php echo get_search_query(); ?>』の検索結果:<?php echo $wp_query->found_posts; ?>件</p>

                <!-- 条件分岐構文 -->

                <?php
                    if ( have_posts()) : 
                    while ( have_posts()) :
                        the_post();    
                ?>
            
                <!-- データがある場合の処理 -->
                <div class="c-archive-box">
                    <div class="c-archive-box__image" ><?php the_post_thumbnail(); ?></div>
                    <div class="c-archive-box__inner">
                        <p class="c-archive-box__ttl"><?php the_title(); ?></p>
                        <h3 class="c-archive-box__sub-ttl">小見出しが入ります</h3>
                        <p class="c-archive-box__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        <div class="c-btn__archive-layout">
                            <button class="c-btn__archive">
                                <a href="<?php the_permalink(); ?>">詳しく見る</a>
                            </button>
                        </div>
                    </div>
                </div>



                <!-- データがない場合の処理 -->
                <?php endwhile; else: ?>
                    <p class="p-archive-search-snumber"> 検索候補がありません。</p>
                <!-- 終わりの記述 -->
                <?php endif; ?>

                <div class="p-archive__pagination">
                    <!--ページネーション-->
                    <!--現在ページ-->
                    <h2>
                        page<?php show_page_number(''); ?>/<?php max_show_page_number(''); ?>
                    </h2>

                    <!--ページ送り-->
                    <?php
                    $args = array(
                        'mid_size' => 1,
                        'prev_text' => '&lt;&lt;',
                        'next_text' => '&gt;&gt;',
                        'screen_reader_text' => ' ',
                    );
                    the_posts_pagination($args);
                    ?>
                </div>





            </section>

                <!---sidebar---->
                <?php get_sidebar ();?>
                
                <!---footer---->
                <?php get_footer ();?>