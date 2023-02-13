<?php
/* 
Template Name: Contact
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
  研修のお申し込み、その他お問い合わせは、下記のフォームからお問い合わせ内容をご記入ください。<br>
  2日以内に担当者からメールにてご連絡いたします。
  </div>

  <!-- form -->
  <div class="form">
  <h2 class="form-tit">お問い合わせ</h2>
  <div class="form-container">
  <form action="page-download-thanks.html" method="post" class="form-body">
    <?php echo do_shortcode('[contact-form-7 id="103" title="お問い合わせ"]'); ?>
  </form>
  </div>
  </div> <!-- /form -->

  </div>
  </div> <!-- /content -->
  
<?php get_footer(); ?>