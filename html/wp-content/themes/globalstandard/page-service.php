<?php
/*
Template Name: Service
*/
get_header();
?>

  <!-- top -->
  <section class="top _service">
  <div class="top-inner">
  <div class="top-content">
  <h1 class="top-tit">SERVICE</h1>
  <p class="top-subtit">サービス</p>
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

  <!-- program -->
  <section class="program">
  <div class="program-inner">
  <h2 class="program-tit">世界で活躍できる<br>グローバルな人材を育てる<br>３つの研修プログラム</h2>
  <ul class="program-list">
  <li class="program-item" id="bet">
    <div class="program-itemInner">
    <div class="program-content _left">
    <div class="program-number _left">01</div>
    <h3 class="program-itit">ビジネス英語研修</h3>
    <p class="program-isubtit">Business English Training</p>
    <p class="program-text">
    ビジネス英会話はこれからの時代、すべてのビジネスパーソンが学ぶべき必須スキルと考えおります。<br>
    海外にビジネス展開する際にはもちろんのこと、日本国内でも英会話コミュニケーションができることによってチャンスが掴める場面があります。<br><br>
    担当する講師は皆、豊富な海外ビジネス経験者であり、ティーチングスキル、コミュニケーションスキル、人間性に加えて採用後には厳しいトレーニング期間を設けているので、様々な職業や職種に合ったスキルまで身につけられます。<br>
    また、必要に応じてマンツーマン形式のレッスンを行うことも可能なので、時間の限り話すことができ効率よく上達することができます。
    </p>
    <table class="program-table">
      <tr class="program-trow">
      <th class="program-thead">対象</th>
      <td class="program-tdata">ビジネスの中で使える英語コミュニケーション能力が必要な方</td>
      </tr>
      <tr class="program-trow">
      <th class="program-thead">費用</th>
      <td class="program-tdata">時間内容要相談</td>
      </tr>
    </table>
    <div class="program-ibtn"><a href="<?php echo esc_url(get_page_link(get_page_by_path('contact'))); ?>">お申し込みはこちら</a></div>
    </div>
    <figure class="program-iimg _right"><img src=<?php echo esc_url(get_template_directory_uri()."/img/img-service-detail01.jpg"); ?> alt="サービスのイメージ写真です。"></figure>
    </div>
  </li>
  <li class="program-item" id="ccc">
    <div class="program-itemInner">
    <div class="program-content _right">
    <div class="program-number _right">02</div>
    <h3 class="program-itit">異文化<br>コミュニケーション</h3>
    <p class="program-isubtit">Cross-cultural communication</p>
    <p class="program-text">
    急速にグローバル化が進んでおり、ビジネスの場面に限らず様々な文化的背景を持つ者同士の交流はもはや日常的な光景となりました。<br>
    言語や文化が異なる相手を理解することで世界が広がり、新たなビジネスチャンスに巡り会うことは少なくありません。<br>
    多様な価値観を尊重しながら言葉の垣根を越え、コミュニケーションの力で他者を理解しようとする「異文化コミュニケーション」はこれからの時代、さらに重要となるスキルと言えます。<br><br>
    コミュニケーションの基本となる日本語と英語の力を鍛えつつ、アプローチする国の文化を同時に学び、スムーズなビジネス展開をサポートいたします。
    </p>
    <table class="program-table">
      <tr class="program-trow">
      <th class="program-thead">対象</th>
      <td class="program-tdata">ビジネスの中で使える英語コミュニケーション能力が必要な方</td>
      </tr>
      <tr class="program-trow">
      <th class="program-thead">費用</th>
      <td class="program-tdata">時間内容要相談</td>
      </tr>
    </table>
    <div class="program-ibtn"><a href="<?php echo esc_url(get_page_link(get_page_by_path('contact'))); ?>">お申し込みはこちら</a></div>
    </div>
    <figure class="program-iimg _left"><img src=<?php echo esc_url(get_template_directory_uri()."/img/img-service-detail02.jpg"); ?> alt="サービスのイメージ写真です。"></figure>
    </div>
  </li>
  <li class="program-item" id="bsap">
    <div class="program-itemInner">
    <div class="program-content _left">
    <div class="program-number _left">03</div>
    <h3 class="program-itit">ビジネス留学<br>プログラム</h3>
    <p class="program-isubtit">Business study abroad program</p>
    <p class="program-text">
    将来的に海外で働きたい方に向けた講座をご用意しております。一般的には3ヶ月〜1年の期間で基本的な英会話スキルと、海外でのビジネスマナー習得を目指します。<br>
    通常の語学留学では得られないビジネスの場で通用するコミュニケーションスキル習得に重点をおいておりますので、海外でビジネス展開する際に自信を持って活動することができるようになります。<br><br>
    お申し込みいただく際に綿密なヒアリングを行い、おすすめの留学先を複数ピックアップいたします。海外ビジネス経験豊富な講師が、留学後のキャリアプラン作成までお手伝いいたします。<br>
    </p>
    <table class="program-table">
      <tr class="program-trow">
      <th class="program-thead">対象</th>
      <td class="program-tdata">ビジネスの中で使える英語コミュニケーション能力が必要な方</td>
      </tr>
      <tr class="program-trow">
      <th class="program-thead">費用</th>
      <td class="program-tdata">時間内容要相談</td>
      </tr>
    </table>
    <div class="program-ibtn"><a href="<?php echo esc_url(get_page_link(get_page_by_path('contact'))); ?>">お申し込みはこちら</a></div>
    </div>
    <figure class="program-iimg _right"><img src=<?php echo esc_url(get_template_directory_uri()."/img/img-service-detail03.jpg"); ?> alt="サービスのイメージ写真です。"></figure>
    </div>
  </li>
  </ul>
  </div>
  </section> <!-- /program -->

  <!-- flow -->
  <section class="flow">
  <div class="flow-inner">
  <h2 class="flow-tit">導入の流れ</h2>
  <ul class="flow-list">
  <li class="flow-item">
    <div class="flow-step">STEP<span>01</span></div>
    <div class="flow-content _step1">
    <h3 class="flow-itit">お問い合わせ</h3>
    <p class="flow-text">お問い合わせフォームより必要事項を誤入力の上、お申し込みください</p>
    </div>
  </li>
  <li class="flow-item">
    <div class="flow-step">STEP<span>02</span></div>
    <div class="flow-content _step2">
    <h3 class="flow-itit">ご提案</h3>
    <p class="flow-text">ご依頼の背景をお伺いし、必要なスキルと習得期間から最適なプランをご提案いたします</p>
    </div>
  </li>
  <li class="flow-item">
    <div class="flow-step">STEP<span>03</span></div>
    <div class="flow-content _step3">
    <h3 class="flow-itit">日程調整</h3>
    <p class="flow-text">研修日数と開始日を調整し、今後の流れ全体の段取りをご提案いたします</p>
    </div>
  </li>
  <li class="flow-item">
    <div class="flow-step">STEP<span>04</span></div>
    <div class="flow-content _step4">
    <h3 class="flow-itit">研修開始</h3>
    <p class="flow-text">研修当日はお約束のお時間の30分前に講師が伺います。<br><span>※キャンセルのご連絡は2日前までにお願いいたします</span></p>
    </div>
  </li>
  </ul>
  </div>
  </section> <!-- /flow -->

  <!-- qa -->
  <section class="qa">
  <div class="qa-inner">
  <h2 class="qa-tit">よくある質問</h2>
  <?php
    $group = SCF::get('QandA');
    if($group):
  ?>
  <ul class="qa-list">
  <?php foreach($group as $fields): ?>
  <li class="qa-item">
    <h3 class="qa-question"><?php echo $fields["question"]; ?></h3>
    <p class="qa-ansewr"><?php echo $fields["answer"]; ?></p>
  </li>
  <?php endforeach; ?>
  </ul>
  <?php endif; ?>
  </div> 
  </section> <!-- /qa -->

<?php get_footer() ?>