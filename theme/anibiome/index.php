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

<!--S 마크업 시작-->
<div class="wrap">
    <?php include_once(G5_THEME_PATH.'/menu.php'); ?>
	<div class="content_wrap main">
		<section class="main_visual">
			<div class="box_width">
				<div class="txt_group">
					<div class="text text-typing-any">
						<p>The Health and</p>
						<p>Longevity Start Here!</p>
					</div>
					<div class="container">
					  <div class="arrow"></div>
					  <div class="arrow"></div>
					  <div class="arrow"></div>
					</div>
				</div>
			</div>
			<div class="any_move_item">
				<div class="item01">
					<img src="/assets/images/main_visual_bg_ani_point01.png">
				</div>
				<div class="item02">
					<img src="/assets/images/main_visual_bg_ani_point02.png">
				</div>
			</div>
		</section>
		<section class="product_3-step bg_line">
			<div class="box_width">
				<h3 class="sc_tit al_center">
					전문진단 및 치료 프로그램
					<p class="sc_sub">
						환자의 위장관 및 피부 문제를 치료하기 위한 간단한 3단계 시스템
					</p>
				</h3>
				<ul>
					<li data-aos="flip-left" data-aos-duration="2000">
						<span class="step">step 01</span>
						<div class="img">
							<img src="/assets/images/microbiome_img07.svg">
						</div>
						<p class="text">
							애니바비옴헬스케어 마이크로바이옴<br>건강검사(분변,구강)를<br>실시합니다.
						</p>
					</li>
					<li data-aos="flip-left" data-aos-delay="300" data-aos-duration="2000">
						<span class="step">step 02</span>
						<div class="img">
							<img src="/assets/images/microbiome_img08.svg">
						</div>
						<p class="text">
							장내 미생물 건강 테스트 결과를 기다리는<br>동안(일반적으로 15~30),<br>애니바이옴헬스케어 구호 제품으로<br>증상을 완화할 수 있습니다.
						</p>
					</li>
					<li data-aos="flip-left" data-aos-delay="600" data-aos-duration="2000">
						<span class="step">step 03</span>
						<div class="img">
							<img src="/assets/images/microbiome_img09.svg">
						</div>
						<p class="text">
							환자의 장&구강 마이크로바이옴 건강<br>테스트 보고서 결과를 사용하여<br>반려동물을 위한 맞춤형 계획을 세웁니다.
						</p>
					</li>
				</ul>
			</div>
		</section>
	</div>
	
<!--E 마크업 끝-->

<?php
include_once(G5_THEME_PATH.'/tail.php');