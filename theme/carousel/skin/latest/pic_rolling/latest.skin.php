<?php
if (!defined('_GNUBOARD_'))
  exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH . '/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="' . $latest_skin_url . '/style.css">', 0);
$thumb_width = 297;
$thumb_height = 212;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div class="row">
  <?php
  for ($i = 0; $i < $list_count; $i++) {
    $img_link_html = '';
    $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if (isset($thumb['src']) && $thumb['src']) {
      $img = $thumb['src'];
    } else {
      $img = G5_THEME_URL . '/img/latest_no_image.png';
      $thumb['alt'] = '이미지가 없습니다.';
    }

    $img_content = '<img src="' . $img . '" alt="' . $thumb['alt'] . '" >';
    $img_link_html = '<a href="' . $wr_href . '" class="lt_img" >' . run_replace('thumb_image_tag', $img_content, $thumb) . '</a>';
    ?>

    <div class="col-lg-4">
      <?= $img_link_html; ?>
      <h2 class="fw-normal"><?= $list[$i]['wr_subject']; ?></h2>
      <p class="opacity-75">
        <?= mb_strimwidth(strip_tags($list[$i]['wr_content']), 0, 134, '...'); ?>
      </p>
      <p><a class="btn btn-outline-secondary" href="<?= $wr_href; ?>">자세히 보기</a></p>
    </div>

  <?php } ?>
</div>