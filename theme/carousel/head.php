<?php
if (!defined('_GNUBOARD_'))
  exit; // 개별 페이지 접근 불가

if (G5_COMMUNITY_USE === false) {
  define('G5_IS_COMMUNITY_PAGE', true);
  return;
}
include_once(G5_THEME_PATH . '/head.sub.php');
include_once(G5_LIB_PATH . '/latest.lib.php');
include_once(G5_LIB_PATH . '/outlogin.lib.php');
include_once(G5_LIB_PATH . '/poll.lib.php');
include_once(G5_LIB_PATH . '/visit.lib.php');
include_once(G5_LIB_PATH . '/connect.lib.php');
include_once(G5_LIB_PATH . '/popular.lib.php');
?>

<header data-bs-theme="dark">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="https://getbootstrap.kr/docs/5.0/components/carousel/" target="_blank">Carousel
        ?</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-current="page">
              Board
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/bbs/board.php?bo_table=free">Free</a></li>
              <li><a class="dropdown-item" href="/bbs/board.php?bo_table=gallery">Gallery</a></li>
              <li><a class="dropdown-item" href="/bbs/board.php?bo_table=notice">Notice</a></li>
              <li><a class="dropdown-item" href="/bbs/board.php?bo_table=qa">Q&A</a></li>
              <li><a class="dropdown-item" href="/bbs/board.php?bo_table=chess">Chess</a></li>
            </ul>
          </li>
          <?php if ($is_admin == "super") { ?>
            <li class="nav-item ms-auto">
              <a class="nav-link active" aria-current="page" href="/adm/">Admin</a>
            </li>
          <?php } ?>
        </ul>
        <form name="fsearchbox" method="get" action="https://carousel.glitter.kr/bbs/search.php"
          onsubmit="return fsearchbox_submit(this);" style="text-align:center">
          <input type="hidden" name="sfl" value="wr_subject||wr_content">
          <input type="hidden" name="sop" value="and">
          <label for="sch_stx" class="sound_only">검색어 입력</label>
          <input type="text" name="stx" id="sch_stx" maxlength="20" style="text-align:center; border-radius:15px;"
            placeholder="콘텐츠_검색 -회원전용">
          <button type="submit" id="sch_submit" style="border-radius:10px;">
            <i class="fa fa-search" aria-hidden="true"></i>
            <span class="sound_only">검색</span>
          </button>
        </form>
        <div id="login-out">
          <?php
          if ($is_member) {
            echo "<a href='" . G5_BBS_URL . "/logout.php' class='btn btn-outline-primary'>Logout</a>";
          } else {
            echo "<a href='" . G5_BBS_URL . "/login.php' class='btn btn-primary'>Login</a>";
          }
          ?>
        </div>
      </div>
    </div>
  </nav>
</header>