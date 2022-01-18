<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

        <main>
            <section class="main">
                <div class="m_slide">
                    <figure class="itm01"></figure>
                    <figure class="itm02"></figure>
                    <figure class="itm03"></figure>
                </div>
                <div class="slogan">
                    <h2>A Global Leader in<br>Electronic Materials & Foaming Agents</h2>
                    <p>동진쎄미켐은 화학 소재기술의 국산화, 인류의 미래를 만들어가는 새로운 기술,<br>인간존중의 정신을 통해 전자재료와 발포제 분야의 글로벌 리더로서 새로운 역사를 만들어가고 있습니다.</p>
                </div>
            </section>
            <section class="customer">
                <div class="container">
                    <div class="lt">
                        <h3>NEWS &amp; Notice <a href="/bbs/board.php?bo_table=notice"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a></h3>
                    </div>
                    <div class="cn">
                        <!-- * 카카오맵 - 지도퍼가기 -->
                        <!-- 1. 지도 노드 -->
                        <div id="daumRoughmapContainer1642488916116" class="root_daum_roughmap root_daum_roughmap_landing" style="width:100%"></div>

                        <!--
                            2. 설치 스크립트
                            * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
                        -->
                        <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                        <!-- 3. 실행 스크립트 -->
                        <script charset="UTF-8">
                            new daum.roughmap.Lander({
                                "timestamp" : "1642488916116",
                                "key" : "28uce",
                                // "mapWidth" : "640",
                                "mapHeight" : "250"
                            }).render();
                        </script>
                    </div>
                    <div class="rt">
                        <a href="tel:02.6355-6100"><i class="fa fa-phone"></i></a>
                        <strong><a href="tel:02.6355-6100">02)6355-6100</a></strong>
                        <span>
                            FAX : 02)325-9459
                            <a href="mailto:dongjin@gmail.com">dongjin@gmail.com</a>
                        </span>
                    </div>
                </div>
            </section>
        </main>

<?php
include_once(G5_THEME_PATH.'/tail.php');