<?php
/*
Template Name: トップページ
 */
?>

<?php
$path = realpath(dirname(__FILE__) . '/../../../../');
include $path . '/app_config.php';
include $path . '/libs/meta.php';

# タグ取得
$tags = get_terms('documenttag');
// var_dump($tags);
?>
</head>

<body class="top">


<!-- Header
======================================================================-->
<?php include($path.'/libs/header.php'); ?>


<!-- Main Content
======================================================================-->
<main>
  <section class="mainvisual">
    <div class="inner">
      <h1>距離を<br class="sp">越える技術</h1>
      <h2>
        今そこにいるような体験で<br>
        事業のDXを加速する。
      </h2>
      <a href="" class="arrow-btn horizontal">
        <span>4Kストリーミングとは</span>
        <em>
          <img src="./images/common/ico_arrow_blue.svg" alt="">
        </em>
      </a>

      <div class="mainvisual__points">
        <div class="mainvisual__point point01">
          <a href="./documentcat/overview/" class="mainvisual__point__inner">
            <h3>概要</h3>
            <h4>Live Streaming Serviceの概要と機能特徴などについてご説明します</h4>
            <em><img src="./images/common/ico_arrow_black.svg" alt=""></em>
          </a>
        </div>
        <div class="mainvisual__point point02">
          <a href="./documentcat/getting-started/" class="mainvisual__point__inner">
            <h3>Getting Started</h3>
            <h4>Sampleの動かし方や特徴などを動画でご紹介します</h4>
            <em><img src="./images/common/ico_arrow_black.svg" alt=""></em>
          </a>
        </div>
        <div class="mainvisual__point point03">
          <a href="./documentcat/document/" class="mainvisual__point__inner">
            <h3>ドキュメント</h3>
            <h4>アプリケーションの開発者向けガイドやAPI/SDKなどはこちらです</h4>
            <em><img src="./images/common/ico_arrow_black.svg" alt=""></em>
          </a>
        </div>
      </div>

      <h5>タグ</h5>
      <ul class="mainvisual__tags">
        <?php
          for ($i=0; $i < count($tags); $i++) {
            echo '<li><a href="#">'.$tags[$i]->name.'</a></li>';
          }
        ?>
      </ul>
    </div>
  </section>
</main>


<!-- Footer
======================================================================-->
<?php include($path.'/libs/footer.php'); ?>


<!-- Scripts
======================================================================-->
<?php include($path.'/libs/scripts.php'); ?>
</body>
</html>
