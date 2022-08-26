
            <section class="l-column__aside">
                <aside class="p-aside">
                    <nav class="p-aside__bg">
                        <div class="c-btn__hamburger-layout">
                            <div class="c-btn__close js-btn__close">
                                <button class="c-btn__hamburger js-btn__hamburger">
                                    <span class="c-btn__hamburger-bar"></span>
                                    <span class="c-btn__hamburger-bar"></span>
                                </button>
                            </div>
                        </div>
                        <p class="p-aside__menu-logo">Menu</p>
                        <?php
                                if ( is_active_sidebar( 'category_widget' ) ) :
                                    dynamic_sidebar( 'category_widget' );
                                    else:
                                    ?>
                                <div class="widget">
                                    <h2>No Widget</h2>
                                    <p>ウィジットは設定されていません。</p>
                                </div>
                            <?php endif; ?>
                    </nav>
                </aside>
            </section>
        </section>
