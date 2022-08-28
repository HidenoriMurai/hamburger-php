                <!-- header-->
                <?php get_header ();?>


                <div class="p-page__top">
                    <div class="p-page__top-bg">
                        <h1 class="p-page__top-sub-title"><?php the_title(); ?></h1>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/page-top.jpg" alt="top-images" class="p-page__top-images">
                    </div>
                </div>
            
            <section class="l-page__contents">

                <?php
                    if(have_posts()):
                        while(have_posts()):
                            the_post();
                            the_content();
                        endwhile;
                    endif;
                ?>

                <?php if ( is_page(array(79))): ?>

                <div class="p-page__text-box">
                    <h2 class="p-page__text-box__ttl">見出しh2</h2>
                    <p class="p-page__text-box__text">タグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。</p>
                    <h3 class="p-page__ttl3">見出しh3</h3>
                    <h4 class="p-page__ttl4 u-txt_size">見出しh4</h4>
                    <h5 class="p-page__ttl5 u-txt_size">見出しh5</h5>
                    <h6 class="p-page__ttl6 u-txt_size">見出しh6</h6>
                    

                <section class="p-page__list">
                    <ul class="p-page__list--1">
                        <li class="p-page__list--left">1.リストリストリスト <br>2.リストリストリスト</li>
                        <li class="p-page__list--right">1.リスト2リスト2リスト2 <br>2.リスト2リスト2リスト2</li>
                        <li class="p-page__list__left">1.リストリストリスト <br>2.リストリストリスト</li>
                    </ul>
                    <ul class="p-page__list--2">
                        <li class="p-page__list--left">リストリストリスト <br>リストリストリスト</li>
                        <li class="p-page__list--right">リスト2リスト2リスト2 <br>リスト2リスト2リスト2</li>
                        <li class="p-page__list--left">リストリストリスト <br>リストリストリスト</li>
                    </ul>
                </section>


                <pre class="p-page__code">
                    <code>
                        &lt;html&gt;
                            &lt;head&gt;
                            &lt;/head&gt;
                            &lt;body&gt;
                            &lt;/body&gt;
                        &lt;/html&gt;
                    </code>
                </pre>


                <table class="p-page__table">
                    <tr>
                        <th class="p-page__table-th1">テーブル</th>
                        <th class="p-page__table-th2">テーブル</th>
                    </tr>
                    <tr>
                        <td class="p-page__table-td1">テーブル</td>
                        <td class="p-page__table-td2">テーブル</td>
                    </tr>
                    <tr>
                        <td class="p-page__table-td1">テーブル</td>
                        <td class="p-page__table-td2">テーブル</td>
                    </tr>
                    <tr>
                        <td class="p-page__table-td1">テーブル</td>
                        <td class="p-page__table-td2">テーブル</td>
                    </tr>
                </table>

                <?php else: ?>
                <?php endif; ?>


                <button class="c-btn__foot">ボタン</button>

                <p class="p-page__txt">boldboldboldboldboldboldbold</p>
                

            </section>

            </section>

                <!---sidebar---->
                <?php get_sidebar ();?>
                
                <!---footer---->
                <?php get_footer ();?>