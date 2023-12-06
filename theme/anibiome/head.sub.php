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
add_stylesheet('<link rel="stylesheet" href="/assets/css/style1.css">', 0);

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
<script type="text/javascript">
    $.noConflict();
</script>

<script>
    $(document).ready(function(){
        $('.fade-slide').slick({
            dots: false,
            arrows : false,
            infinite: true,
            speed: 200,
            autoplay: true,
            fade: true,
            cssEase: 'linear'
        });


        $("#step2").hide();
        $("#step3").hide();
        $("#step4").hide();
        $("#step5").hide();

        $("#next_btn").click(function(){
            $("#step1").hide();
            $("#step2").show();
        })
        $("#next_btn2").click(function(){
            $("#step2").hide();
            $("#step3").show();
        })
        $("#next_btn3").click(function(){
            $("#step3").hide();
            $("#step4").show();
        })
        $("#next_btn4").click(function(){
            $("#step4").hide();
            $("#step5").show();
        })

        $("#prev_btn2").click(function(){
            $("#step2").hide();
            $("#step1").show();
        })
        $("#prev_btn3").click(function(){
            $("#step3").hide();
            $("#step2").show();
        })
        $("#prev_btn4").click(function(){
            $("#step4").hide();
            $("#step3").show();
        })
        $("#prev_btn5").click(function(){
            $("#step4").show();
            $("#step5").hide();
        })


        $("#step2_dog").hide();
        $("#step3_dog").hide();
        $("#step4_dog").hide();
        $("#step5_dog").hide();

        $("#next_btn_dog").click(function(){
            $("#step1_dog").hide();
            $("#step2_dog").show();
        })
        $("#next_btn2_dog").click(function(){
            $("#step2_dog").hide();
            $("#step3_dog").show();
        })
        $("#next_btn3_dog").click(function(){
            $("#step3_dog").hide();
            $("#step4_dog").show();
        })
        $("#next_btn4_dog").click(function(){
            $("#step4_dog").hide();
            $("#step5_dog").show();
        })

        $("#prev_btn2_dog").click(function(){
            $("#step2_dog").hide();
            $("#step1_dog").show();
        })
        $("#prev_btn3_dog").click(function(){
            $("#step3_dog").hide();
            $("#step2_dog").show();
        })
        $("#prev_btn4_dog").click(function(){
            $("#step4_dog").hide();
            $("#step3_dog").show();
        })
        $("#prev_btn5_dog").click(function(){
            $("#step4_dog").show();
            $("#step5_dog").hide();
        })  


    });
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

        // 범위 랜덤 함수(소수점 2자리까지)
        function random(min, max) {
        return parseFloat((Math.random() * (max - min) + min).toFixed(2))
        }

        function floatingObject(selector,delay,size){
        // gsap.to(요소, 시간, 옵션)
        gsap.to(selector, random(1,2), {
            y: size,
            repeat: -1, // -1 무한반복
            yoyo: true, // 애니메이션 되돌아오기(설정안할 시 끈킴)
            ease: Power1.easeInOut, // 타이밍함수
            delay: random(0,delay) // 지연시간
        })
        }
        floatingObject('#ball1',.5,15)
        floatingObject('#ball2',.5,15)

    });
</script>
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