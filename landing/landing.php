<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<title></title>
<link rel="stylesheet" type="text/css" href="css/landing.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
<div class="wrap">
<header>
<nav class="gnb">
<ul>
<li class="gnb01"><a href="#">home</a></li>
<li class="gnb02"><a href="#profile">profile</a></li>
<li class="gnb03"><a href="#portfolio">portfolio</a></li>
<li class="gnb04"><a href="#contact">contact</a></li>
</ul>
</nav>
</header>

<script type="text/javascript">
$(function(){

$(document).ready(function() {

var scrollOffset = $('header').offset();

$(window).scroll(function(){

if ($(document).scrollTop() > scrollOffset.top){
$('header').addClass('scroll_fixed');
}
else {
$('header').removeClass('scroll_fixed');
}
});
});
});
</script>
<section class="main">
<div class="main_bg"></div>
<h1>PORTFOLIO</h1>
<p class="name">KANG SEO HYUN</p>
<p class="scroll"></p>
</section>
<section class="profile">
<h2 id="profile" class="h2_01">01profile</h2>
<div class="profile_left">
<div class="about_me">
<h4>about me</h4>
<ul>
<li class="name">이름 강서현</li>
<li class="age">나이 28세</li>
<li class="adress">사는 곳 서울 중구 약수동</li>
</ul>
</div>
<div class="career">
<h4>career</h4>
<ul>
<li class="career01">2011년부터 2013년까지 동원대학 시각디자인 전공</li>
<li class="career02">2012년 7월부터 2015년 9월까지 쇼핑몰 플라이데이와 사뿐 웹디자인팀에 재직</li>
<li class="career03"><a href="">2017년 10월부터 2018년 2월까지 봄 아카테미에서 웹 퍼블리셔 양성 과정 수료</a></li>
<li class="career04"><a href="">2019년 10월부터 2020년 3월까지 그린아카데미에서 프론트앤드 개발 취업 과정 수료</a></li>
</ul>
</div>
</div>
<div class="profile_right">
<div class="skill">
<h4>skill</h4>
<ul>
<li class="skill_01">html5</li>
<li class="skill_02">css3</li>
<li class="skill_03">java script</li>
<li class="skill_04">mysql</li>
<li class="skill_05">php</li>
<li class="skill_06">photoshop</li>
<li class="skill_07">illustration</li>
<li class="skill_08">power point</li>
</ul>
</div>
<div class="license">
<h4>license</h4>
<p>운전면허 1종 보통, 바리스타 2급 자격증</p>
</div>
</div>
</section>
<section class="portfolio">
<h2 id="portfolio" class="h2_02">02portfolio</h2>
<div class="excelbeef">
<h3>엑셀비프</h3>
<p>수입 소고기 브랜드 엑셀비프 쇼핑몰 리뉴얼</p>
<span>기능구현: 로그인 / 회원가입 / 게시판 / 관리자모드 로그인 / 상품 확대보기 / 상품 상세페이지</span>
<nav class="page_nav">
<ul>
<li class="pg_nav01"><a href="http://www.excelbeef.com" target="window">main</a>
<ul>
<li><a href="http://www.excelbeef.com" target="window">before</a></li>
<li><a href="http://jenkang.dothome.co.kr/index.php" target="window">after</a></li>
</ul>
</li>
<li class="pg_nav02"><a href="http://www.excelbeef.com/member/join.html" target="window">join</a>
<ul>
<li><a href="http://www.excelbeef.com/member/join.html" target="window">before</a></li>
<li><a href="http://jenkang.dothome.co.kr/member/join.php" target="window">after</a></li>
</ul>
</li>
<li class="pg_nav03"><a href="http://www.excelbeef.com/member/login.html" target="window">login</a>
<ul>
<li><a href="http://www.excelbeef.com/member/login.html" target="window">before</a></li>
<li><a href="http://jenkang.dothome.co.kr/login/login.php" target="window">after</a></li>
</ul>
</li>
<li  class="pg_nav04"><a href="http://www.excelbeef.com/board/free/list.html?board_no=2" target="window">event&#38;news</a>
<ul>
<li><a href="http://www.excelbeef.com/board/free/list.html?board_no=2" target="window">before</a></li>
<li><a href="http://jenkang.dothome.co.kr/gnb/news_event.php" target="window">after</a></li>
</ul>
</li>
<li  class="pg_nav05"><a href="http://www.excelbeef.com/board/free/list.html?board_no=1" target="window">notice</a>
<ul>
<li><a href="http://www.excelbeef.com/board/free/list.html?board_no=1" target="window">before</a></li>
<li><a href="http://jenkang.dothome.co.kr/gnb/notice.php" target="window">after</a></li>
</ul>
</li>
<li  class="pg_nav06"><a href="http://jenkang.dothome.co.kr/admin/admin.php" target="window">manager mode</a>
<ul>
<li class="id_pw">id: admin2020/ pw: 12341234</li>
</ul>	
</li>
</ul>
</nav>
<iframe name="window" src="http://www.excelbeef.com" frameborder="0" scrolling="yes"></iframe>
<div class="excel_link"><a href="http://jenkang.dothome.co.kr/index.php" target="_blank">http://jenkang.dothome.co.kr/index.php</a></div>
</div>
<div class="cargill">
<h3>카길</h3>
<p>글로벌 기업 카길 홈페이지 반응형 구현</p>
<span>기능구현: 반응형</span>
<a class="cargill_link" onclick="openWin()">
<p class="cargill_border"><span>click</span></p>
</a>
<script type="text/javascript">
function openWin(){
window.open('http://jenkang.dothome.co.kr/cargill/cargill.php','카길','width=1440, height=980, resizable=yes');
return false;
}
</script>
</div>
</section>
<section class="contact">
<h2 id="contact" class="h2_03">03contact</h2>
<ul>
<li class="phone">
<a href="tel:010-2926-6090" target="self">phone</a>
<p>010-2926-6090</p>
</li>
<li class="open_talk">
<a href="https://open.kakao.com/o/sbGRXq9b" target="_blank">open talk</a>
<p>kakaotalk ID: jenKang7</p>
</li>
<li class="email">
<a href="mailto:jenkang603@gemail.com">email</a>
<p>jenkang603@gmail.com</p>
</li>
</ul>
</section>
</div>
</body>
</html>