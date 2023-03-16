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
    </div>
    <!-- 記事の内容 -->
    <section class="article">
      <div class="article-wrapper inner">
        <div class="article-wrapper__main">
          <!-- メインお知らせ記事一覧 -->
          <ul class="article-items">
            <!-- 親カテゴリの記事の表示 -->
          <?php
            $cat_posts = get_posts(array(
             'post_type' => 'post', // 投稿タイプ
              // 'category' => 13, // カテゴリIDを番号で指定する場合
              'category_name' => 'watanews', // カテゴリをスラッグで指定する場合
              'posts_per_page' => 5, // 表示件数
              'orderby' => 'date', // 表示順の基準
              'order' => 'DESC' // 昇順・降順
          ));
          global $post;
          if($cat_posts): foreach($cat_posts as $post): setup_postdata($post); ?>
          <?php if(has_post_thumbnail()):
	          $id=get_post_thumbnail_id();
	          $img_src=wp_get_attachment_image_src($id)[0];
          else:
            $img_src=get_template_directory_uri()."/img/main/news.img.2.jpg";
          endif;
          ?>
              <li>
                <!-- ループ処理 -->
                <div class="article-items__item">
                 <h4 class="theme accent article-items__item-theme"><?php the_tags(''); ?></h4>
                  <a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
                  <time datetime="" class="article-items__item-date"><?php echo get_the_date('Y年m月d日'); ?></time>
                </div> 
                <div class="article-items__image">
                  <img src="<?php echo $img_src; ?>" alt="記事のサムネイル画像です。">
                </div>
              </li>
              <!-- ループ終わり -->
          <?php endforeach; endif; wp_reset_postdata(); ?>
          </ul>
          <!-- ページネーション   --> 
          <?php
          $args =array(
            'type'=>'list',
            'prev_text'=>'<',
            'next_text'=>'>',
            'mid_size' => 5,
          );
          echo paginate_links($args);
          ?>
        </div>
        <!-- カテゴリーと月別アーカイブ -->
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
