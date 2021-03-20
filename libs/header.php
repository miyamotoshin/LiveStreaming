<header class="header">
  <div class="header__inner">
    <div class="header__brand">
      <a href="<?php echo APP_URL; ?>">
        <img src="<?php echo APP_URL; ?>images/common/logo_white.svg" alt="4K Live Streaming">
        <span>Developer</span>
      </a>
    </div>
    <div class="header__navigation">
      <ul>
        <?php
        $terms = get_terms( 'documentcat', $args );
        for ($i=0; $i < count($terms); $i++) {
          if($terms[$i]->parent == 0) {
            echo '<li><a href="'.APP_URL.'documentcat/'.$terms[$i]->slug.'">'.$terms[$i]->name.'</a></li>';
          }
        }
        ?>
      </ul>
      <a href="" class="header__login-btn">
        <span>ログイン</span>
      </a>
      <div class="header__goto-developer">
        <a href="https://pj.nuxil.jp/ricoh/dist/" target="_blank">
          <span>Service Site</span>
          <em><img src="<?php echo APP_URL; ?>images/common/ico_arrow.svg" alt=""></em>
        </a>
      </div>
    </div>
    <a href="javascript:void(0)" class="header__toggle sp">
      <span></span>
      <span></span>
      <span></span>
    </a>
  </div>
</header>
