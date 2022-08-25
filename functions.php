
<?php   
    add_theme_support( 'menus' );           //メニュー機能
    add_theme_support( 'title-tag' );       //タイトルタグ取得

    //タイトル出力
function hamburger_title( $title ) {
    if ( is_front_page() && is_home() ) { //トップページなら投稿・固定ページにかかわらず、サイトのフロントページが表示されているかを判定する　&　メインブログページが表示されているかを判定する。
        $title = get_bloginfo( 'name', 'display' );
    } elseif ( is_singular() ) { //シングルページなら個別投稿のページかを判定する。
        $title = single_post_title( '', false );
    }
    return $title;
}
add_filter('pre_get_document_title', 'hamburger_title');


    //head内スタイルシート,スクリプトの読み込み
    function hamburger_script() {
        wp_enqueue_style( 'ress', get_template_directory_uri( '/css/ress.min.css' ), array());
        wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array('ress'), false, 'all');
        wp_enqueue_script('script_jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);
        wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/script.js', array('jqueya'));
    }
    add_action( 'wp_enqueue_scripts', 'hamburger_script' );