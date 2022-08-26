                <!-- header-->
                <?php get_header ();?>


                <div class="p-single__top">
                    <div class="p-single__top-bg">
                        <h1 class="p-single__top-sub-title"><?php the_title(); ?></h1>
                    </div>
                </div>

                <?php
                    if(have_posts()):
                        while(have_posts()):
                            the_post();
                            the_post_thumbnail('full');
                            the_content();
                        endwhile;
                    endif;
                ?>

            
            <section class="l-single__contents">
                <div class="p-single__text-box">
                    <h2 class="p-single__text-box__ttl">見出しh2</h2>
                    <p class="p-single__text-box__text">タグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。</p>
                    <h3 class="p-single__ttl3">見出しh3</h3>
                    <h4 class="p-single__ttl4 u-txt_size">見出しh4</h4>
                    <h5 class="p-single__ttl5 u-txt_size">見出しh5</h5>
                    <h6 class="p-single__ttl6 u-txt_size">見出しh6</h6>
                    

                    <div class="p-single__quote">
                        <blockquote class="p-single__quote-txt">Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</blockquote>
                        <cite class="p-single__quote-name">出典元：　<a href="#">◯◯◯◯◯◯◯◯◯◯◯</a></cite>
                    </div>
                </div>
                <img  src="/images/single-img-bg.jpg" alt="single-img" class="p-single-s-img">


                <ul class="p-single__box">
                    <li class="p-single__box-1">
                        <img src="/images/single-img-mid.jpg" alt="single-box-image" class="p-single__box--image1">
                        <p class="p-single-box__text1">テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
                    </li>

                    <li class="p-single__box-2">
                        <p class="p-single__box--text2"> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
                        <img src="/images/single-img-mid.jpg" alt="single-box-image" class="p-single__box--image2">
                    </li>
                    <li class="p-single__box-bottom">
                        <img src="/images/single-mid2.jpg" class="p-single__box-bottomーimg">
                    </li>
                </ul>


                <article class="p-single__grid">
                    <img src="/images/single-grid.jpg" alt="single-grid1" class="p-single__grid-img1 c-size__grid-img">
                    <img src="/images/single-grid.jpg" alt="single-grid2" class="p-single__grid-img2 c-size__grid-img">
                    <img src="/images/single-grid.jpg" alt="single-grid3" class="p-single__grid-img3 c-size__grid-img">
                    <img src="/images/single-grid.jpg" alt="single-grid4" class="p-single__grid-img4 c-size__grid-img">
                    <img src="/images/single-grid.jpg" alt="single-grid5" class="p-single__grid-img5 c-size__grid-img">
                    <img src="/images/single-grid.jpg" alt="single-grid6" class="p-single__grid-img6 c-size__grid-img">
                    <img src="/images/single-grid.jpg" alt="single-grid7" class="p-single__grid-img7 c-size__grid-img">
                    <img src="/images/single-grid.jpg" alt="single-grid8" class="p-single__grid-img8 c-size__grid-img">
                    <img src="/images/single-grid.jpg" alt="single-grid9" class="p-single__grid-img9 c-size__grid-img">
                </article>


                <section class="p-single__list">
                    <ul class="p-single__list--1">
                        <li class="p-single__list--left">1.リストリストリスト <br>2.リストリストリスト</li>
                        <li class="p-single__list--right">1.リスト2リスト2リスト2 <br>2.リスト2リスト2リスト2</li>
                        <li class="p-single__list__left">1.リストリストリスト <br>2.リストリストリスト</li>
                    </ul>
                    <ul class="p-single__list--2">
                        <li class="p-single__list--left">リストリストリスト <br>リストリストリスト</li>
                        <li class="p-single__list--right">リスト2リスト2リスト2 <br>リスト2リスト2リスト2</li>
                        <li class="p-single__list--left">リストリストリスト <br>リストリストリスト</li>
                    </ul>
                </section>


                <pre class="p-single__code">
                    <code>
                        &lt;html&gt;
                            &lt;head&gt;
                            &lt;/head&gt;
                            &lt;body&gt;
                            &lt;/body&gt;
                        &lt;/html&gt;
                    </code>
                </pre>


                <table class="p-single__table">
                    <tr>
                        <th class="p-single__table-th1">テーブル</th>
                        <th class="p-single__table-th2">テーブル</th>
                    </tr>
                    <tr>
                        <td class="p-single__table-td1">テーブル</td>
                        <td class="p-single__table-td2">テーブル</td>
                    </tr>
                    <tr>
                        <td class="p-single__table-td1">テーブル</td>
                        <td class="p-single__table-td2">テーブル</td>
                    </tr>
                    <tr>
                        <td class="p-single__table-td1">テーブル</td>
                        <td class="p-single__table-td2">テーブル</td>
                    </tr>
                </table>

                <button class="c-btn__foot">ボタン</button>

                <p class="p-single__txt">boldboldboldboldboldboldbold</p>
                

            </section>

            </section>

                <!---sidebar---->
                <?php get_sidebar ();?>
                
                <!---footer---->
                <?php get_footer ();?>