jQuery(function(){

  // ドロワーアニメーション
  jQuery('.drawer-btn').click(function(){
    jQuery('.drawer, .drawer-icon, .drawer-bg, .drawer-content').toggleClass('open');
  });

  // Slick Initialize
  jQuery(document).ready(function () {
    jQuery('.mv-img').slick({
      autoplay: true,
      arrows: false
    });
  });

  // トップボタンアニメーション
  jQuery('.footer-topbtn').click(function(){
    
  let $speed = 800;
  let $position = 0;

  jQuery('body,html').animate({
    scrollTop: $position
  }, $speed, 'swing');

  return false;
  });

  // 質問クリックアニメーション
  jQuery('.qa-question').click(function(){
    $speed = 400;

    if( jQuery(this).hasClass('open') ){
      jQuery(this).removeClass('open');
      jQuery(this).next().slideUp($speed);
    } else {
      jQuery(this).addClass('open');
      jQuery(this).next().slideDown($speed);
    }
  });

  // 導入事例グループ遷移アニメーション
  jQuery('.casenav-item a[href^="#"]').click(function(){
    
    let adjust = 170;
    let speed = 500;
    let $href = jQuery(this).attr("href");
    let $target = jQuery($href == "#" || $href == "" ? 'html' : $href);

    let $position = $target.offset().top - adjust;

    jQuery('body,html').animate({
      scrollTop: $position
    }, speed, 'swing');
    return false;

  });

  // ***********************
  // Form アニメーション
  // ***********************
  
  // Selectボタンの初期値だけ色を変える
  jQuery('#select').change(function(){
    var value = jQuery('option:selected').val();

    if( value != "" ){
      jQuery(this).addClass('selected');
    } else {
      jQuery(this).removeClass('selected');
    }
  });

})