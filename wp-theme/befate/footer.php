  <!-- ========== Footer ========== -->
  <footer class="footer">
    <div class="footer__inner">
      <div class="footer__brand">
        <img src="<?php echo befate_image('logo-white.png'); ?>" alt="<?php bloginfo('name'); ?>" class="footer__logo-img">
        <p class="footer__company-name">株式会社ビフェイト</p>
        <p class="footer__address">石川県野々市市扇が丘23番31-3号</p>
      </div>
      <nav class="footer__nav">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'footer',
            'container'      => false,
            'menu_class'     => 'footer__nav-list',
            'fallback_cb'    => 'befate_default_footer_nav',
        ));
        ?>
      </nav>
    </div>
    <div class="footer__bottom">
      <p class="footer__copyright">&copy; <?php echo date('Y'); ?> Befate Co.,Ltd. All rights reserved.</p>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>

<?php
function befate_default_footer_nav() {
    echo '<ul class="footer__nav-list">';
    echo '<li><a href="' . esc_url(home_url('/')) . '" class="footer__nav-link">ホーム</a></li>';
    echo '<li><a href="#company" class="footer__nav-link">会社概要</a></li>';
    echo '<li><a href="#services" class="footer__nav-link">事業内容</a></li>';
    echo '<li><a href="#contact" class="footer__nav-link">お問い合わせ</a></li>';
    echo '</ul>';
}
?>
