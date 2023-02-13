<?php
/*
Template Name: Contact-thanks
*/
get_header();
?>

  <!-- top -->
  <section class="top _contact">
  <div class="top-inner">
  <div class="top-content">
  <h1 class="top-tit">CONTACT</h1>
  <p class="top-subtit">お問い合わせ</p>
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

  <!-- content -->
  <div class="content">
  <div class="content-inner">
  <div class="content-text">
  お問い合わせありがとうございました。<br>
  2日以内に担当者からメールにてご連絡いたしますので、しばらくお待ちいただけますと幸いです。
  </div>
  <a href="<?php echo esc_url(home_url()); ?>" class="content-link">トップへ戻る</a>
  </div>
  </div> <!-- /content -->
  
<?php get_footer(); ?>