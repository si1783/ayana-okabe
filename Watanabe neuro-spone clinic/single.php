<?php get_header(); ?>

  <main>
    <!-- MVセクション -->
    <div class="mv">  
      <div class="mv-wrapper">
        <div class="mv__page-image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/main/newstitle.jpg" alt="渡邊脳神経外科の画像です。">
        </div>
        <div class="subtitle mv__subtitle">
          <h2 class="subtitle__main">News</h2>
          <h3 class="subtitle__sub">お知らせ</h3>
        </div>
      </div>
    </div> 
    <!-- ページ遷移 -->
    <div class="pagemoving inner">
      <a href="<?php echo home_url('/'); ?>"><p>HOME</p></a>
      <p>></p>
      <a href="<?php echo get_term_link( 'watanews', 'category' ); ?>"><p>お知らせ</p></a>
      <p>></p>
      <a href="<?php echo get_permalink( $id );?>"><p>営業時間について</p></a>
    </div>
    <!-- 記事の内容セクション -->
    <section class="articlecontent">
      <div class="articlecontent-wrapper inner">
      <?php if(have_posts()):
        while (have_posts()):the_post(); 
          if(has_post_thumbnail()):
	          $id=get_post_thumbnail_id();
	          $img_src=wp_get_attachment_image_src($id)[0];
          else:
            $img_src=get_template_directory_uri()."/img/main/news.img.2.jpg";
          endif;
      ?>   
      <!-- 表示内容 --> 
        <div class="articlecontent-main">
          <div class="articlecontent-image">
          <img src="<?php echo $img_src; ?>" alt="記事のサムネイル画像です。">
          </div>
          <div class="articlecontent-wrapper__main">
            <div class="articlecontent-wrapper__field">
              <h4 class="theme accent articlecontent__theme"><?php the_tags(''); ?></h4>
              <time datetime="" class="article-items__item-date"><?php echo get_the_date('Y年m月d日'); ?></time>
            </div>
            <h5><?php the_title(); ?></h5>
            <?php the_content();?>
          <!-- 内容終わり -->
        <?php endwhile; ?>
      <?php endif; ?>  
      </div> 
      <!-- ページネーション前後 -->
      <div class="articlecontent-bottom">
        <ul class="frontback">
          <li class="frontback-item__front"><?php previous_post_link('%link', '<前の記事',true); ?></li>
          <li class="frontback-item__back"> <?php next_post_link('%link', '後の記事>',true); ?></li>
        </ul>
        <!-- ボタン -->
        <div class="send articlecontent-send">
          <a href="<?php echo get_term_link( 'watanews', 'category' ); ?>" class="send__item">お知らせ一覧へ</a>
        </div>
      </div>
        <!-- カテゴリー -->
        <ul class="article-menu">
          <?php
	          $categories = get_categories('parent=0');
	          foreach($categories as $category): ?>
              <?php 
		            $childs = get_categories('child_of='.$category->term_id);
		            if($childs):
		          ?>  
                <!-- 親カテゴリループ -->
                <li>
                  <a href="<?php echo get_category_link($category->term_id); ?>">
                    <h5><?php echo $category->name; ?></.h5>
                  </a> 
                </li> 
                <!-- 子カテゴリループ -->
                <ul class="article-menu__category">
                  <?php foreach($childs as $child): ?>
                    <!-- ループ内容 -->
                      <li>
                        <a href="<?php echo get_category_link($child->term_id); ?>">
				                  <p><?php echo $child->name; ?></p>
                          <div class="article-menu__category-arrow"></div> 
                        </a>   
                      </li>
                    <!-- ループおわり --> 
                  <?php endforeach; ?>  
                  </ul>
              <?php endif; ?>
            <?php endforeach; ?>
           </ul>
      </div>
    </section>
  </main>
  
  <?php get_footer();?>