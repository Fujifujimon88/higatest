<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- ========== Header ========== -->
  <header class="header">
    <div class="header__inner">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo">
        <?php bloginfo('name'); ?>
      </a>
      <nav class="header__nav">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'header__nav-list',
            'fallback_cb'    => 'befate_default_nav',
            'link_before'    => '',
            'link_after'     => '',
        ));
        ?>
      </nav>
      <div class="header__actions">
        <a href="#contact" class="btn btn--primary">お問い合わせ</a>
        <a href="#contact" class="btn btn--outline">お問い合わせ</a>
      </div>
      <!-- Hamburger button (mobile) -->
      <button class="hamburger" type="button" aria-label="メニューを開く" aria-expanded="false">
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </button>
    </div>
  </header>

  <!-- ========== Mobile Menu ========== -->
  <div class="mobile-menu" aria-hidden="true">
    <div class="mobile-menu__overlay"></div>
    <div class="mobile-menu__drawer">
      <nav class="mobile-menu__nav">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'mobile',
            'container'      => false,
            'menu_class'     => 'mobile-menu__list',
            'fallback_cb'    => 'befate_default_mobile_nav',
        ));
        ?>
      </nav>
      <div class="mobile-menu__cta">
        <a href="#contact" class="btn btn--primary btn--block">お問い合わせ</a>
      </div>
    </div>
  </div>

<?php
// デフォルトナビゲーション（メニュー未設定時のフォールバック）
function befate_default_nav() {
    echo '<ul class="header__nav-list">';
    echo '<li><a href="' . esc_url(home_url('/')) . '" class="header__nav-link">ホーム</a></li>';
    echo '<li><a href="#company" class="header__nav-link">会社概要</a></li>';
    echo '<li><a href="#services" class="header__nav-link">事業内容</a></li>';
    echo '</ul>';
}

function befate_default_mobile_nav() {
    echo '<ul class="mobile-menu__list">';
    echo '<li><a href="' . esc_url(home_url('/')) . '" class="mobile-menu__link">ホーム</a></li>';
    echo '<li><a href="#company" class="mobile-menu__link">会社概要</a></li>';
    echo '<li><a href="#services" class="mobile-menu__link">事業内容</a></li>';
    echo '<li><a href="#contact" class="mobile-menu__link">お問い合わせ</a></li>';
    echo '</ul>';
}
?>
