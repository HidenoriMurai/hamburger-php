
        <footer class="l-footer">
            <div class="p-footer__bg">
                <div class="p-footer__txt-box">
                    <a href="<?php echo get_permalink( get_page_by_path( 'shop' )->ID ); ?>" class="p-footer__txt1">ショップ情報</a>
                    <p class="p-footer__txt-icon"></p>
                    <a href="<?php echo get_permalink( get_page_by_path( 'history' )->ID ); ?>" class="p-footer__txt2">ヒストリー</a>
                </div>
                <p class="p-footer__copyright">Copyright: RaiseTech</p>
            </div>
        </footer>

        <div class="overlay"></div>

    <?php wp_footer();?>
    </body>
</html>