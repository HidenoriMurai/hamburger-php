

//スライドメニュー
jQuery(document).on('click','.js-button--menu', function () {//ボタンがクリックされたら
    jQuery(".p-aside").toggleClass('p-aside-open');//クラスを付与
    jQuery("body").toggleClass('l-body_scroll');//クラスを付与
});


jQuery(document).on('click','.js-btn__hamburger',function () {//クリックされたら
    jQuery(".p-aside").removeClass('p-aside-open');//クラスも除去
    jQuery("body").removeClass('l-body_scroll');//クラスも除去
});


//オーバーレイ：フェードイン
jQuery(function() {
    // 「検索」ボタンクリック
    jQuery(".js-button--menu").on('click', function() {
        jQuery(".overlay").fadeIn();
    });
});
//　　　　　　：フェードアウト
jQuery(function() {
    // 「バツ」ボタンクリック
    jQuery(".js-btn__close").on('click', function() {
        jQuery(".overlay").fadeOut();
    });
});


/*ブラウザサイズ変更時メニュー閉じ */
//メニューリセット
jQuery(window).resize(function() {
    jQuery(".p-aside").removeClass('p-aside-open');//クラスも除去
    jQuery(".p-aside").next("p-aside").hide;
    jQuery(".overlay").fadeOut();
    });
//リサイズ時overfrow:hidenn解除
jQuery(window).resize(function() {
    jQuery("body").removeClass('l-body_scroll');//クラスも除去
        });




