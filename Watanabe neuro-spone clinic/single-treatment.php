
<?php get_header(); ?>

<main>
  <!-- MVセクション -->
  <div class="mv">  
    <div class="mv-wrapper">
      <div class="mv__page-image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/main/treatmenttitile.jpg" alt="渡邊脳神経外科の画像です。">
      </div>
      <div class="subtitle mv__subtitle">
        <h2 class="subtitle__main">Treatment</h2>
        <h3 class="subtitle__sub">診療科目</h3>
      </div>
    </div>
  </div> 
  <!-- ページ遷移 -->
  <div class="pagemoving inner">
    <a href="<?php echo home_url('/'); ?>"><p>HOME</p></a>
    <p>></p>
    <a href="<?php echo get_term_link(21, 'treatmentcat'); ?>"><p>診療科目</p></a>
    <p>></p>
    <a href="<?php echo get_permalink( $id );?>"><p><?php the_title();?></p></a>
  </div>
  <!-- 頭痛記事の内容 -->
  <section class="headache">
    <div class="headache-wrapper">
    <?php if(have_posts()):
      while (have_posts()):the_post(); 
        if(has_post_thumbnail()):
          $id=get_post_thumbnail_id();
          $img_src=wp_get_attachment_image_src($id)[0];
        else:
          $img_src=get_template_directory_uri()."/img/main/treatment_eyecatch_1.jpg";
        endif;
    ?>   
      <div class="headache-image">
        <img src="<?php echo $img_src; ?>">
      </div>
      <div class="headache-wrapper__main">
        <h5><?php the_title();?></h5>
        <div class="headache-wrapper__main-content">
          <?php the_content();?>
        </div>
        <div class="send headache-wrapper__main-content__send">
          <a href="<?php echo get_term_link(21, 'treatmentcat'); ?>" class="send__item">診療科目一覧へ</a>
        </div>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>    
    </div>
  </section>
</main>

 <?php get_footer();?>