<footer>
    <div class="footer-menu inner">
      <ul>
        <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
        <li><a href="<?php echo home_url('/about'); ?>">クリニックについて</a></li>
        <li><a href="<?php echo get_term_link( 'watanews', 'category' ); ?>">お知らせ</a></li>
        <li><a href="<?php echo get_term_link(21, 'treatmentcat'); ?>">診療案内</a></li>
        <li><a href="<?php echo home_url('/watacontact'); ?>">お問い合わせ</a></li>
      </ul>
      <div class="footer__logo">
        <a href="<?php echo get_template_directory_uri(); ?>/index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/bottom/footer.logo.svg"></a>
      </div>
      <div class="footer__detail">
        <p class="footer__detail-address">福岡県福岡市中央区渡邉123</p>
        <p class="footer__detail-tel">Tel. 093-0000-0000</p>
      </div>
    </div>
    <div class="footer-copyright">
      <small>&copy;2022 Watanabe neuro-spone clinic</small>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>