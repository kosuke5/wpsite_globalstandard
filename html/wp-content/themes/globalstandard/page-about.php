<?php 
/*
Template Name: About
*/
get_header();
?>

  <!-- top -->
  <section class="top _about">
  <div class="top-inner">
  <div class="top-content">
  <h1 class="top-tit">ABOUT US</h1>
  <p class="top-subtit">当社について</p>
  </div>
  </div>
  </section> <!-- /top -->

  <!-- breadcrumb -->
  <div class="breadcrumb">
  <div class="breadcrumb-inner">
  <?php
    if(function_exists('bcn_display')){
      bcn_display();
    }
  ?>
  </div>
  </div>
  <!-- /breadcrumb -->

  <!-- overview -->
  <section class="overview">
  <div class="overview-inner">
    <div class="overview-item _mission">
    <h2 class="overview-tit">MISSION</h2>
    <p class="overview-subtit">社会的使命</p>
    <div class="overview-content">
    <h3 class="overview-catch _mission">人財育成を通じて、<br>豊かな世界を創造する</h3>
    <p class="overview-text">
    急速に広がったグローバル社会に対応できる人材を育成することで、文化・言語の垣根を越えたコミュニケーションを活発にし、一人でも多くの人が豊かに暮らせる世界を実現することを使命とする。
    </p>
    </div>
    </div>
    <div class="overview-item _vision">
    <h2 class="overview-tit">VISION</h2>
    <p class="overview-subtit">企業理念</p>
    <div class="overview-content">
    <h3 class="overview-catch _vision">文化の垣根を越えた<br>人と人とのつながりが新しい価値を生む</h3>
    <p class="overview-text">
    コミュニケーションスキル習得をサポートすることで一人でも多くのビジネスパーソンの視野を広げ、世界を舞台に新しい相乗効果を生む未来を創造する。文化の垣根を越えた人と人とのつながりが新しい価値を生むことを信念とする。
    </p>
    </div>
    </div>
  </div>
  </section> <!-- /overview -->

  <!-- company -->
  <section class="company">
  <div class="company-inner">
  <div class="company-content">
  <h2 class="company-tit">会社概要</h2>
  <table class="company-table">
  <tr class="company-trow">
    <th class="company-thead">代表</th>
    <td class="company-tdata">波瑠　慶太</td>
  </tr>
  <tr class="company-trow">
    <th class="company-thead">事業内容</th>
    <td class="company-tdata">
    <ul class="company-tlist">
    <li class="company-titem">ビジネス英会話教育事業</li>
    <li class="company-titem">異文化交流サポート事業</li>
    <li class="company-titem">ビジネス留学事業</li>
    </ul>
    </td>
  </tr>
  <tr class="company-trow">
    <th class="company-thead">設立</th>
    <td class="company-tdata"><time datetime="2012-10-03">2012年10月3日</time></td>
  </tr>
  <tr class="company-trow">
    <th class="company-thead">所在地</th>
    <td class="company-tdata">〒550-1000<br>大阪市西区土佐堀9-5-5</td>
  </tr>
  <tr class="company-trow">
    <th class="company-thead">TEL</th>
    <td class="company-tdata">06-123-4567（代表）</td>
  </tr>
  <tr class="company-trow">
    <th class="company-thead">FAX</th>
    <td class="company-tdata">06-123-4568（代表）</td>
  </tr>
  <tr class="company-trow">
    <th class="company-thead">E-mail</th>
    <td class="company-tdata">globalstandard@example.com</td>
  </tr>
  </table>
  </div>
  </div>
  </section> <!-- company -->

  <!-- member -->
  <section class="member">
  <div class="member-inner">
  <h2 class="member-tit">役員紹介</h2>
  <ul class="member-list">
    <li class="member-item">
      <figure class="member-img"><img src=<?php echo esc_url(get_template_directory_uri()."/img/img-directors01.jpg") ?> alt="役員の写真です。"></figure>
      <div class="member-content">
      <h3 class="member-name">代表取締役社長<span>波瑠　慶太</span></h3>
      <p class="member-text">20年間外資系企業に勤務し、世界17カ国でビジネスを展開。<br>
      様々な文化に触れ、コミュニケーションスキルを磨き、同時にその必要性を実感する。<br>
      自身も講師を務め、実体験から得られた知見を皆様に還元し、グローバルなビジネス展開をサポートいたします。
      </p>
      <div class="member-sns">
      <a href="#" class="member-snsmedia"><i class="fab fa-twitter"></i></a>
      <a href="#" class="member-snsmedia"><i class="fab fa-facebook"></i></a>
      <a href="#" class="member-snsmedia"><i class="fab fa-instagram"></i></a>
      </div>
      </div>
    </li>
    <li class="member-item">
      <figure class="member-img"><img src=<?php echo esc_url(get_template_directory_uri()."/img/img-directors02.jpg"); ?> alt="役員の写真です。"></figure>
      <div class="member-content">
      <h3 class="member-name">取締役<span>ジャック・スミス</span></h3>
      <p class="member-text">オーストラリア出身。<br>
      英会話の講師として13年のキャリアがあります。<br>
      翻訳業務も担当しており、外国映画の日本版DVDの字幕やテレビ番組の英語をヒヤリングなども行なっております。<br>
      皆様に「より気持ちの伝わる英会話」を習得していただくサポートをいたします。
      </p>
      <div class="member-sns">
      <a href="#" class="member-snsmedia"><i class="fab fa-twitter"></i></a>
      <a href="#" class="member-snsmedia"><i class="fab fa-facebook"></i></a>
      <a href="#" class="member-snsmedia"><i class="fab fa-instagram"></i></a>
      </div>
      </div>
    </li>
    <li class="member-item">
      <figure class="member-img"><img src=<?php echo esc_url(get_template_directory_uri()."/img/img-directors03.jpg"); ?> alt="役員の写真です。"></figure>
      <div class="member-content">
      <h3 class="member-name">取締役<span>メアリー・ジャクソン</span></h3>
      <p class="member-text">アメリカ出身。<br>
      メジャーリーグ球団「ニューヨークヤンキース」の通訳担当として7年間チームに在籍。<br>
      数多くの契約交渉の経験を活かし、国際ビジネスにおけるコミュニケーションのマナーから応用までお伝えいたします。
      </p>
      <div class="member-sns">
      <a href="#" class="member-snsmedia"><i class="fab fa-twitter"></i></a>
      <a href="#" class="member-snsmedia"><i class="fab fa-facebook"></i></a>
      <a href="#" class="member-snsmedia"><i class="fab fa-instagram"></i></a>
      </div>
      </div>
    </li>
  </ul>
  </div>
  </section> <!-- /member -->


<?php get_footer(); ?>