<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
?>

<div class="wrap">
    <?php include_once(G5_THEME_PATH.'/menu.php'); ?>
    <div class="content_wrap sub">
		<section class="sub_visual">
			<div class="sub_top_bg"><img src="/assets/images/sub_top_bg.png"></div>
			<div class="page_name text-typing-any">
				<p>기증자 선별</p>
			</div>
			<div class="page_navi box_width">
				<a href="index.html" class="home">홈</a>
				<div class="dropdown_set">
					<div class="dropdown">
						<div class="dropbtn open-btn-ckver">회사소개</div>
						<div class="dropdown-content">
							<a href="">수의통합의학 강의실</a>
							<a href="">핵심역량/사업</a>
							<a href="">협업/자문 시스템</a>
							<a href="">마이크로바이옴</a>
							<a href="">제품/쇼핑몰</a>
						</div>
					</div>
					<div class="dropdown">
						<div class="dropbtn open-btn-ckver">기증자 선별</div>
						<div class="dropdown-content">
							<a href="">menu01</a>
							<a href="">menu02</a>
							<a href="">menu03</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="ourteam">
		<div class="box_width section_padding">
				<div class="txt_half_box">
					<p class="left_tit">
					기증자 선별
					</p>
					<div class="right_group">
						<p>
						애니바이옴헬스케어는 국내 최초로 개과 고양이를 위한 분변 바이오뱅크를 구축중에 있으며, 기증자 대변에 대한 엄격한 검사와 기증자 자체의 건강, 투약 이력, 행동 및 마이크로바이옴 검사를 포함하여 FMT 기증자 물질에 ​​대한 표준기준(모범 사례) 를 선도합니다.
						</p>
					</div>
				</div>
			</div>
			<div class="rnd">
				<div class="content box_width padd">
					<img src="/assets/images/t1.svg" style="max-width:1180px; margin:0 auto; display: block;" class="m_none_tab_on">
				</div>
			</div>
		</section>
		<section class="ourteam" style="padding: 50px;">

		</section>
	</div>
</div>
<!--E 마크업 끝-->