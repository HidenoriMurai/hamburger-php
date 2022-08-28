                <!-- header-->
                <?php get_header ();?>

                <div class="p-archive-search__top">
                    <div class="p-archive-search__top-bg">
                        <p class="p-archive-search__top-sub-title">Search:</p><p class="p-archive-search__top-sub-title-1"><?php the_title(); ?></p>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/archive-top-sp.jpg" alt="top-images" class="p-archive-search__top-images">
                    </div>
                </div>


                <p class="p-archive-search-snumber">『<?php the_title(); ?>』の検索結果:<?php echo $wp_query->found_posts; ?>件</p>

                <?php
                    if ( have_posts()) : 
                    while ( have_posts()) :
                        the_post();
                ?>


                <div class="c-archive-box">
                    <div class="c-archive-box__image" ><?php the_post_thumbnail(); ?></div>
                    <div class="c-archive-box__inner">
                        <p class="c-archive-box__ttl"><?php the_title(); ?></p>
                        <h3 class="c-archive-box__sub-ttl">小見出しが入ります</h3>
                        <p class="c-archive-box__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        <div class="c-btn__archive-layout">
                            <button class="c-btn__archive">
                                <a href="<?php the_permalink($id); ?>">詳しく見る</a>
                            </button>
                        </div>
                    </div>
                </div>

                <?php
                    endwhile;
                    endif;
                ?>


                <div class="p-archive__pagination">
                    <button class="p-archive__pagination-previous">
                        <p class="p-archive__pagination-previous-no">page 1/10</p>
                        <img src="/images/previous-icon.jpg" alt="pagination-previous" class="p-archive__pagination-previous-img">
                        <p class="p-archive__pagination-previous-txt">前へ</p>
                    </button>

                    <a href="#" class="c-archive__pagination__no-li-1" >1</a>
                    <a href="#" class="c-archive__pagination__btn" >2</a>
                    <a href="#" class="c-archive__pagination__btn" >3</a>
                    <a href="#" class="c-archive__pagination__btn" >4</a>
                    <a href="#" class="c-archive__pagination__btn" >5</a>
                    <a href="#" class="c-archive__pagination__btn" >6</a>
                    <a href="#" class="c-archive__pagination__btn" >7</a>
                    <a href="#" class="c-archive__pagination__btn" >8</a>
                    <a href="#" class="c-archive__pagination__btn" >9</a>
                    
                    
                    <button class="p-archive__pagination-next">
                        <p class="p-archive__pagination-next-txt">次へ</p>
                        <img src="/images/next-icon.jpg" alt="pagination-next" class="p-archive__pagination-next-img">
                    </button>
                </div>
            </section>

                <!---sidebar---->
                <?php get_sidebar ();?>
                
                <!---footer---->
                <?php get_footer ();?>