<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
?>

<div class="wrap shop">
	<?php include_once(G5_THEME_PATH.'/menu.php'); ?>
    <div class="content_wrap sub veterinary">
		<section class="sub_visual shop_header">
			<div class="sub_top_bg"><img src="/assets/images/sub_top_bg.png"></div>
				<div class="page_name text-typing-any">
					<p class="al_center">SHOP</p>
				</div>
				<div class="page_navi box_width">
				<a href="index.html" class="home">홈</a>
				<div class="dropdown_set">
					<div class="dropdown">
						<div class="dropbtn open-btn-ckver">SHOP</div>
						<div class="dropdown-content">
							<a href="">수의통합의학 강의실</a>
							<a href="">핵심역량/사업</a>
							<a href="">협업/자문 시스템</a>
							<a href="">마이크로바이옴</a>
							<a href="">제품/쇼핑몰</a>
						</div>
					</div>
					<div class="dropdown">
						<div class="dropbtn open-btn-ckver" >제품</div>
						<div class="dropdown-content">
							<a href="">menu01</a>
							<a href="">menu02</a>
							<a href="">menu03</a>
						</div>
					</div>
				</div>
			</div>
			</div>
		</section>
		<section class="shop_header">
			<div class="box_width">
				<!-- <h3 class="sc_tit">Shop</h3> -->
				<div class="tap_text m_none_tab_on">
					<a href="#" class="active">All products</a>
					<a href="#">FMT products</a>
					<a href="#">고양이  제품</a>
					<a href="#">강아지 제품</a>
					<a href="#">진단키트</a>
					<a href="#">스타터 팩</a>
					<a href="#">테스트 키트</a>
					<a href="#">신제품</a>
				</div>
				<div class="selectbox_group pc_tab_none">
					<select class="selectbox">
						<option selected>All products</option>
						<option>FMT products</option>
						<option>고양이  제품</option>
						<option>강아지 제품</option>
						<option>진단키트</option>
						<option>스타터 팩</option>
						<option>테스트 키트</option>
						<option>신제품</option>
					</select>
				</div>
			</div>
		</section>
		<section class="product_list">
			<ul class="box_width item_list_wrap"> 
				<li class="login_on"> <!--로그인시, class="login_on"추가--->
					<a href="/shop/item.php?it_id=1688511650">
						<div class="img">
							<img src="/assets/images/shop1.webp">
						</div>
						<div class="info"> 
							<span class="category">animalbiome 수의학</span>
							<p class="tit">개를 위한 GI 릴리프 키트</p>
							<div class="price">35,000원</div>
							<button>가격을 보려면 로그인 또는 등록<i></i></button>
						</div>
					</a>
				</li>
				<li>
					<a href="/shop/item.php?it_id=1688511650">
						<div class="img">
							<img src="/assets/images/shop2.webp">
						</div>
						<div class="info">
							<span class="category">animalbiome 수의학</span>
							<p class="tit">날로 먹인 개의 장 복원 보조제</p>
							<div class="price">35,000원</div>
							<button>가격을 보려면 로그인 또는 등록<i></i></button>
						</div>
					</a>
				</li>
				<li>
					<a href="/shop/item.php?it_id=1688511650">
						<div class="img">
							<img src="/assets/images/shop3.webp">
						</div>
						<div class="info">
							<span class="category">animalbiome 수의학</span>
							<p class="tit">장 건강 테스트</p>
							<div class="price">35,000원</div>
							<button>가격을 보려면 로그인 또는 등록<i></i></button>
						</div>
					</a>
				</li>
				<li>
					<a href="/shop/item.php?it_id=1688511650">
						<div class="img">
							<img src="/assets/images/shop4.webp">
						</div>
						<div class="info">
							<span class="category">animalbiome 수의학</span>
							<p class="tit">개를 위한 구강 건강 테스트</p>
							<div class="price">35,000원</div>
							<button>가격을 보려면 로그인 또는 등록<i></i></button>
						</div>
					</a>
				</li>
				<li>
					<a href="/shop/item.php?it_id=1688511650">
						<div class="img">
							<img src="/assets/images/shop5.webp">
						</div>
						<div class="info">
							<span class="category">animalbiome 수의학</span>
							<p class="tit">개를 위한 장 건강 테스트</p>
							<div class="price">35,000원</div>
							<button>가격을 보려면 로그인 또는 등록<i></i></button>
						</div>
					</a>
				</li>
				<li>
					<a href="/shop/item.php?it_id=1688511650">
						<div class="img">
							<img src="/assets/images/shop6.webp">
						</div>
						<div class="info">
							<span class="category">animalbiome 수의학</span>
							<p class="tit">개를 위한 GI 릴리프 키트</p>
							<div class="price">35,000원</div>
							<button>가격을 보려면 로그인 또는 등록<i></i></button>
						</div>
					</a>
				</li>
				<li>
					<a href="/shop/item.php?it_id=1688511650">
						<div class="img">
							<img src="/assets/images/shop7.webp">
						</div>
						<div class="info">
							<span class="category">animalbiome 수의학</span>
							<p class="tit">개를 위한 GI 릴리프 키트</p>
							<div class="price">35,000원</div>
							<button>가격을 보려면 로그인 또는 등록<i></i></button>
						</div>
					</a>
				</li>
			</ul>
			<!-- <div class="pagination">
			  <a href="#" class="prev">prev</a>
			  <a class="active" href="#">1</a>
			  <a href="#" class="next">next</a>
			</div> -->
		</section>
	</div>
</div>
<!--E 마크업 끝-->