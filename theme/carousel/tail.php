<?php
if (!defined('_GNUBOARD_'))
  exit; // 개별 페이지 접근 불가
?>

<!-- <div id="ft_catch"><img src="<?php echo G5_IMG_URL; ?>/ft_logo.png" alt="<?php echo G5_VERSION ?>"></div> -->
<div id="ft_copy">Copyright &copy; <b>소유하신 도메인.</b> All rights reserved.</div>
<button type="button" id="top_btn">
  <i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
</button>

<div id="bottom_lic">
  <a class="d-inline-flex align-items-center mb-2 text-body-emphasis text-decoration-none" href="/"
    aria-label="Bootstrap">
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="d-block me-2" viewBox="0 0 118 94" role="img">
      <title>Bootstrap</title>
      <path fill-rule="evenodd" clip-rule="evenodd"
        d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"
        fill="currentColor"></path>
    </svg>
    <span class="fs-5">Home</span>
  </a>
  <span id="lic_giyeo"> <a href="https://github.com/twbs/bootstrap/graphs/contributors">기여자 분들</a>의 도움과 세상의
    모든 사랑을 받아 디자인되고
    빌드되었습니다.</span>
  <span>코드 라이선스는 <a href="https://github.com/twbs/bootstrap/blob/main/LICENSE" target="_blank"
      rel="license noopener">MIT</a>이며 문서 라이선스는 <a href="https://creativecommons.org/licenses/by/3.0/" target="_blank"
      rel="license noopener">CC BY 3.0</a>입니다.</span>
  <span>현재 v5.3.3입니다.</span>
</div>

<script>
  $(function () {
    $("#top_btn").on("click", function () {
      $("html, body").animate({ scrollTop: 0 }, '500');
      return false;
    });
  });
</script>
</div>

<?php
if (G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
  echo $config['cf_analytics'];
}
?>

<script>
  $(function () {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
  });
</script>

<?php
include_once(G5_THEME_PATH . "/tail.sub.php");
