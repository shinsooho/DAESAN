<!doctype html>
<html lang="ko">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="editplus" />
  <meta name="author" content="" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <link rel="stylesheet" href="css/css.css">
  <link rel="stylesheet" href="css/member-css.css">
  <link rel="stylesheet" href="css/member-css-2.css">
  <link rel="stylesheet" href="css/gallery-layerpopup.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>대산</title>
  <script src="https://www.gstatic.com/firebasejs/3.7.4/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyAEA-yZURkwiLAdhnhYuLYdJwrqycGE6y4",
    authDomain: "daesan-a4972.firebaseapp.com",
    databaseURL: "https://daesan-a4972.firebaseio.com",
    projectId: "daesan-a4972",
    storageBucket: "daesan-a4972.appspot.com",
    messagingSenderId: "88695100826"
  };
  firebase.initializeApp(config);
</script>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  </head>
 <body id="page-top">
<header>
    <div class="container navi">
        <div class="logo">
            <img src="img/logo.png">
        </div>
        <ul class="menu">
            <a href="#"><li class="nav-btn active" data-row-id="about" >ABOUT</li></a>
            <a href="#"><li class="nav-btn" data-row-id="member" >MEMBER</li></a>
            <a href="#"><li class="nav-btn" data-row-id="gallery" >GALLERY</li></a>
            <a href="#"><li class="nav-btn" data-row-id="contact" >CONTACT</li></a>
            <a href="#"><li class="showMask">LOGIN</li></a>
        </ul>
    </div>
<!--  로그인 레이어팝업창  -->
    <div class="mask"></div>
    <div class="window">
        <div class="login-title">MEMBER LOGIN</div>
        <div class="login-group">
            <label for="ex_input">아이디</label>
            <input class="id-input" id="ex_input" type="text" >
        </div>
        <div class="login-group">
            <label for="ex_input2">패스워드</label>
            <input class="pw-input" id="ex_input2" type="password" >
    
        </div>
        
            <a href="#"><div class="login-bt">Log In</div></a>
     
     
<!--  레이어팝업닫는버튼
<input type="button" href="#" class="login-close" value="(닫기)"/>-->
    </div>
    <script>
         $(document).ready(function() { var placeholderTarget = $('.login-group input[type="text"], .login-group input[type="password"]'); //라벨포커스시 
         placeholderTarget.on('focus', function(){ $(this).siblings('label').fadeOut('fast'); }); 
         //라벨포커스아웃시
         placeholderTarget.on('focusout', function(){ if($(this).val() == ''){ $(this).siblings('label').fadeIn('fast'); } }); });

     </script>
    
    <script type="text/javascript">
    function wrapWindowByMask(){
 
        // fade 애니메이션 : 1초 동안 검게 됐다가 80%의 불투명으로 변합니다.
        $('.mask').fadeIn(1000);
        $('.mask').fadeTo("slow",0.8);
 
        // 레이어 팝업을 가운데로 띄우기 위해 화면의 높이와 너비의 가운데 값과 스크롤 값을 더하여 변수로 만듭니다.
        var top = ( $(window).scrollTop() + ( $(window).height() - $('.window').height()) / 2 );
 
        // css 스타일을 변경합니다.
        $('.window').css({'top':top, 'position':'absolute'});
 
        // 레이어 팝업을 띄웁니다.
        $('.window').show();
    }
 
    $(document).ready(function(){
        // showMask를 클릭시 작동하며 검은 마스크 배경과 레이어 팝업을 띄웁니다.
        $('.showMask').click(function(e){
            // preventDefault는 href의 링크 기본 행동을 막는 기능입니다.
            e.preventDefault();
            wrapWindowByMask();
        });
 
        // 닫기(close)를 눌렀을 때 작동합니다.
        $('.window .login-close').click(function (e) {
            e.preventDefault();
            $('.mask, .window').hide();
        });
 
        // 뒤 검은 마스크를 클릭시에도 모두 제거하도록 처리합니다.
        $('.mask').click(function () {
            $(this).hide();
            $('.window').hide();
        });
    });
</script>
<!--  로그인 레이어팝업창  -->
    <div class="header-img-1">
        <img src="img/flock-together.png">
    </div>
    <div class="header-img-2">
        <img src="img/like-you.png">
    </div>
</header>
<section id="about" class="row row-nav">
    <div class="about-content">
        <div class="about-left">
        <div class="about-title">
            IN THE SAME PLACE
        </div>
        <hr>
        <div class="about-infor">
            <b>다른 곳</b>에서 태어났지만 <b>같은 동네</b>에서 자랐다<br>
            <b>성적</b>은 달랐지만 <b>같은 학교</b>를 나왔다<br>
            <b>하는 게임</b>은 달랐지만 <b>같은 피시방</b>을 다녔다<br>
            <b>병명</b>을 다르지만 <b>같은 병원</b>을 다닌다<br>
            <b>목적지</b>는 다르지만 <b>온수역</b>에서 출발한다<br>
            <b>학벌</b>은 다르지만 <b>열정</b>은 같다<br>
            <b>주량</b>은 다르지만 <b>같이 술</b>을 마신다<br>
            <b>식성</b>은 다르지만 <b>같이 치킨</b>을 뜯는다<br>
            <b>스케쥴</b>은 다르지만 <b>생일</b>을 같이한다<br>
            <br>
                <b>서로 다르지만 같다</b>
        </div>
        </div>
    
    <div class="about-img">
                <img src="img/about-img.png">
    </div>
    </div>
</section>
<section id="member" class="row row-nav">
    <div class="member-content">
        
        <div class="member-title">
            MEMBER
        </div>
        <hr>
        <div class="about-infor">
            친구들을 간단히 소개합니다
        </div>
    </div>
    <div id="container" class="cf">

	<div id="main" role="main">
      <section class="slider">
        <div id="slider" class="flexslider">
          <ul class="slides">
            <li>
  	    	    <img src="img/KB.png" />
                <div class="friend-content">
                    <div class="friend-ment">
                        적셔
                    </div>
                    <div class="friend-name">
                        대장 강기백
                    </div>
                </div>
  	    		</li>
  	    		<li>
  	    	    <img src="img/KY.png" />
                <div class="friend-content">
                    <div class="friend-ment">
                        행복하지마요~ 내가아니면~
                    </div>
                    <div class="friend-name">
                        가왕 이권용
                    </div>
                </div>
  	    		</li>
  	    		<li>
  	    	    <img src="img/HJ.png" />
                <div class="friend-content">
                    <div class="friend-ment">
                        현기증 날 거 같아요
                    </div>
                    <div class="friend-name">
                        햄최 오형준
                    </div>
                </div>
  	    		</li>
  	    		<li>
  	    	    <img src="img/JH.png" />
                <div class="friend-content">
                    <div class="friend-ment">
                        2002년도의 감동을 잊을수가 없어요
                    </div>
                    <div class="friend-name">
                        레딩 이제호
                    </div>
                </div>
  	    		</li>
                <li>
  	    	    <img src="img/HE.png" />
                <div class="friend-content">
                    <div class="friend-ment">
                        오이 한 접시 더 주세요~
                    </div>
                    <div class="friend-name">
                        분조 박하은
                    </div>
                </div>
  	    		</li>
  	    		<li>
  	    	    <img src="img/HB.png" />
                <div class="friend-content">
                    <div class="friend-ment">
                        나의 와꾸에 더해지는 슈프림
                    </div>
                    <div class="friend-name">
                        매국 한효병
                    </div>
                </div>
  	    		</li>
  	    		<li>
  	    	    <img src="img/DY.png" />
                <div class="friend-content">
                    <div class="friend-ment">
                        웃어?? 그래.. 많이웃고
                    </div>
                    <div class="friend-name">
                        멘탈 허대영
                    </div>
                </div>
  	    		</li>
  	    		<li>
  	    	    <img src="img/DH.png" />
                <div class="friend-content">
                    <div class="friend-ment">
                        금메달 따는게 제일 쉬워요
                    </div>
                    <div class="friend-name">
                        허벅 전대훈
                    </div>
                </div>
  	    		</li>
                <li>
  	    	    <img src="img/SH.png" />
                <div class="friend-content">
                    <div class="friend-ment">
                        저는 지극히 정상인입니다
                    </div>
                    <div class="friend-name">
                        관종 신수호
                    </div>
                </div>
  	    		</li>
                <li>
  	    	    <img src="img/HS.png" />
                <div class="friend-content">
                    <div class="friend-ment">
                        서연고 = 서울시립 연세 고려
                    </div>
                    <div class="friend-name">
                        회장 황희상
                    </div>
                </div>
  	    		</li>
                <li>
  	    	    <img src="img/GH.png" />
                <div class="friend-content">
                    <div class="friend-ment">
                        어이? 어이가없네
                    </div>
                    <div class="friend-name">
                        동석 강경훈
                    </div>
                </div>
  	    		</li>
           
          </ul>
        </div>
        <div id="carousel" class="flexslider">
          <ul class="slides">
                <li>
  	    	    <img src="img/KB.png" />
  	    		</li>
  	    		<li>
  	    	    <img src="img/KY.png" />
  	    		</li>
  	    		<li>
  	    	    <img src="img/HJ.png" />
  	    		</li>
  	    		<li>
  	    	    <img src="img/JH.png" />
  	    		</li>
                <li>
  	    	    <img src="img/HE.png" />
  	    		</li>
  	    		<li>
  	    	    <img src="img/HB.png" />
  	    		</li>
  	    		<li>
  	    	    <img src="img/DY.png" />
  	    		</li>
  	    		<li>
  	    	    <img src="img/DH.png" />
  	    		</li>
                <li>
  	    	    <img src="img/SH.png" />
  	    		</li>
                <li>
  	    	    <img src="img/HS.png" />
  	    		</li>
                <li>
  	    	    <img src="img/GH.png" />
  	    		</li>
          </ul>
        </div>
      </section>
    </div>

  </div>

  <!-- 친구프로필 jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 110,
        itemMargin: 5,
        asNavFor: '#slider'
      });

      $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
</section>
<section id="welcome">
    <img src="img/wearefamily.gif">
</section>
<section id="gallery" class="row row-nav">
    <div class="gallery-content container">
        
        <div class="gallery-title">
            GALLERY
        </div>
        
        <hr>
        <div class="upload">사진 업로드</div>
        <div>
        <div class="md-modal md-effect-1" id="modal-1">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/1.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
            
		</div>
        <div class="md-modal md-effect-1" id="modal-2">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/2.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-3">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/3.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-4">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/4.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-5">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/5.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-6">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/6.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-7">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/7.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-8">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/8.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-9">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/9.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-10">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/10.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
        <div class="md-modal md-effect-1" id="modal-11">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/11.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
        <div class="md-modal md-effect-1" id="modal-12">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/12.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-14">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/14.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-15">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/15.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-16">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/16.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-17">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/17.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-18">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/18.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-19">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/19.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-20">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/20.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
        <div class="md-modal md-effect-1" id="modal-21">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/21.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
        <div class="md-modal md-effect-1" id="modal-22">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/22.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-23">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/23.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-24">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/24.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-25">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/25.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-26">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/26.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-27">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/27.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-28">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/28.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-29">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/29.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-30">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/30.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
        <div class="md-modal md-effect-1" id="modal-31">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/31.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
        <div class="md-modal md-effect-1" id="modal-32">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/32.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-33">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/33.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-34">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/34.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-35">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/35.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-36">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/36.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-37">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/37.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-38">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/38.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-39">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/39.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-40">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/40.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
        <div class="md-modal md-effect-1" id="modal-41">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/41.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
        <div class="md-modal md-effect-1" id="modal-42">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/42.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-43">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/43.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-44">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/44.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-45">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/45.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-46">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/46.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-47">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/47.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-48">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/48.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-49">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/49.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-50">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/50.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
        <div class="md-modal md-effect-1" id="modal-51">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/51.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
        <div class="md-modal md-effect-1" id="modal-52">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/52.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-53">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/53.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-54">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/54.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-55">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/55.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-56">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/56.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-57">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/57.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-58">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/58.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-59">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/59.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-60">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/60.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
        <div class="md-modal md-effect-1" id="modal-61">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/61.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
        <div class="md-modal md-effect-1" id="modal-62">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/62.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-63">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/63.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-64">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/64.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
            <div class="md-modal md-effect-1" id="modal-65">
			<div class="md-content">
				<div>
				<img src="img/gallery-img/65.JPG">
					<button class="md-close">Close</button>
				</div>
			</div>
		</div>
        <div class="md-overlay"></div>
        </div>
        
        
        
		<div class="md-overlay"></div>
        <div class="gallery-group">
            <div class="gallery-img md-trigger" data-modal="modal-1"
                 style="background-image: url('img/gallery-img/1.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-2"
                 style="background-image: url('img/gallery-img/2.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-3"
                 style="background-image: url('img/gallery-img/3.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-4"
                 style="background-image: url('img/gallery-img/4.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-5"
                 style="background-image: url('img/gallery-img/5.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-6"
                 style="background-image: url('img/gallery-img/6.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-7"
                 style="background-image: url('img/gallery-img/7.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-8"
                 style="background-image: url('img/gallery-img/8.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-9"
                 style="background-image: url('img/gallery-img/9.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-10"
                 style="background-image: url('img/gallery-img/10.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-11"
                 style="background-image: url('img/gallery-img/11.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-12"
                 style="background-image: url('img/gallery-img/12.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-14"
                 style="background-image: url('img/gallery-img/14.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-15"
                 style="background-image: url('img/gallery-img/15.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-16"
                 style="background-image: url('img/gallery-img/16.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-17"
                 style="background-image: url('img/gallery-img/17.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-18"
                 style="background-image: url('img/gallery-img/18.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-19"
                 style="background-image: url('img/gallery-img/19.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-20"
                 style="background-image: url('img/gallery-img/20.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-21"
                 style="background-image: url('img/gallery-img/21.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-22"
                 style="background-image: url('img/gallery-img/22.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-23"
                 style="background-image: url('img/gallery-img/23.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-24"
                 style="background-image: url('img/gallery-img/24.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-25"
                 style="background-image: url('img/gallery-img/25.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-26"
                 style="background-image: url('img/gallery-img/26.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-27"
                 style="background-image: url('img/gallery-img/27.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-28"
                 style="background-image: url('img/gallery-img/28.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-29"
                 style="background-image: url('img/gallery-img/29.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-30"
                 style="background-image: url('img/gallery-img/30.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-31"
                 style="background-image: url('img/gallery-img/31.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-32"
                 style="background-image: url('img/gallery-img/32.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-33"
                 style="background-image: url('img/gallery-img/33.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-34"
                 style="background-image: url('img/gallery-img/34.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-35"
                 style="background-image: url('img/gallery-img/35.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-36"
                 style="background-image: url('img/gallery-img/36.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-37"
                 style="background-image: url('img/gallery-img/37.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-38"
                 style="background-image: url('img/gallery-img/38.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-39"
                 style="background-image: url('img/gallery-img/39.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-40"
                 style="background-image: url('img/gallery-img/40.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-41"
                 style="background-image: url('img/gallery-img/41.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-42"
                 style="background-image: url('img/gallery-img/42.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-43"
                 style="background-image: url('img/gallery-img/43.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-44"
                 style="background-image: url('img/gallery-img/44.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-45"
                 style="background-image: url('img/gallery-img/45.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-46"
                 style="background-image: url('img/gallery-img/46.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-47"
                 style="background-image: url('img/gallery-img/47.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-48"
                 style="background-image: url('img/gallery-img/48.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-49"
                 style="background-image: url('img/gallery-img/49.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-50"
                 style="background-image: url('img/gallery-img/50.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-51"
                 style="background-image: url('img/gallery-img/51.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-52"
                 style="background-image: url('img/gallery-img/52.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-53"
                 style="background-image: url('img/gallery-img/53.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-54"
                 style="background-image: url('img/gallery-img/54.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-55"
                 style="background-image: url('img/gallery-img/55.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-56"
                 style="background-image: url('img/gallery-img/56.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-57"
                 style="background-image: url('img/gallery-img/57.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-58"
                 style="background-image: url('img/gallery-img/58.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-59"
                 style="background-image: url('img/gallery-img/59.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-60"
                 style="background-image: url('img/gallery-img/60.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-61"
                 style="background-image: url('img/gallery-img/61.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-62"
                 style="background-image: url('img/gallery-img/62.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-63"
                 style="background-image: url('img/gallery-img/63.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-64"
                 style="background-image: url('img/gallery-img/64.JPG')"></div>
            <div class="gallery-img md-trigger" data-modal="modal-65"
                 style="background-image: url('img/gallery-img/65.JPG')"></div>
            
            
        </div>
    </div>
    
    
    <script src="https://tympanus.net/Development/ModalWindowEffects/js/classie.js"></script>
		<script src="https://tympanus.net/Development/ModalWindowEffects/js/modalEffects.js"></script>
</section>
     
<section id="contact" class="row row-nav">
    <div class="contact-content">
        <h1>CONTACT FROM</h1>
        <div class="content-box">
            <input type="text" class="content" placeholder="NAME">
            <input type="email" class="content" placeholder="E-MAIL">
            <input type="text" class="content" placeholder="PHONE NUMBER">
            <textarea class="content" placeholder="COMMENT"></textarea>
        </div>
        <div class="send-bt">
            SEND
        </div>
    </div>
</section>

<!--스크롤 제이쿼리-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
/**************
	 IN-NAVIGATION 네비게이션 클릭에 따라 이동하는 
	**************/
	$(".nav-btn").click(function(){		
		$(this).addClass("active");
		$(this).siblings().removeClass("active");
			
		
		var name = $(this).attr("data-row-id");
		var id = "#" + name;
		var top = $(id).first().offset().top +60;			
		$('html, body').animate({scrollTop: top+'px'}, 300);
		
	});
</script>	
	
	
<footer>
    ⊙ Copyright(c)2017 신수호 All rights reserved. 
</footer>



</body>
</html>
