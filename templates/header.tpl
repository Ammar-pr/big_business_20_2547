{php}
if(isset($_SESSION['uname'])){

}else {
session_start();

}
{/php}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Big Business 2.0
Description: A two-column, fixed-width design with a bright color scheme.
Version    : 1.0
Released   : 20120624
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>مدرسة جدة المتطورة لتعليم القيادة</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />




<link rel="stylesheet" type="text/css" href="../style.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="../jquery.dropotron-1.0.js"></script>
<script type="text/javascript" src="../jquery.slidertron-1.1.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">
        <link rel="stylesheet" href="../css/rigstier.css">


<script type="text/javascript">
	$(function() {
		$('#menu > ul').dropotron({
			mode: 'fade',
			globalOffsetY: 11,
			offsetY: -15
		});
		$('#slider').slidertron({
			viewerSelector: '.viewer',
			indicatorSelector: '.indicator span',
			reelSelector: '.reel',
			slidesSelector: '.slide',
			speed: 'slow',
			advanceDelay: 4000
		});
	});
</script>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">مدرسة جدة المتطورة لتعليم القيادة</a></h1>
		</div>
		<div id="slogan">
		<!--	<h2>Design by TEMPLATED</h2> -->
		</div>
	</div>
	<div id="menu">
	<ul>
		<li class="last"><a href="homepage.html">الصفحة الرئيسية</a></li>
			<li class="first">
			{if isset($smarty.session.validity)}
		
				{if $smarty.session.validity eq 'Trainer'}
				<span class="opener">المدربات<b></b></span>
				
				<ul>
					<li><a href="../htdocs/mafateh.php">المبنى الرئيسي</a></li>
					<li><a href="../mafateh2.html">المبنى الشمالي</a></li>
					
			</ul>
			{/if}
			{/if}
			</li>
			{if isset($smarty.session.validity)}
								{if $smarty.session.validity eq 'Vehicles'}

			<li><a href="dispplyReports.php">المركبات</a></li>
			{/if}
			
			{/if}
		
		
			{if isset($smarty.session.validity)}
			{if $smarty.session.validity eq 'Vehicles'}
			
			<li><a href="#">الماليه</a>
			
				<ul>
					<li><a href="../htdocs/‏‏dispplyReportsConfirm.php">عرض التقرير بعد الموافقة</a></li>
			</ul>
			{/if}
				{/if}
			</li>
			<li class="last"><a href="#">تواصل</a></li>
		</ul>
		<br class="clearfix" />
	</div>
	<div id="slider">
		<div class="viewer">
			<div class="reel">
				<div class="slide">
					<img src="../images/slide01.jpg" alt="" />
				</div>
				<div class="slide">
					<img src="../images/slide02.jpg" alt="" />
				</div>
				<div class="slide">
					<img src="../images/slide03.jpg" alt="" />
				</div>
				<div class="slide">
					<img src="../images/slide04.jpg" alt="" />
				</div>
				<div class="slide">
					<img src="../images/slide05.jpg" alt="" />
				</div>
			</div>
		</div>
		<div class="indicator">
			<span>1</span>
			<span>2</span>
			<span>3</span>
			<span>4</span>
			<span>5</span>
		</div>
	</div>
