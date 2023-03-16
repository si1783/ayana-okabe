<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title>渡邊脳神経外科クリニック</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  < meta name=“robots” content=“noindex” >
  <!-- ファビコン -->
  <link rel="shortcut icon" href="#" type="image/x-icon" />
  <!-- css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <link rel="stylesheet" type="text/css" href="css/7-1-46.css">
  <link rel="stylesheet" type="text/css" href="css/5-3-1.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="css/6-1-4.css"> -->
  <!-- JQuery読み込み -->
  <?php wp_enqueue_script('jquery'); ?>
  <!-- jQueryの画像の読み込み -->
  <script>
    var path = "<?php echo get_template_directory_uri();?>";
  </script>
  <?php wp_head(); ?>
</head>
<body>
  <!-- ヘッダー -->
  <header>
    <div class="header__inner">
      <div class="header__logo">
        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/top/header.logo.svg" alt="渡邊脳神経外科クリニック"></a>
      </div>
      <button class="header__hamburger hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="circle-bg"></div>
    </div>
    <div class="header-right u-desktop">
    <?php
       $args = array(
	      'menu'            => 'menu-nav',
	      'menu_class'      => 'menu',
        'menu_id'         => '{メニューのスラッグ}-{連番}',
	      'container'       => 'nav',
	      'container_id'    => 'menubar',
        'menu'            => '',
      );
      wp_nav_menu( $args );
    ?>
    </div> 
    <nav class="header-nav js-drawer u-mobile">
    <?php
       $args = array(
	      'menu'            => 'menu-nav',
	      'menu_class'      => 'menu',
	      'container'       => 'nav',
	      'container_id'    => 'menubar',
      );
      wp_nav_menu( $args );
    ?>
    </nav>  
  </header>
  