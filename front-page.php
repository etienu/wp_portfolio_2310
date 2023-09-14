<?php
/*---------------------------------------------------------
    front-page.php
    トップページ
-----------------------------------------------------------*/
?>

<!DOCTYPE html>
<html lang="ja">

<?php get_template_part(GET_PATH_R('template').'layout/combo/lc-wp-header')?>

<body>

  <?php /* header bar */ ?>
  <?php get_template_part(GET_PATH_R('template').'layout/l-headerbar' ); ?>
  <?php /* 一番上に戻る */ ?>
  <?php get_template_part(GET_PATH_R('template').'object/project/p-js-gototop' ); ?>
  <?php /* ローディング */ ?>
  <?php get_template_part(GET_PATH_R('template').'layout/l-loader' ); ?>

  <?php /* ヒーローページ */ ?>
<section class="l-hero">
  <div class="l-hero__background js-eeparallax" data-spd="0.2" data-scale="1.2" data-adjusty="-40"></div>
  <div class="l-hero__background-boader"></div>
  <div class="l-hero__background-boader__white"></div>
  <div class="l-hero__inner">
    <h2 class="l-hero__heading js-surface__heroheading2">
    <div>！</div>
    <div>わかりやすい</div>
    <div><i class="fas fa-thumbs-up"></i></div>
    <div>使いやすい</div>
    <div>■</div>
    <div>心地よい</div>
    <div>サイト、作ります</div>
    <div>想像を、触れるカタチに</div>
    </h2>
    <div class="js-gsap__scrollbutton">
      <div class="icon">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="text">SCROLL</div>
    </div>
  </div>
</section>

<main>

<?php /* 制作実績 */ ?>
<section class="l-works u-padding_ud100 u-color-bg__white">
  <div class="l-works__inner">
    <?php /* 見出し : 制作実績 */ ?>
    <?php get_template_part(GET_PATH_R('template').'object/project/p-heading-eff', null,
    ['title' => '制作実績','lead'=>"WORKS",'id'=>"works"] ); ?>

    <div class="l-works__content__wrapper">
      <div class="l-works__content__inner">
        <div class="l-works__items">
        <?php get_template_part(GET_PATH_R('template').'object/project/p-custompost-card-one', null, ['post_type' => 'work','name'=>'wp-05', 'effclass'=>'js-surface__ltor']); ?>
        <?php get_template_part(GET_PATH_R('template').'object/project/p-custompost-card-one', null, ['post_type' => 'work','name'=>'lp-03', 'effclass'=>'js-surface__up']); ?>
        <?php get_template_part(GET_PATH_R('template').'object/project/p-custompost-card-one', null, ['post_type' => 'work','name'=>'wp-01', 'effclass'=>'js-surface__rtol']); ?>
        </div>
        <div class="l-works__button__wrapper u-margin__t80">
          <a href="work" class="c-button__portfolio c-button__hover__goto p-button__pf">
            制作実績一覧はこちら
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php /* サービス */ ?>
<section class="l-service u-padding_ud100 u-color-bg__main">
  <div class="l-service__inner">
  <?php
  /*  OS判別デバッグ
  <div class="disp__userAgent"></div>
  */
  ?>
   
    <?php /* 見出し : 可能な作業 */ ?>
    <?php get_template_part(GET_PATH_R('template').'object/project/p-heading-eff', null,
    ['title' => '可能な作業','lead'=>"SERVICE",'id'=>"services",'color'=>"green"] ); ?>

    <div class="l-service__content__wrapper">
      <div class="l-service__content__inner">
        <div class="l-service__items">

          <div class="l-service__item js-surface__up">
            <div class="l-service__image">
              <picture>
                <source srcset="<?php echo GET_PATH()?>service/cording.jpg"  media="(max-width: 768px)" type="image/jpg">
                <img src="<?php echo GET_PATH()?>service/cording.jpg" alt="コーディング" width="400" height="400" loading="lazy">
              </picture>
            </div>
            <div class="l-service__textwrapper">
              <div class="c-title__h3 size--mid">
                <h3>コーディング</h3>
              </div>
              <div class="l-service__lead">
                頂いたデザインからコーディングを行います。FLOCSS/BEMによる再利用性の高い設計。レスポンシブ表示、jsを用いたアニメーションも可能です。
              </div>
            </div>
          </div>

          <div class="l-service__item js-surface__up">
          <div class="l-service__image">
          <picture>
                <source srcset="<?php echo GET_PATH()?>service/wp.jpg"  media="(max-width: 768px)" type="image/jpg">
                <img src="<?php echo GET_PATH()?>service/wp.jpg" alt="WordPress" width="400" height="400" loading="lazy">
              </picture>
          </div>
          <div class="l-service__textwrapper">
              <div class="c-title__h3 size--mid">
                <h3>WordPress構築</h3>
              </div>
              <div class="l-service__lead">
                静的サイトのWordPress化、プラグインの導入、機能のカスタマイズを行います。<br>
              </div>
            </div>
          </div>

          <div class="l-service__item js-surface__up">
          <div class="l-service__image">
            <picture>
              <source srcset="<?php echo GET_PATH()?>service/mente.jpg"  media="(max-width: 768px)" type="image/jpg">
              <img src="<?php echo GET_PATH()?>service/mente.jpg" alt="管理・修正" width="400" height="400" loading="lazy">
            </picture>
          </div>
          <div class="l-service__textwrapper">
              <div class="c-title__h3 size--mid">
                <h3>ホームページ修正</h3>
              </div>
              <div class="l-service__lead">
                公開後サイトの文章や画像、コードの修正などを行います。
                WordPressの修正も対応いたします。
              </div>
            </div>
          </div>
        </div><!--service items -->

        <?php /* 見出し : できること SKILL  */ ?>
        <div class="u-margin__t80"></div>
        <?php get_template_part(GET_PATH_R('template').'object/project/p-heading-eff', null,
        ['title' => 'できること','lead'=>"SKILL",'id'=>"skills",'color'=>'green'] ); ?>


        <div class="l-service__skillwrapper">
          <div class="l-service__skill__head u-margin__b20">コーディング</div>
          <div class="l-service__skill__items js-surface__upgroup">
            <div class="l-service__skill__item">
              <div class="l-service__skill__title">HTML</div>
              <div class="l-service__skill__lead">head内meta・favicon・OGP等の設定、画像のpicture・alt等の指定、h1、h2等構造を厳守</div>
            </div>
            <div class="l-service__skill__item">
            <div class="l-service__skill__title">CSS<br>Sass(SCSS)</div>
            <div class="l-service__skill__lead">FLOCSS/BEMを使用し、構造のわかりやすさ・読みやすさ・再利用性を意識します。</div>
            </div>
            <div class="l-service__skill__item">
              <div class="l-service__skill__title">JavaScript<br>(jQuery)</div>
              <div class="l-service__skill__lead">ハンバーガー、スムーススクロールのような必須機能、swiperなどjQueryを使用せず組めます。matter.jsやthree.jsの経験があります。</div>
            </div>
            <div class="l-service__skill__item">
              <div class="l-service__skill__title">GSAP</div>
              <div class="l-service__skill__lead">jQueryよりも軽く複雑なアニメーションを実装できます。</div>
            </div>
            <div class="l-service__skill__item">
              <div class="l-service__skill__title">PHP</div>
              <div class="l-service__skill__lead">ワードプレスのプラグインを使用せずに、PHPによるメールの送信などが可能です。</div>
            </div>
            <div class="l-service__skill__item">
              <div class="l-service__skill__title">WordPress</div>
              <div class="l-service__skill__lead">テーマの自作、カスタマイズや修正作業が可能です。<br>ファイルを分け、パーツ化できます。</div>
            </div>
          </div>
          <div class="l-service__skill__head u-margin__t20">使用ツール</div>
          <div class="l-service__skill__items js-surface__upgroup u-margin__t20">
            <div class="l-service__skill__item">
              <div class="l-service__skill__title tool">VSCode</div>
              <div class="l-service__skill__lead">コーディングで主に使用するエディタです</div>
            </div>
            <div class="l-service__skill__item">
              <div class="l-service__skill__title tool">Local</div>
              <div class="l-service__skill__lead">ローカル環境を作り、WordPressを動作させるツールです</div>
            </div>
            <div class="l-service__skill__item">
            <div class="l-service__skill__title tool">PhotoShop<br>AffinityPhoto</div>
            <div class="l-service__skill__lead">サムネイル文字の加工や写真の修正、画像切り抜きができます。</div>
            </div>
            <div class="l-service__skill__item">
              <div class="l-service__skill__title tool">Adobe XD<br>Figma</div>
              <div class="l-service__skill__lead">コーディングする為に情報確認や画像の切り出しが可能です</div>
            </div>
            <div class="l-service__skill__item">
              <div class="l-service__skill__title tool">GitHub<br>SourceTree</div>
              <div class="l-service__skill__lead">アップロード/更新経験があります</div>
            </div>
            <div class="l-service__skill__item">
              <div class="l-service__skill__title tool">gulp<br>webpack</div>
              <div class="l-service__skill__lead">node.jsを利用してタスクランナーでの画像圧縮、バンドルツールでのcssコンパイル・jsの結合圧縮が可能です</div>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
</section>


<?php /* 作業の流れ */ ?>
<?php /*
<section class="l-flow u-padding_ud100 u-color-bg__white">
  <div class="l-flow__inner">
  <?php // 見出し : 制作の流れ FLOW  ?>
  <div class="u-margin__t80"></div>
  <?php get_template_part(GET_PATH_R('template').'object/project/p-heading-eff', null,
  ['title' => '制作の流れ','lead'=>"FLOW",'id'=>"flow"] ); ?>

  <div class="l-flow__content__wrapper">
      <div class="l-flow__content__inner">
        <div class="l-flow__items">
          <div class="l-flow__item">
            <div class="l-flow__itembox js-surface__up">
              <div class="c-lead__hard"><h3>1.ヒアリング、お見積り</h3></div>
              <div class="c-lead">お客様と作業内容を打ち合わせし、お見積もりを出します。</div>
            </div>
            <div class="l-flow__arrow js-surface__up ts_c60"></div>
          </div>
          <div class="l-flow__item">
            <div class="l-flow__itembox js-surface__up">
              <div class="c-lead__hard"><h3>2.お客様からのデザイン、素材のご提供</h3></div>
              <div class="c-lead">figma、XD、PhotoShop、Illustratorなどのデザインデータ、
              制作時に必用な文章や画像を受け取ります。また、コーディング仕様書やサイトマップがあれば受け取ります。</div>
            </div>
            <div class="l-flow__arrow js-surface__up ts_c60"></div>
          </div>
          <div class="l-flow__item">
            <div class="l-flow__itembox js-surface__up">
              <div class="c-lead__hard"><h3>3.コーディング</h3></div>
              <div class="c-lead">コーディングルールに従い、ローカル環境で制作していきます。アップロード前、チェックリストに従い必用事項を確認します。<br>
                また、作業中に不明点が生じた場合は先延ばしせずお客様と相談する場合がございます。

              </div>
            </div>
            <div class="l-flow__arrow js-surface__up ts_c60"></div>
          </div>
          <div class="l-flow__item">
            <div class="l-flow__itembox js-surface__up">
              <div class="c-lead__hard"><h3>4.テストアップ、ご確認・修正</h3></div>
              <div class="c-lead">テスト環境にアップロードします。お客様に確認して頂きます。</div>
            </div>
            <div class="l-flow__arrow js-surface__up ts_c60"></div>
          </div>
          <div class="l-flow__item">
            <div class="l-flow__itembox js-surface__up">
              <div class="c-lead__hard"><h3>5.最終調整・納品</h3></div>
              <div class="c-lead">問題がないようであれば最終調整をして、納品させて頂きます。</div>
            </div>
          </div>
        </div>

        <div class="l-flow__browser__wrapper u-margin__t40">
          <div class="l-flow__browser js-surface__up">
            <div class="l-flow__browser__head">＜ 確認環境 ＞</div>
            <div class="l-flow__browser__inner">
              <div class="l-flow__browser__text">
              <!-- <b>Mac</b>：Chrome、Safari、Firefox<br> -->
              <b>Windows</b>：Internet explorer、edge<br>
              <b>Android</b>：Chrome、Safari <br>
              <b>iPhoneSE</b>：Chrome、Safari、Firefox<br>
              </div>
            </div>
          </div>
          <p>※iOSでの確認については、現状iPhoneのみとなっております。<br>
            Macは準備でき次第対応します。</p>
        </div>
      </div>
  </div>

  </div>
</section>
*/ ?>

<?php /* 料金表 */ ?>
<?php
/*
<section class="l-price u-padding_ud100 u-color-bg__main">
  <div class="l-price__inner">
    <?php // 見出し : 料金 PRICE ?>
    <div class="u-margin__t80"></div>
    <?php get_template_part(GET_PATH_R('template').'object/project/p-heading-eff', null,
    ['title' => '料金','lead'=>"PRICE",'id'=>"price",'color'=>'green'] ); ?>

    <div class="l-price__content__wrapper">
      <div class="l-price__content__inner">
        <div class="l-price__items js-surface__upgroup">
          <div class="l-price__item">
            <div class="l-price__head">
              <div class="c-title__h3">トップページ</div>
            </div>
            <div class="l-price__textwrapper">
              <div class="l-price__lead">￥20,000</div>
            </div>
          </div>
          <div class="l-price__item">
            <div class="l-price__head">
              <div class="c-title__h3">下層ページ</div>
            </div>
            <div class="l-price__textwrapper">
              <div class="l-price__lead">￥10,000</div>
            </div>
          </div>
          <div class="l-price__item">
            <div class="l-price__head">
              <div class="c-title__h3">WordPress化</div>
            </div>
            <div class="l-price__textwrapper">
              <div class="l-price__lead">￥50,000</div>
            </div>
          </div>
        </div>
        <div class="l-price__attension u-margin__t20">
          ※内容によって変化します。
        </div>

        <div class="l-price__button__wrapper u-margin__t40">
          <a href="price" class="c-button__portfolio c-button__hover__goto p-button__pf">
            詳しい料金表を見る
          </a>
        </div>
      </div>
    </div>
</div>
</section>
*/ ?>

<?php /* 自己紹介 */ ?>
<section class="l-about">
  <?php /*
  <div class="l-wrapper__hemispherebody-top u-color-bg__main"></div>
  */ ?>
  <div class="l-about__background"></div>
  <div class="l-about__fadewrapper">
    <div class="l-about__inner">
      <?php /* 見出し : 自己紹介 */ ?>
      <?php get_template_part(GET_PATH_R('template').'object/project/p-heading-eff', null,
      ['title' => '自己紹介','lead'=>"PROFILE",'id'=>"profile"] ); ?>

      <p class="u-margin__t80">
        <b>Webコーダー</b><br>
        <b>HIROSHI NINOMIYA</b><br>
        <b>二宮 裕志</b><br>
      </p>
      <p class="l-about__lead u-margin__t40 js-surface__gametext">
        1982年生まれのWebコーダー<br>
        千葉県在住。<br><br>

        1年程前から独学でweb制作を学び続け、今も日々スキルを上げています。<br>
        デザインを忠実に再現しつつ、保守しやすいコーディングを心がけています。<br><br>

        前職では建築業界、消火設備配管工として建築現場で働いておりました。<br>
        大手の現場に関わる事で厳しい施工品質のチェックや、コミュニケーションの大切さ、図面通りにはいかない問題への対応力を学びました。<br><br>

        web制作も同じと考え、相手の立場を想像し、ささいな事でも連絡相談してご要望に最大限応えていきます。<br><br>

        デザインについては勉強中なのでご対応しかねますが<br>
        「コーディングだけして欲しい！」「WordPressごと構築して欲しい！」といったお悩みがあれば<br>
        休日祭日問わず対応可能ですので、ぜひお気軽にご相談ください。<br>
        
      

      </p>
      <!--
      <div class="l-about__SNSwrapper u-margin__t60">
        <a href="https://twitter.com/etienu352" class="c-icon circle s60 basis--grayscale twitter c-icon__hover" target="_blank">
          <span class="fab fa-twitter fa-fw"></span>
          <span class="c-icon__covertext">twitter</span>
        </a>
      </div>
      -->
    </div>
  </div>
  <?php /*
  <div class="l-wrapper__hemispherebody-bottom u-color-bg__main"></div>
  */
  ?>
</section>

<?php /* お問い合わせボタンパーツ */ ?>
<?php get_template_part(GET_PATH_R('template').'layout/contact/l-contact-conv' ); ?>
</main>

<?php get_footer(); ?>

</body>
</html>
