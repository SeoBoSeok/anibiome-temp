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
<link rel="stylesheet" href="/sd.css">
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
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
        <div class="main-wrap">
            <div class="main-page company-define">
                <div class="section-business">
                    <div class="info-box">
                        <div class="title aos-init aos-animate" data-aos="fade-up" data-aos-duration="500">전문진단 및 치료 프로그램</div>
                        <div class="desc">
                            <p data-aos="fade-up" data-aos-duration="500" data-aos-delay="200" class="aos-init aos-animate">환자의 위장관 및 피부 문제를 치료하기 위한 간단한 3단계 시스템</p><!--2023-04-17::마침표삭제--> <!--  People :2023리뉴얼 -->
                        </div>
                    </div>
                    <div class="business aos-init aos-animate" data-aos="fade-left" data-aos-duration="500" data-aos-delay="200" style="cursor: url(&quot;/publishing/pc-ko/dist/img/main/img-cursor.cur&quot;), auto;">
                    <div class="slider">	
                        <div class="swiper-container _businessSlider swiper-container-initialized swiper-container-horizontal">
                            <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-5092px, 0px, 0px); overflow: visible;"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" style="background: url(../public/2023/04/21/11/2/7/7f51cea1-d631-4df9-81bc-438d74942446.png) no-repeat center center / cover" data-swiper-slide-index="0">
                                            <div class="text-area">
                                                <div class="title">
                                                    <span>퍼스널<br>헬스케어</span><a href="business/healthcare/personal-genetic.html">
                                                        <span class="btn btn-circle btn-white btn-md">
                                                            <i class="icon icon-arrow-right-short"></i>
                                                        </span>
                                                    </a>  
                                                </div>
                                                <div class="desc">
                                                    개개인이 타고난 유전자와 우리 몸의 미생물을 분석해 <br>웰니스에서 발병 위험도 예측까지 더 건강한 삶을 위한 <br>과학적인 분석과 체계적인 가이드를 제공합니다
                                                </div>	
                                            </div> 
                                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" style="background: url(/new/images/new1.png) no-repeat center center / cover" data-swiper-slide-index="1">
                                            <div class="text-area">
                                                <div class="title">
                                                    <span>반려동물 헬스케어</span><a href="business/healthcare/pet-genetic.html">
                                                        <span class="btn btn-circle btn-white btn-md">
                                                            <i class="icon icon-arrow-right-short"></i>
                                                        </span>
                                                    </a>  
                                                </div>
                                                <div class="desc">
                                                    소중한 가족인 반려동물의 취약한 유전질환을 미리 알고<br>예방할 수 있도록 유전자검사 기반 건강 솔루션을 제시합니다
                                                </div>	
                                            </div> 
                                        </div><div class="swiper-slide swiper-slide-duplicate" style="background: url(../public/2023/04/21/11/4/2/90b333eb-145d-46d6-9363-d0bce77f44a8.png) no-repeat center center / cover" data-swiper-slide-index="2">
                                            <div class="text-area">
                                                <div class="title">
                                                    <span>연구분석서비스</span><a href="business/research/ngs.html#genome">
                                                        <span class="btn btn-circle btn-white btn-md">
                                                            <i class="icon icon-arrow-right-short"></i>
                                                        </span>
                                                    </a>  
                                                </div>
                                                <div class="desc">
                                                    최첨단 기술 경쟁력과 세계적 수준의 인프라 기반 <br>신속·정확한 유전체 분석 및 전문 컨설팅 서비스를 제공합니다
                                                </div>	
                                            </div> 
                                        </div><div class="swiper-slide swiper-slide-duplicate" style="background: url(../public/2023/04/21/11/4/51/6cdcde79-21d3-4028-a600-c94edaf6b846.png) no-repeat center center / cover" data-swiper-slide-index="3">
                                            <div class="text-area">
                                                <div class="title">
                                                    <span>임상분석서비스</span><a href="business/diagnosis/cancer.html#prediction">
                                                        <span class="btn btn-circle btn-white btn-md">
                                                            <i class="icon icon-arrow-right-short"></i>
                                                        </span>
                                                    </a>  
                                                </div>
                                                <div class="desc">
                                                    질병 예측, 예방, 맞춤 진료, 치료를 위해<br>유전체학·단백질체학·전사체학의 멀티오믹스 분석을 수행하고 있습니다
                                                </div>	
                                            </div> 
                                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" style="background: url(../public/2023/04/21/11/5/44/8042739b-432c-495b-9aa5-99e815fc8f08.png) no-repeat center center / cover" data-swiper-slide-index="4">
                                            <div class="text-area">
                                                <div class="title">
                                                    <span>싱글셀 분석서비스</span><a href="business/singlecell.html">
                                                        <span class="btn btn-circle btn-white btn-md">
                                                            <i class="icon icon-arrow-right-short"></i>
                                                        </span>
                                                    </a>  
                                                </div>
                                                <div class="desc">
                                                    단일 세포에서 유전자 발현량 및 유전자 변화를 분석해 <br>보다 정밀한 결과 데이터를 제공합니다
                                                </div>	
                                            </div> 
                                        </div>
                            
                                
                                    
                                        <div class="swiper-slide swiper-slide-active" style="background: url(../public/2023/04/21/11/2/7/7f51cea1-d631-4df9-81bc-438d74942446.png) no-repeat center center / cover" data-swiper-slide-index="0">
                                            <div class="text-area">
                                                <div class="title">
                                                    <span>퍼스널<br>헬스케어</span><a href="business/healthcare/personal-genetic.html">
                                                        <span class="btn btn-circle btn-white btn-md">
                                                            <i class="icon icon-arrow-right-short"></i>
                                                        </span>
                                                    </a>  
                                                </div>
                                                <div class="desc">
                                                    개개인이 타고난 유전자와 우리 몸의 미생물을 분석해 <br>웰니스에서 발병 위험도 예측까지 더 건강한 삶을 위한 <br>과학적인 분석과 체계적인 가이드를 제공합니다
                                                </div>	
                                            </div> 
                                        </div>	  
                                                
                                
                                    
                                        <div class="swiper-slide swiper-slide-next" style="background: url(../public/2023/04/21/11/3/5/328bc9f6-b3c5-426a-aac2-7bd71d1faf30.png) no-repeat center center / cover" data-swiper-slide-index="1">
                                            <div class="text-area">
                                                <div class="title">
                                                    <span>반려동물 헬스케어</span><a href="business/healthcare/pet-genetic.html">
                                                        <span class="btn btn-circle btn-white btn-md">
                                                            <i class="icon icon-arrow-right-short"></i>
                                                        </span>
                                                    </a>  
                                                </div>
                                                <div class="desc">
                                                    소중한 가족인 반려동물의 취약한 유전질환을 미리 알고<br>예방할 수 있도록 유전자검사 기반 건강 솔루션을 제시합니다
                                                </div>	
                                            </div> 
                                        </div>	  
                                                
                                
                                    
                                        <div class="swiper-slide" style="background: url(../public/2023/04/21/11/4/2/90b333eb-145d-46d6-9363-d0bce77f44a8.png) no-repeat center center / cover" data-swiper-slide-index="2">
                                            <div class="text-area">
                                                <div class="title">
                                                    <span>연구분석서비스</span><a href="business/research/ngs.html#genome">
                                                        <span class="btn btn-circle btn-white btn-md">
                                                            <i class="icon icon-arrow-right-short"></i>
                                                        </span>
                                                    </a>  
                                                </div>
                                                <div class="desc">
                                                    최첨단 기술 경쟁력과 세계적 수준의 인프라 기반 <br>신속·정확한 유전체 분석 및 전문 컨설팅 서비스를 제공합니다
                                                </div>	
                                            </div> 
                                        </div>	  
                                                
                                
                                    
                                        <div class="swiper-slide" style="background: url(../public/2023/04/21/11/4/51/6cdcde79-21d3-4028-a600-c94edaf6b846.png) no-repeat center center / cover" data-swiper-slide-index="3">
                                            <div class="text-area">
                                                <div class="title">
                                                    <span>임상분석서비스</span><a href="business/diagnosis/cancer.html#prediction">
                                                        <span class="btn btn-circle btn-white btn-md">
                                                            <i class="icon icon-arrow-right-short"></i>
                                                        </span>
                                                    </a>  
                                                </div>
                                                <div class="desc">
                                                    질병 예측, 예방, 맞춤 진료, 치료를 위해<br>유전체학·단백질체학·전사체학의 멀티오믹스 분석을 수행하고 있습니다
                                                </div>	
                                            </div> 
                                        </div>	  
                                                
                                
                                    
                                        <div class="swiper-slide swiper-slide-duplicate-prev" style="background: url(../public/2023/04/21/11/5/44/8042739b-432c-495b-9aa5-99e815fc8f08.png) no-repeat center center / cover" data-swiper-slide-index="4">
                                            <div class="text-area">
                                                <div class="title">
                                                    <span>싱글셀 분석서비스</span><a href="business/singlecell.html">
                                                        <span class="btn btn-circle btn-white btn-md">
                                                            <i class="icon icon-arrow-right-short"></i>
                                                        </span>
                                                    </a>  
                                                </div>
                                                <div class="desc">
                                                    단일 세포에서 유전자 발현량 및 유전자 변화를 분석해 <br>보다 정밀한 결과 데이터를 제공합니다
                                                </div>	
                                            </div> 
                                        </div>	  
                                                
                                    
                
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" style="background: url(../public/2023/04/21/11/2/7/7f51cea1-d631-4df9-81bc-438d74942446.png) no-repeat center center / cover" data-swiper-slide-index="0">
                                            <div class="text-area">
                                                <div class="title">
                                                    <span>퍼스널<br>헬스케어</span><a href="business/healthcare/personal-genetic.html">
                                                        <span class="btn btn-circle btn-white btn-md">
                                                            <i class="icon icon-arrow-right-short"></i>
                                                        </span>
                                                    </a>  
                                                </div>
                                                <div class="desc">
                                                    개개인이 타고난 유전자와 우리 몸의 미생물을 분석해 <br>웰니스에서 발병 위험도 예측까지 더 건강한 삶을 위한 <br>과학적인 분석과 체계적인 가이드를 제공합니다
                                                </div>	
                                            </div> 
                                        </div><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" style="background: url(../public/2023/04/21/11/3/5/328bc9f6-b3c5-426a-aac2-7bd71d1faf30.png) no-repeat center center / cover" data-swiper-slide-index="1">
                                            <div class="text-area">
                                                <div class="title">
                                                    <span>반려동물 헬스케어</span><a href="business/healthcare/pet-genetic.html">
                                                        <span class="btn btn-circle btn-white btn-md">
                                                            <i class="icon icon-arrow-right-short"></i>
                                                        </span>
                                                    </a>  
                                                </div>
                                                <div class="desc">
                                                    소중한 가족인 반려동물의 취약한 유전질환을 미리 알고<br>예방할 수 있도록 유전자검사 기반 건강 솔루션을 제시합니다
                                                </div>	
                                            </div> 
                                        </div><div class="swiper-slide swiper-slide-duplicate" style="background: url(../public/2023/04/21/11/4/2/90b333eb-145d-46d6-9363-d0bce77f44a8.png) no-repeat center center / cover" data-swiper-slide-index="2">
                                            <div class="text-area">
                                                <div class="title">
                                                    <span>연구분석서비스</span><a href="business/research/ngs.html#genome">
                                                        <span class="btn btn-circle btn-white btn-md">
                                                            <i class="icon icon-arrow-right-short"></i>
                                                        </span>
                                                    </a>  
                                                </div>
                                                <div class="desc">
                                                    최첨단 기술 경쟁력과 세계적 수준의 인프라 기반 <br>신속·정확한 유전체 분석 및 전문 컨설팅 서비스를 제공합니다
                                                </div>	
                                            </div> 
                                        </div><div class="swiper-slide swiper-slide-duplicate" style="background: url(../public/2023/04/21/11/4/51/6cdcde79-21d3-4028-a600-c94edaf6b846.png) no-repeat center center / cover" data-swiper-slide-index="3">
                                            <div class="text-area">
                                                <div class="title">
                                                    <span>임상분석서비스</span><a href="business/diagnosis/cancer.html#prediction">
                                                        <span class="btn btn-circle btn-white btn-md">
                                                            <i class="icon icon-arrow-right-short"></i>
                                                        </span>
                                                    </a>  
                                                </div>
                                                <div class="desc">
                                                    질병 예측, 예방, 맞춤 진료, 치료를 위해<br>유전체학·단백질체학·전사체학의 멀티오믹스 분석을 수행하고 있습니다
                                                </div>	
                                            </div> 
                                        </div><div class="swiper-slide swiper-slide-duplicate" style="background: url(../public/2023/04/21/11/5/44/8042739b-432c-495b-9aa5-99e815fc8f08.png) no-repeat center center / cover" data-swiper-slide-index="4">
                                            <div class="text-area">
                                                <div class="title">
                                                    <span>싱글셀 분석서비스</span><a href="business/singlecell.html">
                                                        <span class="btn btn-circle btn-white btn-md">
                                                            <i class="icon icon-arrow-right-short"></i>
                                                        </span>
                                                    </a>  
                                                </div>
                                                <div class="desc">
                                                    단일 세포에서 유전자 발현량 및 유전자 변화를 분석해 <br>보다 정밀한 결과 데이터를 제공합니다
                                                </div>	
                                            </div> 
                                        </div></div>		
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>				
                    </div>
                    <script>
                        $(document).ready(function (){
                            /*slide 영역*/
                                new Swiper ("._businessSlider", {
                                slidesPerView: "auto",
                                centeredSlides: true,
                                loop: true,
                            });
                        })
                    </script>				
                
                </div>
                
            </div>

            </div>
        </div>
		<!-- <section class="product_3-step bg_line">
			<div class="box_width" style="text-align: center;">
                <img src="/assets/images/cp_image.png" alt="" style="width: 50px; margin-bottom: 10px;">
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
							<img src="/assets/images/step1.png">
						</div>
						<p class="text">
							애니바비옴헬스케어 마이크로바이옴<br>건강검사(분변,구강)를<br>실시합니다.
						</p>
					</li>
					<li data-aos="flip-left" data-aos-delay="300" data-aos-duration="2000">
						<span class="step">step 02</span>
						<div class="img">
							<img src="/assets/images/step2.png">
						</div>
						<p class="text">
							장내 미생물 건강 테스트 결과를 기다리는<br>동안(일반적으로 15~30),<br>애니바이옴헬스케어 구호 제품으로<br>증상을 완화할 수 있습니다.
						</p>
					</li>
					<li data-aos="flip-left" data-aos-delay="600" data-aos-duration="2000">
						<span class="step">step 03</span>
						<div class="img">
							<img src="/assets/images/step3.png">
						</div>
						<p class="text">
							환자의 장&구강 마이크로바이옴 건강<br>테스트 보고서 결과를 사용하여<br>반려동물을 위한 맞춤형 계획을 세웁니다.
						</p>
					</li>
				</ul>
			</div>
		</section> -->
        <section class="ourteam" style="display: none;">
			<div class="team_list_area bg_line">
				<div class="visual main">
                    <div class="shg-box-overlay"></div>
                    <div class="shg-row box_width" data-col-grid-mode-on="true">
      <div class="shg-c-lg-4 shg-c-md-4 shg-c-sm-4 shg-c-xs-12">
<div class="shg-box-vertical-align-wrapper" style="box-sizing: border-box; min-height: 175px;">
    <div class="shg-box shg-c    " id="s-8badf030-fdaa-41f6-b9dd-e24d5198b940">
      <div class="shg-box-overlay"></div>
<div class="shg-box-content">
        <div id="s-6d134293-f799-4512-8c7d-56954724cee8" class="shg-c  ">
  <div class="shg-rich-text shg-theme-text-content"><p style="line-height: 30px; text-align: center;"><span style="font-size: 20px; color: rgb(255, 255, 255); font-weight: normal;" data-fontweight="Normal">More than<br></span></p></div>

</div>
<div id="s-e5e8ee84-a0ba-4327-bc37-5b16bb6f0a76" class="shg-c  ">
  <div class="shg-rich-text shg-theme-text-content"><p style="line-height: 30px; text-align: center;"><span style="font-size: 52px;"><strong><span style="color: rgb(255, 255, 255);" data-fontweight="Normal">45,000<br></span></strong></span></p></div>

</div>
<div id="s-09fae622-b57c-4c87-8374-84b1107d883c" class="shg-c  ">
  <div class="shg-rich-text shg-theme-text-content"><p style="line-height: 30px; text-align: center;"><span style="font-size: 20px; color: rgb(255, 255, 255); font-weight: normal;" data-fontweight="Normal">microbiome samples tested<br></span></p></div>

</div>

      </div>
    </div>
  </div>
</div>
      <div class="shg-c-lg-4 shg-c-md-4 shg-c-sm-4 shg-c-xs-12">
<div class="shg-box-vertical-align-wrapper" style="box-sizing: border-box; min-height: 175px;">
    <div class="shg-box shg-c    " id="s-4081c20b-f54e-4bf4-9d80-c219dc6c1cb4">
      <div class="shg-box-overlay"></div>
<div class="shg-box-content">
        <div id="s-07cb0071-5add-4102-906e-0afbc4e1a21f" class="shg-c  ">
  <div class="shg-rich-text shg-theme-text-content"><p style="line-height: 30px; text-align: center;"><span style="font-size: 20px; color: rgb(255, 255, 255); font-weight: normal;" data-fontweight="Normal">More than<br></span></p></div>

</div>
<div id="s-f2f85545-9645-4629-94ae-54bae08aa49c" class="shg-c  ">
  <div class="shg-rich-text shg-theme-text-content"><p style="line-height: 30px; text-align: center;"><span style="font-size: 52px;"><strong><span style="color: rgb(255, 255, 255);" data-fontweight="Normal">80%<br></span></strong></span></p></div>

</div>
<div id="s-189ca322-1e1e-4d2b-acd0-a547a17fb9a6" class="shg-c  ">
  <div class="shg-rich-text shg-theme-text-content"><p style="line-height: 30px; text-align: center;"><span style="font-size: 20px; color: rgb(255, 255, 255); font-weight: normal;" data-fontweight="Normal">report clinical improvement <br></span></p></div>

</div>

      </div>
    </div>
  </div>
</div>
      
        <div class="shg-c-lg-4 shg-c-md-4 shg-c-sm-4 shg-c-xs-12">
<div class="shg-box-vertical-align-wrapper" style="box-sizing: border-box; min-height: 175px;">
    <div class="shg-box shg-c    " id="s-ec6e83bf-9cbd-4c31-af20-678b37b992a3">
      <div class="shg-box-overlay"></div>
<div class="shg-box-content">
        <div id="s-7b9b4f7d-3c58-408c-a524-e285e75b2dbc" class="shg-c  ">
  <div class="shg-rich-text shg-theme-text-content"><p style="line-height: 30px; text-align: center;"><span style="font-size: 20px; color: rgb(255, 255, 255); font-weight: normal;" data-fontweight="Normal">Recommended by<br></span></p></div>

</div>
<div id="s-4c15b6ca-2eab-4793-809a-8830f33ec5d9" class="shg-c  ">
  <div class="shg-rich-text shg-theme-text-content"><p style="line-height: 30px; text-align: center;"><span style="font-size: 52px;"><strong><span style="color: rgb(255, 255, 255);" data-fontweight="Normal">1,000+<br></span></strong></span></p></div>

</div>
<div id="s-d7491c25-e322-4b5d-9c9c-c437c878cb0f" class="shg-c  ">
  <div class="shg-rich-text shg-theme-text-content"><p style="line-height: 30px; text-align: center;"><span style="font-size: 20px; color: rgb(255, 255, 255); font-weight: normal;" data-fontweight="Normal">veterinarians worldwide<br></span></p></div>

</div>

      </div>
    </div>
  </div>
</div>
      
    
      
    </div>

    <div class="shg-c shg-btn-wrapper  shg-align-center">
  <a class="shg-btn shg-cse" href="/bbs/content.php?co_id=sub51" style="opacity: 1;">
      VIEW MORE
  </a>
</div>

				</div>


                
			</div>
		</section>
	</div>
	
<!--E 마크업 끝-->

<?php
include_once(G5_THEME_PATH.'/tail.php');