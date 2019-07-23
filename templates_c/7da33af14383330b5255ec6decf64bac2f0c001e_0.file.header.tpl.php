<?php
/* Smarty version 3.1.33, created on 2019-07-21 20:42:31
  from 'C:\xampp\htdocs\big_business_20_2547\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d34b2170df3f3_47324390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7da33af14383330b5255ec6decf64bac2f0c001e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\big_business_20_2547\\templates\\header.tpl',
      1 => 1563734549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d34b2170df3f3_47324390 (Smarty_Internal_Template $_smarty_tpl) {
if(isset($_SESSION['uname'])){

}else {
session_start();

}
?>
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
<?php echo '<script'; ?>
 type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../jquery.dropotron-1.0.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../jquery.slidertron-1.1.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">
        <link rel="stylesheet" href="../css/rigstier.css">


<?php echo '<script'; ?>
 type="text/javascript">
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
<?php echo '</script'; ?>
>
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
			<?php if (isset($_SESSION['validity'])) {?>
		
				<?php if ($_SESSION['validity'] == 'Trainer') {?>
				<span class="opener">المدربات<b></b></span>
				
				<ul>
					<li><a href="../htdocs/mafateh.php">المبنى الرئيسي</a></li>
					<li><a href="../mafateh2.html">المبنى الشمالي</a></li>
					
			</ul>
			<?php }?>
			<?php }?>
			</li>
			<?php if (isset($_SESSION['validity'])) {?>
								<?php if ($_SESSION['validity'] == 'Vehicles') {?>

			<li><a href="dispplyReports.php">المركبات</a></li>
			<?php }?>
			
			<?php }?>
		
		
			<?php if (isset($_SESSION['validity'])) {?>
			<?php if ($_SESSION['validity'] == 'Vehicles') {?>
			
			<li><a href="#">الماليه</a>
			
				<ul>
					<li><a href="../htdocs/‏‏dispplyReportsConfirm.php">عرض التقرير بعد الموافقة</a></li>
			</ul>
			<?php }?>
				<?php }?>
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
<?php }
}
