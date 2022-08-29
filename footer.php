
        <footer class="l-footer">
            <div class="p-footer__bg">
                <div class="p-footer__txt-box">
                    <?php
                        wp_nav_menu( array(
                        'theme_location' => 'footer',
                        'container'      => 'div',
                        'depth'          => 1,
                        ) );
                    ?>
                </div>
                <p class="p-footer__copyright">Copyright: RaiseTech</p>
            </div>
        </footer>

        <div class="overlay"></div>

    <?php wp_footer();?>
    </body>
</html>