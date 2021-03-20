<?php
$path = realpath(dirname(__FILE__) . '') . "/../";
include_once($path.'app_config.php');
include($path.'libs/meta.php');

?>
</head>

<body>



<!-- Header
======================================================================-->
<?php include($path.'libs/header.php'); ?>


<div class="breadcrumb">
  <div class="inner">
    <ul>
      <li><a href="../">ホーム</a></li>
      <li><span>事例一覧</span></li>
    </ul>
  </div>
</div>

<!-- Main Content
======================================================================-->
<main>
</main>


<!-- Footer
======================================================================-->
<?php include($path.'libs/footer.php'); ?>


<!-- Scripts
======================================================================-->
<?php include($path.'libs/scripts.php'); ?>
</body>
</html>
