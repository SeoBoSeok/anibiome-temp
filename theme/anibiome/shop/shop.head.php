<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

$q = isset($_GET['q']) ? clean_xss_tags($_GET['q'], 1, 1) : '';

if(G5_IS_MOBILE) {
    include_once(G5_THEME_MSHOP_PATH.'/shop.head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

add_javascript('<script src="'.G5_JS_URL.'/owlcarousel/owl.carousel.min.js"></script>', 10);
add_stylesheet('<link rel="stylesheet" href="'.G5_JS_URL.'/owlcarousel/owl.carousel.css">', 0);
?>

<!-- 상단 시작 { -->
    <div>

<?php
if(defined('_INDEX_')) { // index에서만 실행
    include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
}
?>

<nav style="display: none;">
    <h2>메인메뉴</h2>
    <div class="gnb_wrap">
        <ul id="gnb_1dul">
            <li class="gnb_1dli gnb_mnal"><button type="button" class="gnb_menu_btn" title="전체메뉴"><i class="fa fa-bars" aria-hidden="true"></i><span class="sound_only">전체메뉴열기</span></button></li>
            <?php
            $menu_datas = get_menu_db(0, true);
            $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
            $i = 0;
            foreach( $menu_datas as $row ){
                if( empty($row) ) continue;
                $add_class = (isset($row['sub']) && $row['sub']) ? 'gnb_al_li_plus' : '';
            ?>
            <li class="gnb_1dli <?php echo $add_class; ?>" style="z-index:<?php echo $gnb_zindex--; ?>">
                <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_1da"><?php echo $row['me_name'] ?></a>
                <?php
                $k = 0;
                foreach( (array) $row['sub'] as $row2 ){

                    if( empty($row2) ) continue; 

                    if($k == 0)
                        echo '<span class="bg">하위분류</span><div class="gnb_2dul"><ul class="gnb_2dul_box">'.PHP_EOL;
                ?>
                    <li class="gnb_2dli"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="gnb_2da"><?php echo $row2['me_name'] ?></a></li>
                <?php
                $k++;
                }   //end foreach $row2

                if($k > 0)
                    echo '</ul></div>'.PHP_EOL;
                ?>
            </li>
            <?php
            $i++;
            }   //end foreach $row
            ?>
        </ul>
        <div id="gnb_all">
            <h2>전체메뉴</h2>
            <ul class="gnb_al_ul">
                <?php
                
                $i = 0;
                foreach( $menu_datas as $row ){
                ?>
                <li class="gnb_al_li">
                    <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_al_a"><?php echo $row['me_name'] ?></a>
                    <?php
                    $k = 0;
                    foreach( (array) $row['sub'] as $row2 ){
                        if($k == 0)
                            echo '<ul>'.PHP_EOL;
                    ?>
                        <li><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>"><?php echo $row2['me_name'] ?></a></li>
                    <?php
                    $k++;
                    }   //end foreach $row2

                    if($k > 0)
                        echo '</ul>'.PHP_EOL;
                    ?>
                </li>
                <?php
                $i++;
                }   //end foreach $row

                if ($i == 0) {  ?>
                    <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                <?php } ?>
            </ul>
            <button type="button" class="gnb_close_btn"><i class="fa fa-times" aria-hidden="true"></i></button>
        </div>
        <div id="gnb_all_bg"></div>
    </div>
</nav>
<script>

$(function(){
    $(".gnb_menu_btn").click(function(){
        $("#gnb_all, #gnb_all_bg").show();
    });
    $(".gnb_close_btn, #gnb_all_bg").click(function(){
        $("#gnb_all, #gnb_all_bg").hide();
    });
});

</script>
</div>
<!-- } 상단 끝 -->

<!-- 콘텐츠 시작 { -->
    <?php
// 이 파일은 새로운 파일 생성시 반드시 포함되어야 함
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$g5_debug['php']['begin_time'] = $begin_time = get_microtime();

if (!isset($g5['title'])) {
    $g5['title'] = $config['cf_title'];
    $g5_head_title = $g5['title'];
}
else {
    // 상태바에 표시될 제목
    $g5_head_title = implode(' | ', array_filter(array($g5['title'], $config['cf_title'])));
}

$g5['title'] = strip_tags($g5['title']);
$g5_head_title = strip_tags($g5_head_title);

// 현재 접속자
// 게시판 제목에 ' 포함되면 오류 발생
$g5['lo_location'] = addslashes($g5['title']);
if (!$g5['lo_location'])
    $g5['lo_location'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
$g5['lo_url'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
if (strstr($g5['lo_url'], '/'.G5_ADMIN_DIR.'/') || $is_admin == 'super') $g5['lo_url'] = '';

/*
// 만료된 페이지로 사용하시는 경우
header("Cache-Control: no-cache"); // HTTP/1.1
header("Expires: 0"); // rfc2616 - Section 14.21
header("Pragma: no-cache"); // HTTP/1.0
*/
?>
<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<?php
if (G5_IS_MOBILE) {
    echo '<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes">'.PHP_EOL;
    echo '<meta name="HandheldFriendly" content="true">'.PHP_EOL;
    echo '<meta name="format-detection" content="telephone=no">'.PHP_EOL;
} else {
    echo '<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes">'.PHP_EOL;
    echo '<meta name="HandheldFriendly" content="true">'.PHP_EOL;
    echo '<meta name="format-detection" content="telephone=no">'.PHP_EOL;
    echo '<meta http-equiv="imagetoolbar" content="no">'.PHP_EOL;
    echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">'.PHP_EOL;
}

if($config['cf_add_meta'])
    echo $config['cf_add_meta'].PHP_EOL;
?>
<title><?php echo $g5_head_title; ?></title>
<?php
$shop_css = '';
if (defined('_SHOP_')) $shop_css = '_shop';
echo '<link rel="stylesheet" href="'.run_replace('head_css_url', G5_THEME_CSS_URL.'/'.(G5_IS_MOBILE?'mobile':'default').$shop_css.'.css?ver='.G5_CSS_VER, G5_THEME_URL).'">'.PHP_EOL;
?>
<!--[if lte IE 8]>
<script src="<?php echo G5_JS_URL ?>/html5.js"></script>
<![endif]-->
<script>
// 자바스크립트에서 사용하는 전역변수 선언
var g5_url       = "<?php echo G5_URL ?>";
var g5_bbs_url   = "<?php echo G5_BBS_URL ?>";
var g5_is_member = "<?php echo isset($is_member)?$is_member:''; ?>";
var g5_is_admin  = "<?php echo isset($is_admin)?$is_admin:''; ?>";
var g5_is_mobile = "<?php echo G5_IS_MOBILE ?>";
var g5_bo_table  = "<?php echo isset($bo_table)?$bo_table:''; ?>";
var g5_sca       = "<?php echo isset($sca)?$sca:''; ?>";
var g5_editor    = "<?php echo ($config['cf_editor'] && $board['bo_use_dhtml_editor'])?$config['cf_editor']:''; ?>";
var g5_cookie_domain = "<?php echo G5_COOKIE_DOMAIN ?>";
var g5_theme_shop_url = "<?php echo G5_THEME_SHOP_URL; ?>";
var g5_shop_url = "<?php echo G5_SHOP_URL; ?>";
<?php if(defined('G5_IS_ADMIN')) { ?>
var g5_admin_url = "<?php echo G5_ADMIN_URL; ?>";
<?php } ?>
</script>
<?php
add_javascript('<script src="'.G5_JS_URL.'/jquery-1.12.4.min.js"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/jquery-migrate-1.4.1.min.js"></script>', 0);
if (defined('_SHOP_')) {
    if(!G5_IS_MOBILE) {
        add_javascript('<script src="'.G5_JS_URL.'/jquery.shop.menu.js?ver='.G5_JS_VER.'"></script>', 0);
    }
} else {
    add_javascript('<script src="'.G5_JS_URL.'/jquery.menu.js?ver='.G5_JS_VER.'"></script>', 0);
}
add_javascript('<script src="'.G5_JS_URL.'/common.js?ver='.G5_JS_VER.'"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/wrest.js?ver='.G5_JS_VER.'"></script>', 0);
add_javascript('<script src="'.G5_JS_URL.'/placeholders.min.js"></script>', 0);
add_stylesheet('<link rel="stylesheet" href="'.G5_JS_URL.'/font-awesome/css/font-awesome.min.css">', 0);

// <link rel="stylesheet" type="text/css" href="css/reset.css">
// <link rel="stylesheet" type="text/css" href="css/style.css">
add_stylesheet('<link rel="stylesheet" href="/assets/css/reset.css">', 0);
add_stylesheet('<link rel="stylesheet" href="/assets/css/style.css">', 0);

if(G5_IS_MOBILE) {
    add_javascript('<script src="'.G5_JS_URL.'/modernizr.custom.70111.js"></script>', 1); // overflow scroll 감지
}
if(!defined('G5_IS_ADMIN'))
    echo $config['cf_add_script'];
?>
<!--헤더 컬러 변경-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
<script>
    //헤더 높이 반응하는 스크립트
    $(function(){
        //변수 선언
        var $header = $('header');
        var $window = $(window);
        var pageOffsetTop = 1//색상 변할 부분의 top값

        //스크롤 감지 시
        $window.on('scroll', function(){
            var scrolled = $window.scrollTop() >= pageOffsetTop;
            $header.toggleClass('down', scrolled); //스크롤 감지 시, header에 class="down" 추가
        });
    });
</script>
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body<?php echo isset($g5['body_script']) ? $g5['body_script'] : ''; ?>>
<?php
if ($is_member) { // 회원이라면 로그인 중이라는 메세지를 출력해준다.
    $sr_admin_msg = '';
    if ($is_admin == 'super') $sr_admin_msg = "최고관리자 ";
    else if ($is_admin == 'group') $sr_admin_msg = "그룹관리자 ";
    else if ($is_admin == 'board') $sr_admin_msg = "게시판관리자 ";

    echo '<div id="hd_login_msg">'.$sr_admin_msg.get_text($member['mb_nick']).'님 로그인 중 ';
    echo '<a href="'.G5_BBS_URL.'/logout.php">로그아웃</a></div>';
}
?>
<div class="wrap">
    <?php include_once(G5_THEME_PATH.'/menu.php'); ?>
    <div class="content_wrap sub veterinary">
		<section class="sub_visual">
			<div class="sub_top_bg"><img src="/assets/images/sub_top_bg.png"></div>
			<div class="page_name text-typing-any">
				<p class="al_center"><br class="pc_none">상품 1</p>
			</div>
			<div class="page_navi box_width">
				<a href="index.html" class="home">홈</a>
				<div class="dropdown_set">
					<div class="dropdown">
						<div class="dropbtn open-btn-ckver">상품</div>
						<!-- <div class="dropdown-content">
							<a href="">수의통합의학 강의실</a>
							<a href="">핵심역량/사업</a>
							<a href="">협업/자문 시스템</a>
							<a href="">마이크로바이옴</a>
							<a href="">제품/쇼핑몰</a>
						</div> -->
					</div>
					<!-- <div class="dropdown">
						<div class="dropbtn open-btn-ckver" >Veterinary Integrative Medicine</div>
						<div class="dropdown-content">
							<a href="">menu01</a>
							<a href="">menu02</a>
							<a href="">menu03</a>
						</div>
					</div> -->
				</div>
			</div>
		</section>
	</div>
</div>