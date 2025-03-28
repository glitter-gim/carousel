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

<?php
if (isset($list[0])) {
  $wr_id = $list[0]['wr_id'];
  $wr_href = get_pretty_url($bo_table, $wr_id);
  $subject = get_text($list[0]['wr_subject']);
  $content = strip_tags($list[0]['wr_content']);
  $summary = mb_strimwidth($content, 0, 200, '...');
  $thumb = get_list_thumbnail($bo_table, $wr_id, 500, 500, false, true);
  $img_src = isset($thumb['src']) && $thumb['src'] ? $thumb['src'] : G5_THEME_URL . '/img/latest_no_image-500.png';
  $img_alt = $thumb['alt'] ?? '이미지가 없습니다.';
  $board_info = sql_fetch("select bo_subject from {$g5['board_table']} where bo_table = '{$bo_table}'");
  $bo_subject = $board_info ? get_text($board_info['bo_subject']) : '게시판';
  ?>
  <div class="row featurette-n">
    <div class="col-md-7">
      <h2 class="featurette-heading fw-normal lh-1">
        <?= $bo_subject; ?>
      </h2>
      <h3 class="text-body-secondary">
        <?= $subject; ?>
      </h3>
      <p class="lead"><?= $summary; ?></p>
      <p><a class="btn btn-outline-secondary" href="<?= $wr_href; ?>">자세히 보기</a></p>
    </div>
    <div class="col-md-5">
      <a href="<?= $wr_href; ?>">
        <img src="<?= $img_src; ?>" alt="<?= $img_alt; ?>" class="featurette-image img-fluid mx-auto" width="500"
          height="500">
      </a>
    </div>
  </div>
<?php } ?>