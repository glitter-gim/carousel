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

<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <?php
    $s = 1;
    for ($i = 0; $i < $list_count; $i++) { ?>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="<?= $i; ?>"
        class="<?= ($i == 0) ? 'active' : ''; ?>" aria-current="true" aria-label="Slide <?= $s; ?>"></button>
      <?php $s++;
    } ?>
  </div>

  <div class="carousel-inner">
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

      <div class="carousel-item <?= ($i == 0) ? 'active' : ''; ?>">
        <?= $img_link_html; ?>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1><?= $list[$i]['wr_subject']; ?></h1>
            <p class="opacity-75">
              <?= mb_strimwidth(strip_tags($list[$i]['wr_content']), 0, 150, '...'); ?>
            </p>
            <p><a class="btn btn-lg btn-secondary" href="<?= $wr_href; ?>">자세히 보기</a></p>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>