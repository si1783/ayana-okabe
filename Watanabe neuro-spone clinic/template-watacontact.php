<?php
/*Template Name: お問い合わせページのテンプレート
*/
?>
<?php get_header(); ?>

<main>

 <!-- MVセクション -->
 <div class="mv">  
      <div class="mv-wrapper">
        <div class="mv__page-image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/main/contacttitle.jpg" alt="渡邊脳神経外科の画像です。">
        </div>
        <div class="subtitle mv__subtitle">
          <h2 class="subtitle__main">Contact</h2>
          <h3 class="subtitle__sub">お問い合わせ</h3>
        </div>
      </div>
    </div> 
    <!-- ページ遷移 -->
    <div class="pagemoving inner">
      <a href="<?php echo home_url('/'); ?>"><p>HOME</p></a>
      <p>></p>
      <a href="<?php echo home_url('/watacontact'); ?>"><p>お問い合わせ</p></a>
    </div>
    <!-- お問い合わせフォーム -->
    <section class="contact">
      <div class="contact-wrapper">
        <div class="contacttitle">
          <div class="contacttitle__pic">
            <img src="<?php echo get_template_directory_uri(); ?>/img/main/titlepic.png" alt="脳の画像です">
          </div>
          <h2 class="contacttitle-main contact__contacttitle-main"><?php the_title(); ?></h2>
        </div>
        <div class="contact-wrapper__text">
          <p>ご質問、ご要望、ご相談は下記フォームをご利用ください。</p>
          <p>※体調に不安がある方は、直接医師の診察をお勧めします。</p> 
        </div>
        <div class="contact-content">
          <?php the_content(); ?>
        </div>
      </div>
    </section>
  
</main>

<?php get_footer(); ?>

    