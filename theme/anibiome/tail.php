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

<!-- 하단 시작 { -->
    <footer>
		<div class="box_width">
			<h4 class="logo">애니바이옴 헬스케어</h4>
			<div class="f_info_wrap">
				<p class="name m_none">Anibiome Healthcare</p>
				<div class="info_area">
					<p><em>Adress :</em> (28651) 242, Sajik-daero, Seowon-gu, Cheongju-si, Chungcheongbuk-do, Korea</p>
					<p><em>Phone :</em> 010-5130-8844</p>
					<p><em>E-mail :</em> anibiome-hc@daum.net</p>
					<p><em>Fax :</em> 043-274-9551</p>
				</div>
				<span class="copyright">2023. Anibiome Healthcare Inc. All Rights Reserved</span>
			</div>
		</div>
	</footer>
</div>

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