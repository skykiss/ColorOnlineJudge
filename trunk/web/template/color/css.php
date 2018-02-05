<?php 

	$dir=basename(getcwd());
	if($dir=="discuss3"||$dir=="admin") $path_fix="../";
	else $path_fix="";
?>

<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="<?php echo $path_fix."template/$OJ_TEMPLATE/"?>bootstrap.min.css">


<link rel="stylesheet" href="<?php echo $path_fix."template/$OJ_TEMPLATE/$OJ_CSS"?>">
<link rel="stylesheet" href="<?php echo $path_fix."template/$OJ_TEMPLATE/"?>katex.min.css">
<link rel="stylesheet" href="<?php echo $path_fix."template/$OJ_TEMPLATE/"?>mathjax.css">
    <!-- FONTAWESOME STYLES-->
<link href="<?php echo $path_fix."template/$OJ_TEMPLATE/"?>assets/css/font-awesome.css" rel="stylesheet" />
<!--CUSTOM BASIC STYLES-->
<link href="<?php echo $path_fix."template/$OJ_TEMPLATE/"?>assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
<link href="<?php echo $path_fix."template/$OJ_TEMPLATE/"?>assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
