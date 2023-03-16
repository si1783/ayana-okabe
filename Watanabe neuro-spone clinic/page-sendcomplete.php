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
      <p>></p>
      <a href="<?php echo home_url('/sendcomplete'); ?>"><p>お問い合わせ完了</p></a>
    </div>
    <!-- 送信完了画面 -->
    <section class="complete">
      <div class="complete-wrapper">
        <div class="contacttitle">
          <div class="contacttitle__pic">
            <img src="<?php echo get_template_directory_uri(); ?>/img/main/titlepic.png" alt="脳の画像です">
          </div>
          <h2 class="contacttitle-main complete__contacttitle-main"><?php the_title(); ?></h2>
        </div>
        <p> <?php the_content(); ?></p>
        <div class="send complete__send">
          <a href="<?php echo home_url('/'); ?>" class="send__item">ホームへ戻る</a>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>
