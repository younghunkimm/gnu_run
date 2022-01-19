<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>

<?php
    if(!defined('_INDEX_')) { // index 아닐 때 실행
        include_once(G5_THEME_PATH.'/tail-d.php');
    }
?>

<footer class="footer">
    <address>
        <ul>
            <li>서울특별시 마포구 월드컵북로 402 23층 (상암동, KGIT센터)</li>
            <li>사업자등록번호 : 137-81-07814</li>
            <li>대표번호 : 02)6355-6100</li>
            <li>FAX : 02)325-9459</li>
            <li>COPYRIGHT © 2019 DONGJIN SEMICHEM CO LTD. ALL RIGHTS RESERVED.</li>
        </ul>
    </address>
</footer>
</div>
<script src="<?php echo G5_THEME_URL ?>/js/slick.min.js"></script>
<script src="<?php echo G5_THEME_URL ?>/js/main.js"></script>

<button type="button" id="top_btn">
    <i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
</button>
<script>
$(function() {
    $("#top_btn").on("click", function() {
        $("html, body").animate({
            scrollTop: 0
        }, '500');
        return false;
    });
});
</script>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");