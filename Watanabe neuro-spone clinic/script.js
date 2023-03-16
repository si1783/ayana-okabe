// ハンバーガーメニュー
jQuery(function ($) {
  $(".js-hamburger").click(function () {//ボタンがクリックされたら
    $(this).toggleClass('active');//ボタン自身に activeクラスを付与し
     $(".js-drawer").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
     $(".circle-bg").toggleClass('circleactive');//丸背景にcircleactiveクラスを付与
  });
  $(".js-drawer").click(function () {//ナビゲーションのリンクがクリックされたら
    $(".js-hamburger").removeClass('active');//ボタンの activeクラスを除去し
    $(".js-drawer").removeClass('panelactive');//ナビゲーションのpanelactiveクラスを除去
    $(".circle-bg").removeClass('circleactive');//丸背景のcircleactiveクラスを除去
    var elmHash = $(this).attr('href'); //hrefの内容を取得
    var pos = Math.round($(elmHash).offset().top-120);  //headerの高さを引く
    $('body,html').animate({scrollTop: pos}, 500);//取得した位置にスクロール※数値が大きいほどゆっくりスクロール
    return false;//リンクの無効化
  });
})
// MVスライド
jQuery(function ($) {
  var windowwidth = window.innerWidth || document.documentElement.clientWidth || 0;
    if (windowwidth > 768){
      var responsiveImage = [//PC用の画像
        { src: path + '/img/top/mv_pc.jpg'},
        { src: path +  '/img/main/top_mv_2.jpg'},
        { src: path +  '/img/main/top_mv_3.jpg'}
      ];
    } else {
      var responsiveImage = [//タブレットサイズ（768px）以下用の画像
        { src: path +  '/img/top/mv-sp.jpg'},
        { src: path +  '/img/main/top_mv_2_sp.jpg'},
        { src: path +  '/img/main/top_mv_3_sp.jpg' }
      ];
    }
    //Vegas全体の設定
    jQuery(".mv__top-image").vegas({
      overlay: true,//画像の上に網線やドットのオーバーレイパターン画像を指定。
      transition: 'fade2',//切り替わりのアニメーション。http://vegas.jaysalvat.com/documentation/transitions/参照。fade、fade2、slideLeft、slideLeft2、slideRight、slideRight2、slideUp、slideUp2、slideDown、slideDown2、zoomIn、zoomIn2、zoomOut、zoomOut2、swirlLeft、swirlLeft2、swirlRight、swirlRight2、burnburn2、blurblur2、flash、flash2が設定可能。
      transitionDuration: 2000,//切り替わりのアニメーション時間をミリ秒単位で設定
      delay: 5000,//スライド間の遅延をミリ秒単位で。
      animationDuration: 20000,//スライドアニメーション時間をミリ秒単位で設定
      animation: 'random',//スライドアニメーションの種類。http://vegas.jaysalvat.com/documentation/transitions/参照。kenburns、kenburnsUp、kenburnsDown、kenburnsRight、kenburnsLeft、kenburnsUpLeft、kenburnsUpRight、kenburnsDownLeft、kenburnsDownRight、randomが設定可能。
      slides: responsiveImage,//画像設定を読む
  });
})