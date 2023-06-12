<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<!--S 햄버거 모달-->
<div class="modal hamburger" id="mb_gnb">
  <div class="modal_container">
    <div class="m_content">
		<div class="gnb_header">
			<a href="index.html" class="logo">로고</a>
			<button onclick="mdHide('mb_gnb')" class="btn_close">닫기</button>
		</div>
        <div class="gnb_menu">
			<a href="#" class="open-btn-ckver">수의통합의학 강의실</a>
			<div class="detail_menu">
				<a href="#">수의통합의학</a>
				<a href="#">노령동물전문관리 프로그램</a>
				<a href="#">강의/교육컨텐츠</a>
				<a href="#">전문진료자문시스템</a>
			</div>
			<a href="#"  class="open-btn-ckver">회사소개</a>
			<div class="detail_menu">
				<a href="#">menu01</a>
				<a href="#">menu02</a>
				<a href="#">menu03</a>
			</div>
			<a href="#"  class="open-btn-ckver">핵심역량/사업</a>
			<div class="detail_menu">
				<a href="#">menu01</a>
				<a href="#">menu02</a>
				<a href="#">menu03</a>
			</div>
			<a href="#"  class="open-btn-ckver">협업/자문 시스템</a>
			<div class="detail_menu">
				<a href="#">menu01</a>
				<a href="#">menu02</a>
				<a href="#">menu03</a>
			</div>
			<a href="#"  class="open-btn-ckver">마이크로바이옴</a>
			<div class="detail_menu">
				<a href="#">menu01</a>
				<a href="#">menu02</a>
				<a href="#">menu03</a>
			</div>
			<a href="#"  class="open-btn-ckver">제품/쇼핑몰</a>
			<div class="detail_menu">
				<a href="#">menu01</a>
				<a href="#">menu02</a>
				<a href="#">menu03</a>
			</div>
		</div>
    </div>
  </div>
</div>
<!--E 햄버거 모달 끝-->
<!--스크립트-->
	<!--애니메이션 사용-->
<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });
</script>
	<!--드롭다운-->
<script>
	var checkdropdown = document.getElementsByClassName("open-btn-ckver");
	var b;

	for (b = 0; b < checkdropdown.length; b++) {
	  checkdropdown[b].addEventListener("click", function() {
		this.classList.toggle("active");
		this.nextElementSibling.classList.toggle("show");
	  });
	}
</script>
	<!--모달-->
<script>
	function mdShow(mdName) {
	  var $layer = $("#" + mdName);
	  $layer.addClass("show");
	}
	function mdHide(mdName) {
	  $("#" + mdName).removeClass("show");
	}
</script>

<?php if ($is_admin == 'super') {  ?><!-- <div style='float:left; text-align:center;'>RUN TIME : <?php echo get_microtime()-$begin_time; ?><br></div> --><?php }  ?>

<!-- ie6,7에서 사이드뷰가 게시판 목록에서 아래 사이드뷰에 가려지는 현상 수정 -->
<!--[if lte IE 7]>
<script>
$(function() {
    var $sv_use = $(".sv_use");
    var count = $sv_use.length;

    $sv_use.each(function() {
        $(this).css("z-index", count);
        $(this).css("position", "relative");
        count = count - 1;
    });
});
</script>
<![endif]-->

<?php run_event('tail_sub'); ?>

</body>
</html>
<?php echo html_end(); // HTML 마지막 처리 함수 : 반드시 넣어주시기 바랍니다.