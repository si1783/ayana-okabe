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
    </div>
    <!-- ボタンセクション -->
    <section class="selectbtn">
      <div class="selectbtn-wrapper">
      <?php
      // 親カテゴリを取得
      $parent_terms = get_terms( array(
        'taxonomy' => 'treatmentcat',
        'hide_empty' => true,
        'parent' => 0,
      ));
      foreach ( $parent_terms as $parent_term ) { ?>
      <?php
      // 子カテゴリを取得
      $child_terms = get_terms( array(
        'taxonomy' => 'treatmentcat',
        'hide_empty' => true,
        'parent' => $parent_term->term_id,
      ));
      foreach ( $child_terms as $child_term ) { ?>
        <div class="send selectbtn__send">
          <a href="#<?php echo $child_term->slug; ?>" class="send__item"><?php echo $child_term->name; ?></a>
        </div>
      <?php } } ?> 
      </div>
    </section>
    <!-- 身体の痛み・身体機能の不調・健診セクション -->
    <section class="treatment">
      <div class="treatment-wrapper inner">
      <?php
      // 親カテゴリを取得
      $parent_terms = get_terms( array(
        'taxonomy' => 'treatmentcat',
        'hide_empty' => true,
        'parent' => 0,
      ));
      foreach ( $parent_terms as $parent_term ) { ?>
      <?php
      // 子カテゴリを取得
      $child_terms = get_terms( array(
        'taxonomy' => 'treatmentcat',
        'hide_empty' => true,
        'parent' => $parent_term->term_id,
      ));
      foreach ( $child_terms as $child_term ) { ?>
      <div class="contacttitle treatment__contacttitle" id="<?php echo $child_term->slug; ?>">
        <div class="contacttitle__pic">
          <img src="<?php echo get_template_directory_uri(); ?>/img/main/titlepic.png" alt="脳の画像です">
        </div>
        <h2 class="contacttitle-main treatment__contacttitle-main">
          <?php echo esc_html( $child_term->name ); ?>
        </h2>
      </div>
      <div class="treatment__text">
        <p><?php echo nl2br( esc_html( $child_term->description ) ); ?></p> 
      </div>
        <ul class="treatment-card">
          <?php
          $args = array(
            'post_type' => 'treatment',
            'taxonomy' => 'treatmentcat',
            'term' => $child_term->slug,
            'posts_per_page' => -1,
            'no_found_rows' => true,
            'orderby' => 'date', // 表示順の基準
            'order' => 'ASC', // 昇順・降順
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            while( $query->have_posts() ) : $query->the_post(); ?>
              <li class="treatment-card__item">
                <a href="<?php the_permalink(); ?>">
                  <?php if( has_post_thumbnail() ) : ?>  
                    <div class="treatment-card__item-image">
                      <?php the_post_thumbnail(); ?>
                    </div> 
                  <?php endif; ?>  
                  <p><?php the_title(); ?></p>
                </a>
              </li> 
            <?php endwhile;
            wp_reset_postdata();
          endif; ?>
        </ul>
      <?php } ?>
    <?php } ?>
  </div> 
</section>
  </main>
  
  <?php get_footer();?>
  