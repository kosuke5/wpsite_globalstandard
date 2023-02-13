<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Global Standard</title>

  <?php wp_head(); ?>

  <?php if(is_user_logged_in()): ?>
    <style type="text/css">
        .header, .drawer, .drawer-btn {
            margin-top: 32px;
        }

        @media screen and (max-width: 767px){
          .header, .drawer, .drawer-btn {
            margin-top: 46px;
          }
        }
    </style>
  <?php endif; ?>

</head>
<body>
  
  <!-- header -->
  <header class="header">
    <div class="header-inner">
    <p class="header-logo"><a href="<?php echo esc_url(home_url()); ?>">Global Standard</a></p>
    <?php
      wp_nav_menu( array(
        'container' => 'nav',
        'container_class' => 'header-nav',
        'theme_location' => 'header-menu',
      ));
    ?>
    <div class="header-btn _download"><a href="<?php echo esc_url(get_page_link(get_page_by_path('download'))); ?>">資料ダウンロード</a></div>
    <div class="header-btn _contact"><a href="<?php echo esc_url(get_page_link(get_page_by_path('contact'))); ?>">お問い合わせ</a></div>
    </div>
  </header> <!-- /header -->

  <!-- drawer -->
  <div class="drawer">
    <div class="drawer-content">
    <?php
      wp_nav_menu( array(
        'container' => 'nav',
        'container_class' => 'drawer-nav',
        'theme_location' => 'drawer-menu',
      ));
    ?>
    <div class="drawer-navbtn _download"><a href="<?php echo esc_url(get_page_link(get_page_by_path('download'))); ?>">資料ダウンロード</a></div>
    <div class="drawer-navbtn _contact"><a href="<?php echo esc_url(get_page_link(get_page_by_path('contact'))); ?>">お問い合わせ</a></div>
    </div>
    <div class="drawer-bg"></div>
  </div>
  <div class="drawer-btn">
  <span class="drawer-icons">
    <span class="drawer-icon"></span>
    <span class="drawer-icon"></span>
    <span class="drawer-icon"></span>
  </span>
  </div>
  <!-- /drawer -->