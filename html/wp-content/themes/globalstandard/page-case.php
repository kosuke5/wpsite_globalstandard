<?php
/*
Template Name: Case
*/
get_header();
?>

  <!-- top -->
  <section class="top _case">
  <div class="top-inner">
  <div class="top-content">
  <h1 class="top-tit">CASE STUDY</h1>
  <p class="top-subtit">導入事例</p>
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

  <!-- casenav -->
  <nav class="casenav">
  <div class="casenav-inner">
  <?php 
    $terms = get_terms('training_plan', array('hide_empty' => false, 'orderby' => 'count', 'order' => 'DESC'));
    if($terms):
  ?>
  <ul class="casenav-list">
  <?php foreach($terms as $term): ?>
  <li class="casenav-item"><a href="<?php echo "#". $term->slug; ?>"><?php echo esc_html($term->name); ?></a></li>
  <?php endforeach; ?>
  </ul>
  <?php endif; ?>
  </div>
  </nav> <!-- /casenav -->

  <!-- plan -->
  <section class="plan">

  <?php if($terms): ?>
  <?php foreach($terms as $term): ?>
  <!-- planItem -->
  <section class="planItem" id="<?php echo $term->slug; ?>">
  <div class="planItem-inner">
  <h2 class="planItem-tit"><?php echo $term->name ?><span><?php echo $term->description; ?></span></h2>
  <?php
    $plan_query = new WP_Query(
      array(
        'post_type' => 'custom_case',
        'orderby' => 'date',
        'order' => 'ASC',
        'tax_query' => array(
          array(
            'taxonomy' => 'training_plan',
            'field' => 'slug',
            'terms' => $term->slug,
          ),
        ),
      )
    );
  ?>
  <?php if($plan_query->have_posts()): ?>
  <div class="planItem-container">
  <?php 
    while($plan_query->have_posts()):
    $plan_query->the_post();
    $customField = SCF::get('company');
  ?>
  <div class="planItem-card" id="<?php echo $post->ID; ?>">
  <div class="planItem-cardInner">
    <div class="planItem-ctop">
    <div class="planItem-ctopleft">
      <div class="planItem-business"><?php echo $customField[0]["field"]; ?></div>
      <h3 class="planItem-ctit"><?php echo $customField[0]["name"] ?><span>様</span></h3>
    </div>
    <div class="planItem-logo">
    <img src="<?php echo esc_url(wp_get_attachment_url($customField[0]["logo"])); ?>" alt="導入事例のロゴイメージ画像です">
    </div>
    </div>
    <div class="planItem-content">
    <div class="planItem-course">研修コース：<span><?php echo $customField[0]["plan"]; ?></span></div>
    <ul class="planItem-list">
      <li class="planItem-item">
      <div class="planItem-itit">研修の目的</div>
      <p class="planItem-itext"><?php echo $customField[0]["purpose"]; ?></p>
      </li>
      <li class="planItem-item">
      <div class="planItem-itit">選んだ理由</div>
      <p class="planItem-itext"><?php echo $customField[0]["reason"]; ?></p>
      </li>
      <li class="planItem-item">
      <div class="planItem-itit">導入後の成果・効果</div>
      <p class="planItem-itext"><?php echo $customField[0]["effect"]; ?></p>
      </li>
    </ul>
    </div>
  </div>
  </div>
  <?php wp_reset_postdata(); endwhile; ?>
  </div>
  <?php endif; ?>
  <div class="planItem-morebtn">
  <?php $page_obj = get_page_by_path('service'); ?>
  <a href="<?php echo esc_url(get_page_link($page_obj->ID).'#'.$term->slug); ?>"><?php echo esc_html($term->name. 'の詳細'); ?></a>
  </div>
  </div>
  </section> <!--/planItem -->
  <?php endforeach; ?>
  <?php endif; ?>

  </section> <!-- /plan -->


<?php get_footer() ?>