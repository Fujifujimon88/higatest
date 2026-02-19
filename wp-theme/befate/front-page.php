<?php
/**
 * Template Name: Front Page
 * フロントページテンプレート
 */
get_header();
?>

  <!-- ========== Hero Section ========== -->
  <section class="hero">
    <!-- Top photo strip -->
    <div class="hero__photos hero__photos--top">
      <div class="hero__photo"><img src="<?php echo befate_image('person-01.jpg'); ?>" alt="笑顔の女性" width="220" height="280"></div>
      <div class="hero__photo"><img src="<?php echo befate_image('person-02.jpg'); ?>" alt="スマホを見る男性" width="220" height="280"></div>
      <div class="hero__photo"><img src="<?php echo befate_image('person-03.jpg'); ?>" alt="親子の笑顔" width="220" height="280"></div>
      <div class="hero__photo"><img src="<?php echo befate_image('person-04.jpg'); ?>" alt="帽子の女性" width="220" height="280"></div>
      <div class="hero__photo"><img src="<?php echo befate_image('person-05.jpg'); ?>" alt="眼鏡の女性" width="220" height="280"></div>
      <div class="hero__photo"><img src="<?php echo befate_image('person-06.jpg'); ?>" alt="スマホを操作する女性" width="220" height="280"></div>
    </div>

    <!-- Catchcopy -->
    <div class="hero__copy fade-in">
      <p class="hero__subtitle">人 と 人 と の 繋 が り で 会 社 が あ り 私 た ち が あ る</p>
      <h1 class="hero__title">
        <span class="hero__title-purple">繋がり</span><span class="hero__title-black">が生み出す、豊かな</span><span class="hero__title-green">未来。</span>
      </h1>
      <!-- Decorative wave line -->
      <svg class="hero__wave" viewBox="0 0 480 20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path d="M0 10 Q60 -5 120 10 T240 10 T360 10 T480 10" stroke="#4CAF50" stroke-width="2.5" fill="none"/>
      </svg>
    </div>

    <!-- Bottom photo strip -->
    <div class="hero__photos hero__photos--bottom">
      <div class="hero__photo"><img src="<?php echo befate_image('person-07.jpg'); ?>" alt="ビジネスマン" width="260" height="320"></div>
      <div class="hero__photo"><img src="<?php echo befate_image('person-08.jpg'); ?>" alt="笑顔の男性" width="260" height="320"></div>
      <div class="hero__photo"><img src="<?php echo befate_image('person-09.jpg'); ?>" alt="スーツの女性" width="260" height="320"></div>
      <div class="hero__photo"><img src="<?php echo befate_image('person-10.jpg'); ?>" alt="カバンを持つ女性" width="260" height="320"></div>
      <div class="hero__photo"><img src="<?php echo befate_image('person-11.jpg'); ?>" alt="料理人の女性" width="260" height="320"></div>
    </div>
  </section>

  <!-- ========== Services Section (事業内容) ========== -->
  <section id="services" class="services">
    <div class="services__inner">
      <div class="section-heading section-heading--light fade-in">
        <h2 class="section-heading__title">事業内容</h2>
        <span class="section-heading__en">Services</span>
      </div>

      <div class="services__grid stagger-children">
        <div class="services__card services__card--wide fade-in">
          <div class="services__card-img">
            <img src="<?php echo befate_image('person-07.jpg'); ?>" alt="営業支援・営業代行事業">
          </div>
          <p class="services__card-label">営業支援・営業代行事業</p>
        </div>
        <div class="services__card fade-in">
          <div class="services__card-img">
            <img src="<?php echo befate_image('person-08.jpg'); ?>" alt="各種コンサルティング事業">
          </div>
          <p class="services__card-label">各種コンサルティング事業</p>
        </div>
        <div class="services__card fade-in">
          <div class="services__card-img">
            <img src="<?php echo befate_image('person-09.jpg'); ?>" alt="業務委託事業">
          </div>
          <p class="services__card-label">業務委託事業</p>
        </div>
        <div class="services__card fade-in">
          <div class="services__card-img">
            <img src="<?php echo befate_image('person-10.jpg'); ?>" alt="広告代理店事業">
          </div>
          <p class="services__card-label">広告代理店事業</p>
        </div>
        <div class="services__card fade-in">
          <div class="services__card-img">
            <img src="<?php echo befate_image('person-11.jpg'); ?>" alt="WEB制作事業">
          </div>
          <p class="services__card-label">WEB制作事業</p>
        </div>
        <div class="services__card fade-in">
          <div class="services__card-img services__card-img--placeholder">
            <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M50 20C45 20 40 25 40 30V45C40 50 45 55 50 55C55 55 60 50 60 45V30C60 25 55 20 50 20Z" fill="rgba(255,255,255,0.2)"/>
              <path d="M30 60C25 65 25 70 30 75L40 80H60L70 75C75 70 75 65 70 60L60 55H40L30 60Z" fill="rgba(255,255,255,0.15)"/>
              <text x="50" y="95" text-anchor="middle" fill="rgba(255,255,255,0.3)" font-size="8">CLOUD</text>
            </svg>
          </div>
          <p class="services__card-label">クラウドサービス事業</p>
        </div>
        <div class="services__card fade-in">
          <div class="services__card-img">
            <img src="<?php echo befate_image('person-01.jpg'); ?>" alt="美容関連店舗の運営">
          </div>
          <p class="services__card-label">美容関連店舗の運営</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== Company Section (会社概要) ========== -->
  <section id="company" class="company">
    <div class="company__inner">
      <div class="section-heading fade-in">
        <h2 class="section-heading__title">会社概要</h2>
        <span class="section-heading__en">Company</span>
      </div>

      <table class="company__table fade-in">
        <tbody>
          <tr>
            <th>会社名</th>
            <td>株式会社ビフェイト</td>
          </tr>
          <tr>
            <th>英語表記</th>
            <td>Befate Co.,Ltd.</td>
          </tr>
          <tr class="company__table-spacer"><td colspan="2"></td></tr>
          <tr>
            <th>設立</th>
            <td>2025年2月</td>
          </tr>
          <tr>
            <th>所在地</th>
            <td>石川県野々市市扇が丘23番31-3号</td>
          </tr>
          <tr>
            <th>資本金</th>
            <td>100万円</td>
          </tr>
          <tr>
            <th>決算期</th>
            <td>12月</td>
          </tr>
          <tr>
            <th>代表者</th>
            <td>代表取締役社長　東山　愛</td>
          </tr>
          <tr class="company__table-spacer"><td colspan="2"></td></tr>
          <tr>
            <th>事業内容</th>
            <td>
              <ul class="company__business-list">
                <li>営業支援・営業代行事業</li>
                <li>各種コンサルティング事業</li>
                <li>業務委託事業</li>
                <li>広告代理店事業</li>
                <li>WEB制作事業</li>
                <li>クラウドサービス事業</li>
                <li>美容関連店舗の運営</li>
              </ul>
            </td>
          </tr>
          <tr class="company__table-spacer"><td colspan="2"></td></tr>
          <tr>
            <th>取引先</th>
            <td>大手民間企業</td>
          </tr>
          <tr>
            <th>取引銀行</th>
            <td>三菱UFJ銀行</td>
          </tr>
        </tbody>
      </table>

      <div class="company__cta fade-in">
        <a href="#" class="btn btn--primary btn--lg">View More →</a>
      </div>
    </div>
  </section>

  <!-- ========== Contact Section (お問い合わせ) ========== -->
  <section id="contact" class="contact">
    <div class="contact__inner">
      <div class="section-heading fade-in">
        <h2 class="section-heading__title">お問い合わせ</h2>
        <span class="section-heading__en">Contact</span>
      </div>
      <p class="contact__text fade-in">
        お気軽にお問い合わせください。<br>
        下記ボタンよりお問い合わせフォームへお進みいただけます。
      </p>
      <div class="contact__cta fade-in">
        <a href="#" class="btn btn--primary btn--xl">お問い合わせはこちら →</a>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
