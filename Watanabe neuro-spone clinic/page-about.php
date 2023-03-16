<?php get_header(); ?>

  <main>
    <!-- MVセクション -->
    <div class="mvabout">  
      <div class="mv-wrapper">
        <div class="mv__page-image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/main/about_mv.jpg" alt="渡邊脳神経外科の画像です。">
        </div>
        <div class="subtitle mv__subtitle">
          <h2 class="subtitle__main">About</h2>
          <h3 class="subtitle__sub">クリニックのご紹介</h3>
        </div>
      </div> 
    </div> 
    <!-- ページ遷移 -->
    <div class="pagemoving inner">
      <a href="<?php echo home_url('/'); ?>"><p>HOME</p></a>
      <p>></p>
      <a href="<?php echo home_url('/about'); ?>"><p>クリニックのご紹介</p></a>
    </div>
    <!-- 院長紹介 -->
    <section class="doctor">
    <?php
    $wp_query = new WP_Query();
    $args = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'category__in' => 5,
      'posts_per_page' => 1,
      // 'order' => 'DESC'
    );
  $wp_query->query($args);
  ?>
  <?php 
  if ($wp_query->have_posts()) {
    while (have_posts()) { the_post(); 
  ?>
     <!-- ループ始まり -->
     <div class="doctor-wrapper">
        <h2 class="introduction"><?php the_title(); ?></h2>
        <div class="doctor-card">
          <div class="doctor-bluecircle__right">
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/design-pc.png" alt="青い丸の画像です。">
          </div>
          <div class="doctor-image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/main/about_head-doctor.jpg">
          </div>
          <div class="doctor-content">
            <div class="doctor-content__wrapper">
            <?php the_content();?>
            </div>
            <div class="doctor-content__sign">
              <img src="<?php echo get_template_directory_uri(); ?>/img/main/aboutsign.jpg">
            </div>
          </div>
        </div>
        <div class="doctor-bluecircle__left">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/design-pc.png" alt="青い丸の画像です。">
        </div>
      </div>
      <!-- ループおわり -->
  <?php
  }
  wp_reset_postdata();
  }
  ?>    
    </section>
    <!-- 院内紹介 -->
    <section class="clinic">  
    <?php
    $wp_query = new WP_Query();
    $args = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'category__in' => 4,
      'posts_per_page' => 1,
      // 'order' => 'DESC'
    );
    $wp_query->query($args);
    ?>
    <?php 
    if ($wp_query->have_posts()) {
      while (have_posts()) { the_post(); 
    ?>
    <!-- ループはじめ -->
      <div class="clinic-wrapper">
        <h2 class="introduction clinic__introduction"><?php the_title(); ?></h2>
        <div class="clinic-bluecircle">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/design-pc.png" alt="青い丸の画像です。">
        </div>
        <div class="clinic-wrapper__intro">
        <?php the_content();?> 
        </div>
        <ul class="clinic-wrapper__pics clinic-card">
          <li class="clinic-wrapper__pics-image clinic-card__item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/main/about_hospital_1.jpg">
          </li>
          <li class="clinic-wrapper__pics-image clinic-card__item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/main/about_hospital_2.jpg">
          </li>
          <li class="clinic-wrapper__pics-image clinic-card__item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/main/about_hospital_3.jpg">
          </li>
          <li class="clinic-wrapper__pics-image clinic-card__item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/main/about_hospital_4.jpg">
          </li>
          <li class="clinic-wrapper__pics-image clinic-card__item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/main/about_hospital_5.jpg">
          </li>
          <li class="clinic-wrapper__pics-image clinic-card__item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/main/about_hospital_6.jpg">
          </li>
        </ul>
      </div>
      <!-- ループおわり -->
    <?php
    }
    wp_reset_postdata();
    }
    ?>  
    </section>
  </main>

  <?php get_footer();?>