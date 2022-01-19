<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>
<?php
if(defined('_INDEX_')) { // index에서만 실행
    include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
}
?>

<div class="wrap">
    <header class="header">
        <div class="hd_top">
            <div class="container">
                <div class="left">동진쎄미켐은 반도체 및 디스플레이용 재료, 대체에너지(Li-ion rechargeable batteries, fuel cells)용 재료와 발포제를 제조
                    판매하는 회사입니다.</div>
                <div class="right">
                    <a href="/bbs/login.php">
                        <i class="fa fa-user-o" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="hd">
            <div class="container">
                <h1>
                    <a href="/">
                        <img src="<?php echo G5_THEME_URL ?>/img/h1_logo.jpg" alt="">
                    </a>
                </h1>
                <nav class="gnb">
                    <ul>
                        <li><a href="#!">회사소개</a></li>
                        <li><a href="#!">사업분야</a></li>
                        <li><a href="#!">지속가능경영</a></li>
                        <li><a href="#!">IR/PR</a></li>
                        <li><a href="/bbs/board.php?bo_table=qa">고객문의</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

<?php
    if(!defined('_INDEX_')) { // index 아닐 때 실행
        include_once(G5_THEME_PATH.'/head-d.php');
    }
?>