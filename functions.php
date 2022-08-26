
<?php   
    add_theme_support( 'title-tag' );       //タイトルタグ取得
    add_theme_support( 'menus' );           //メニュー機能
    add_theme_support('post-thumbnails');   //アイキャッチ
    add_theme_support( 'editor-styles' );
    add_editor_style(); 

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
        wp_enqueue_style( 'ress','https://unpkg.com/ress/dist/ress.min.css' , array());
        wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array('ress'), false, 'all');
        wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.6.0.min.js', array(), true);
        wp_enqueue_script( 'script', get_template_directory_uri() . '/js/index.js', array('jquery'), true );
    }
    add_action( 'wp_enqueue_scripts', 'hamburger_script' );

    //ウィジェット機能
    function hamburger_widgets_init() {
        register_sidebar (
            array(
                'name'          => 'カテゴリー',
                'id'            => 'category_widget',
                'description'   => 'カテゴリー用ウィジェットです',
                'before_widget' => '<div id="%1$s" class="c-aside %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="c-aside">',
                'after_title'   => "</h2>\n",
            )
        );
    }
    add_action( 'widgets_init', 'hamburger_widgets_init' );

    //カスタムメニュー
    register_nav_menus( array(
        'global' => 'グローバル',
        'side'   => 'サイド',
        'footer' => 'フッター'
    ) );