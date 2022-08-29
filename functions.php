
<?php   
    add_theme_support( 'title-tag' );       //タイトルタグ取得
    add_theme_support('post-thumbnails');   //アイキャッチ
    add_theme_support( 'editor-styles' );
    add_theme_support( "automatic-feed-links");

    //ブロックエディタースタイル読み込ませ
    function org_theme_add_editor_styles() {
        $editor_style_url = get_theme_file_uri( 'editor-style.css' );
        wp_enqueue_style( 'block-editor-style', $editor_style_url );
    }
    add_action( 'enqueue_block_editor_assets', 'org_theme_add_editor_styles' );


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

//現在のページ数の取得
function show_page_number() {
    global $wp_query;
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $max_page = $wp_query->max_num_pages;
    echo $paged;
}
//総ページ数の取得
function max_show_page_number() {
    global $wp_query;
    $max_page = $wp_query->max_num_pages;
    echo $max_page;
}






//head内スタイルシート,スクリプトの読み込み
    function hamburger_script() {
        wp_enqueue_style( 'ress','https://unpkg.com/ress/dist/ress.min.css' , array());
        wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array('ress'), false, 'all');
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

    //ページ内表示件数設定
    function change_posts_per_page($query) {
        if ( is_admin() || ! $query->is_main_query() )
            return;
    
        /* アーカイブページの時に表示件数を5件にセット */
        if ( $query->is_archive() ) {
            $query->set( 'posts_per_page', '5' );
        }
        /* ポストアーカイブの時に表示件数を5件にセット */
        if ( $query->is_post_type_archive() ) {
            $query->set( 'posts_per_page', '5' );
        }
        /* 検索ページの時に表示件数を5件にセット */
        if ( $query->is_search() ) {
            $query->set( 'posts_per_page', '5' );
        }
    }
    add_action( 'pre_get_posts', 'change_posts_per_page' );