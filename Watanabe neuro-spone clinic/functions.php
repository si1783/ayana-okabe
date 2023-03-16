<?php
//テーマのメニュー表示とjQueryを繋げる
function add_register_nav_menu() {
    register_nav_menu( 'menu', 'メニュー' ); // 任意の識別子, 説明
  }
  add_action( 'after_setup_theme', 'add_register_nav_menu' );
  function custom_print_scripts() {
      //デフォルトjquery削除
      wp_deregister_script('jquery');
  
      //GoogleCDNから読み込む
      wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js' );
      wp_enqueue_script('vegas', '//cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.js' );
      wp_enqueue_script('coco', '//coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/5-1-20/js/5-1-20.js' );
      wp_enqueue_script( 'script', get_template_directory_uri() . '/script.js' , array( 'jquery' ), '', true );   
  }
  add_action('wp_print_scripts', 'custom_print_scripts');
?>
<?php
// アイキャッチ画像
function custom_setup(){
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','custom_setup');
?>

