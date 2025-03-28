<?php
if (!defined('_INDEX_'))
  define('_INDEX_', true);
if (!defined('_GNUBOARD_'))
  exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH . '/head.php');
?>

<main>
  <?php
  echo latest('theme/pic_sliding', 'free', 6, 23);
  ?>
  <div class="container marketing">
    <?php
    echo latest('theme/pic_rolling', 'gallery', 3, 23);
    ?>
    <!-- START THE FEATURETTES -->
    <hr class="featurette-divider">
    <?php
    echo latest('theme/pic_pot_notice', 'notice', 1, 23);
    ?>
    <hr class="featurette-divider">
    <?php
    echo latest('theme/pic_pot_qna', 'qa', 1, 23);
    ?>
    <hr class="featurette-divider">
    <?php
    echo latest('theme/pic_pot_chess', 'chess', 1, 23);
    ?>
    <hr class="featurette-divider">
  </div>
</main>

<?php
include_once(G5_THEME_PATH . '/tail.php');
