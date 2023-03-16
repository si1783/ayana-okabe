<?php get_header(); ?>

<main>
    <!-- MVセクション -->
    <div class="mv">  
      <div class="mv-wrapper">
        <div class="mv__top-image"></div>
        <div class="bluecircle mv__bluecircle">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/design-pc.png" alt="青い丸の画像です。">
        </div>
        <div class="mv__top-backimg">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/mv-sp-back.png" alt="紺色の背景画像です。">
        </div>
        <h1 class="mv__text">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/mv_text_pc.svg" alt="頭痛・めまい・物忘れあなたの第一の相談相手">
        </h1>
      </div>
    </div> 
    <!-- お知らせセクション -->
    <section class="topnews">
      <div class="topnews-wrapper inner">
        <div class="title">
          <div class="title__pic">
            <img src="<?php echo get_template_directory_uri(); ?>/img/main/titlepic.png" alt="脳の画像です">
          </div>
          <h2 class="title-main">お知らせ</h2>
          <h3 class="title-sub">News</h3>
        </div>
        <ul class="topnews-list">
        <!-- 投稿された記事を最新記事３つまで表示する -->
        <?php
          $cat_posts = get_posts(array(
          'post_type' => 'post', // 投稿タイプ
          'category_name' => 'watanews', // カテゴリをスラッグで指定する場合
          'posts_per_page' => 3, // 表示件数
          'orderby' => 'date', // 表示順の基準
          'order' => 'DESC' // 昇順・降順
        ));
        global $post;
        if($cat_posts): foreach($cat_posts as $post): setup_postdata($post); ?>
          <!-- ループ内容 -->
          <li>
            <div class="topnews-list__head">
              <time datetime="" class="topnews-list__head-date"><?php echo get_the_date('Y年m月d日'); ?></time>
              <h4 class="theme orange"><?php the_tags(''); ?></h4>
            </div>
            <p><?php the_title(); ?></p>
            <a href="<?php the_permalink(); ?>" class="topnews-list__head-btnarrow u-desktop"></a> 
          </li>
          <!-- ループおわり -->
        <?php endforeach; endif; wp_reset_postdata(); ?>
        </ul>  
        <div class="btn topnews-btn">
          <a href="<?php echo get_term_link( 'watanews', 'category' ); ?>" class="btn-text">もっと見る</a>
          <div class="btn-arrow"></div>
        </div>
      </div>
      <div class="topnews-bluecircle">
        <img src="<?php echo get_template_directory_uri(); ?>/img/top/design-pc.png" alt="青い丸の画像です。">
      </div>
    </section>
    <!-- クリニックのご紹介セクション -->
    <section class="topabout">
      <div class="topabput-img">
        <div class="topabout-img__clinic">
          <img src="<?php echo get_template_directory_uri(); ?>/img/main/top_about_2.jpg" alt="渡邊脳神経外科の画像です。">
        </div>
        <div class="topabout-img__doctor">
          <img src="<?php echo get_template_directory_uri(); ?>/img/main/top_about_1.jpg" alt="渡邊脳神経外科の画像です。">
        </div>
      </div>
      <div class="topabout-clinic">
        <div class="title topabout-title">
          <div class="title__pic">
            <img src="<?php echo get_template_directory_uri(); ?>/img/main/titlepic.png" alt="脳の画像です">
          </div>
          <h2 class="title-main">クリニックのご紹介</h2>
          <h3 class="title-sub">About</h3>
        </div>
        <p class="topabout-clinic__subtitle">安心して相談できるかかりつけ医</p>
        <p class="topabout-clinic__text">地域の皆様の第一の相談相手になりたい<br>
          頭のことなら”渡邉脳神経外科クリニック”<br>
          そんなニーズにお応えできるクリニックを<br class="u-mobile">
          目指しています。</p>
        <div class="btn topabout-clinic__btn">
          <a href="<?php echo home_url('/about'); ?>" class="btn-text">もっと見る</a>
          <div class="btn-arrow"></div>
        </div>   
      </div>
      <div class="topabout-bluecircle">
        <img src="<?php echo get_template_directory_uri(); ?>/img/top/design-pc.png" alt="青い丸の画像です。">
      </div>
    </section>
     <!-- 診療科セクション -->
     <section class="topcontent">
      <div class="topcontent-img">
        <div class="topcontent-img__clinic">
          <img src="<?php echo get_template_directory_uri(); ?>/img/main/top_treatment_2.jpg" alt="渡邊脳神経外科の画像です。">
        </div>
        <div class="topcontent-img__doctor">
          <picture>
            <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/main/top.treatment.2.png">
            <img src="<?php echo get_template_directory_uri(); ?>/img/main/top_treatment_1.jpg" alt="渡邊脳神経外科の画像です。">
          </picture>
        </div>
      </div>  
      <div class="topcontent-item">
        <div class="title topcontent-title">
          <div class="title__pic">
            <img src="<?php echo get_template_directory_uri(); ?>/img/main/titlepic.png" alt="脳の画像です">
          </div>
          <h2 class="title-main">診療科目</h2>
          <h3 class="title-sub">Treatment</h3>
        </div>
          <p class="topcontent-item__subtitle">早期発見・早期治療が<br class="u-mobile">大事な脳の病気。</p>
          <p class="topcontent-item__text">頭の専門医として、脳卒中や認知症だけではなく、<br class="u-mobile">頭痛やめまい、しびれなどの<br>
            日常的な症状まで幅広く治療を行っております。<br>
            どんなに小さな悩みでもお気軽にご相談ください。</p>
          <div class="btn topcontent-item__btn">
            <a href="<?php echo get_term_link(21, 'treatmentcat'); ?>" class="btn-text">もっと見る</a>
            <div class="btn-arrow"></div>
          </div>     
      </div>
     </section>
     <!-- お知らせセクション -->
     <section class="topcontact">
      <div class="topcontact__bluecircle">
        <img src="<?php echo get_template_directory_uri(); ?>/img/top/design-pc.png" alt="青い丸の画像です。">
      </div>
      <div class="topcontact-img">
        <picture>
          <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/main/top.contact.jpg">
          <img src="<?php echo get_template_directory_uri(); ?>/img/main/contact.SP.jpg" alt="渡邊脳神経外科の画像です。">
        </picture>
      </div>
      <div class="topcontact-wrapper inner">
        <div class="title topcontact-title">
          <div class="title__pic">
            <img src="<?php echo get_template_directory_uri(); ?>/img/main/titlepic.png" alt="脳の画像です">
          </div>
          <h2 class="title-main">お問い合わせ</h2>
          <h3 class="title-sub">Contact</h3>
        </div>
        <p class="topcontact-text">
          当クリニックは地域の皆様の第一の相談相手を<br class="u-mobile">
          目指しております。<br>
          何でもお気軽にお問合せください。
        </p>
        <div class="btn topcontact__btn">
          <a href="<?php echo home_url('/watacontact'); ?>" class="btn-text">お問い合わせへ</a>
          <div class="btn-arrow"></div>
        </div> 
      </div>
     </section>
     <!-- アクセスセクション -->
     <section class="topaccess">
      <div class="title topaccess-title">
        <div class="title__pic">
          <img src="<?php echo get_template_directory_uri(); ?>/img/main/titlepic.png" alt="脳の画像です">
        </div>
        <h2 class="title-main">アクセス</h2>
        <h3 class="title-sub">Access</h3>
      </div>
      <div class="topaccess-wrapper inner">
        <div class="topaccess-wrapper__map">
          <picture>
            <source media="(min-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/main/top.map.jpg">
            <img src="<?php echo get_template_directory_uri(); ?>/img/main/top.map(sp).jpg" alt="渡邊脳神経外科の地図です。">
          </picture>
        </div>
        <div class="topaccess-wrapper__info">
          <p class="topaccess-wrapper__info-parking">
            病院の敷地内に6台の駐車スペースを<br class="u-mobile">
            ご用意しております。<br>
          </p>
          <p class="topaccess-wrapper__info-alarm">
            ※駐車場内での事故等のトラブルについては一切責任を負いかねます。あらかじめご了承ください。
          </p>
        </div>
        <div class="topaccess-wrapper__calender">
          <img src="<?php echo get_template_directory_uri(); ?>/img/main/top.time.jpg" alt="渡邊脳神経外科の営業日です。">
        </div>
      </div>
     </section>
  </main>
  
  <?php get_footer();?>