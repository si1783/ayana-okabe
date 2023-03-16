// ハンバーガーメニュー
jQuery(function ($) {
  $('.js-hamburger').on('click', function(){
    if($(this).hasClass('open')){
      $('.js-drawer').fadeOut();
      $(this).removeClass('open');
      $('html').removeClass('fixed');
    }else{
      $('.js-drawer').fadeIn();
      $(this).addClass('open');
      $('html').addClass('fixed');
      // $(this).toggleClass('active');
    }
  });
});
// CAFEMENUについて
$(function(){
  $('.js-cafemenu-link').click(function () {
      $('.js-cafemenu-area').hide().filter(this.hash).fadeIn();
      $('.js-cafemenu-link').removeClass('selected');
      $(this).addClass('selected');
      return false;
  }).filter(':eq(0)').click();
});
// LOOKROSEについて
$('.lookrose__slider').slick({
  autoplay: true,//自動的に動き出すか。初期値はfalse。
  infinite: true,//スライドをループさせるかどうか。初期値はtrue。
  speed: 300,//スライドのスピード。初期値は300。
  slidesToShow: 3,//スライドを画面に3枚見せる
  slidesToScroll: 1,//1回のスクロールで1枚の写真を移動して見せる
  prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
  nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
  centerMode: true,//要素を中央ぞろえにする
  variableWidth: true,//幅の違う画像の高さを揃えて表示
  dots: true,//下部ドットナビゲーションの表示
});
// QUESTIONセクション
//アコーディオンをクリックした時の動作
$('.question__accordion-area-q').on('click', function() {//タイトル要素をクリックしたら
  $('.question__accordion-area-a').slideUp(500);//クラス名.boxがついたすべてのアコーディオンを閉じる
    
  var findElm = $(this).next(".question__accordion-area-a");//タイトル直後のアコーディオンを行うエリアを取得
    
  if($(this).hasClass('close')){//タイトル要素にクラス名closeがあれば
    $(this).removeClass('close');//クラス名を除去    
  }else{//それ以外は
    $('.close').removeClass('close'); //クラス名closeを全て除去した後
    $(this).addClass('close');//クリックしたタイトルにクラス名closeを付与し
    $(findElm).slideDown(500);//アコーディオンを開く
  }
});

//ページが読み込まれた際にopenクラスをつけ、openがついていたら開く動作※不必要なら下記全て削除
$(window).on('load', function(){
  $('.question__accordion-area li:first-of-type section').addClass("open"); //accordion-areaのはじめのliにあるsectionにopenクラスを追加
  $(".open").each(function(index, element){ //openクラスを取得
    var Title =$(element).children('.question__accordion-area-q'); //openクラスの子要素のtitleクラスを取得
    $(Title).addClass('close');       ///タイトルにクラス名closeを付与し
    var Box =$(element).children('.box'); //openクラスの子要素boxクラスを取得
    $(Box).slideDown(500);          //アコーディオンを開く
  });
});
// ページトップボタンを押すとしたから上に上がる
$(function(){
  var topBtn=$('#pagetop');
  topBtn.hide();
  //◇ボタンの表示設定
  $(window).scroll(function(){
    if($(this).scrollTop()>80){
      //---- 画面を80pxスクロールしたら、ボタンを表示する
      topBtn.fadeIn();
    }else{
      //---- 画面が80pxより上なら、ボタンを表示しない
      topBtn.fadeOut();
    }
  });
  // ◇ボタンをクリックしたら、スクロールして上に戻る
  topBtn.click(function(){
    $('body,html').animate({
    scrollTop: 0},500);
    return false;
  });
  })
