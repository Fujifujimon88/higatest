<?php
/**
 * メインテンプレート（フォールバック）
 * フロントページはfront-page.phpが使用されます
 */
get_header();
?>

<main class="main-content">
  <div class="main-content__inner" style="max-width:960px;margin:0 auto;padding:8rem 2.4rem;">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article>
        <h1><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>
      </article>
    <?php endwhile; else : ?>
      <p>コンテンツが見つかりませんでした。</p>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>
