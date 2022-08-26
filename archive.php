                <!-- header-->
                <?php get_header ();?>


                <div class="p-archive__top">
                    <div class="p-archive__top-bg">
                        <p class="p-archive__top-sub-title">Menu:</p><p class="p-archive__top-sub-title-1"><?php the_title(); ?></p>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/archive-top-sp.jpg" alt="top-images" class="p-archive__top-images">
                    </div>
                </div>

                <div class="c-text-box">
                    <h2 class="c-text-box__ttl">小見出しが入ります</h2>
                    <p class="c-text-box__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </biv>






                <?php

                    $args=array(
                        'posts_per_page'   => 5, // 読み込みしたい記事数（全件取得時は-1）
                        'category'         => '2,3,14', // 読み込みしたいカテゴリID（複数の場合は '1,2'）
                        'orderby'          => 'ID', // 何順で記事を読み込むか（省略時は日付順）
                        'order'            => 'DESC', // 昇順(ASC)か降順か(DESC）
                        'exclude'          => '111, 125', // 一覧に表示したくない記事のID（複数時は,区切）
                    );

                    // 配列で指定した内容で、記事情報を取得
                    $datas = get_posts( $args );

                    // 取得した記事情報の表示
                    if ( $datas ): // 記事情報がある場合はforeachで記事情報を表示

                    // ↓ ループ開始 ↓
                    foreach ( $datas as $post ): // $datas as $post の $datas は取得時に設定した変数名、$postは変更不可
                        setup_postdata( $post ); // アーカイブページ同様にthe_titleなどで記事情報を表示できるようにする
                    ?>

                            <!----ループ内で表示させたい記述を書く --->

                    <?php
                    endforeach; 
                    // ↑ ループ終了 ↑

                    else: // 記事情報がなかったら
                    ?>
                        
                            <!----記事がない場合の記述 〜--->
                        <p>ページがありません</P>
                    <?php
                    endif;
                        
                    // 一覧情報取得に利用したループをリセットする
                    wp_reset_postdata();
                    ?>
    









                <div class="c-archive-box">
                    <img src="echo esc_url(the_post_thumbnail());" class="c-archive-box__image">
                    <div class="c-archive-box__inner">
                        <p class="c-archive-box__ttl"><?php the_title(); ?></p>
                        <h3 class="c-archive-box__sub-ttl">小見出しが入ります</h3>
                        <p class="c-archive-box__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                        <div class="c-btn__archive-layout">
                            <button class="c-btn__archive">詳しく見る</button>
                        </div>
                    </div>
                </div>

                <div class="p-archive__pagination">
                    <button class="p-archive__pagination-previous">
                        <p class="p-archive__pagination-previous-no">page 1/10</p>
                        <img src="/images/previous-icon.jpg" alt="pagination-previous" class="p-archive__pagination-previous-img">
                        <p>前へ</p>
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
                        <p>次へ</p>
                        <img src="/images/next-icon.jpg" alt="pagination-next" class="p-archive__pagination-next-img">
                    </button>
                </div>
            </section>

                <!---sidebar---->
                <?php get_sidebar ();?>
                
                <!---footer---->
                <?php get_footer ();?>