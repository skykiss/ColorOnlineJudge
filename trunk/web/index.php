<?php
////////////////////////////Common head
	$cache_time=300;
	$OJ_CACHE_SHARE=true;
	require_once('./include/cache_start.php');
        require_once('./include/db_info.inc.php');
	require_once('./include/setlang.php');
	$view_title= "Welcome To Online Judge";
 $result=false;	
///////////////////////////MAIN	
	
	$view_news="";
	$sql=	"select * "
			."FROM `news` "
			."WHERE `defunct`!='Y'"
			."ORDER BY `importance` ASC,`time` DESC "
			."LIMIT 50";
	$result=pdo_query($sql);//mysql_escape_string($sql));
	if (!$result){
		$view_news= "<h3>No News Now!</h3>";
	}else{
		
		foreach ($result as $row){
			$view_news.= "<table><tr><td><td><big><b>".$row['title']."</b></big>-<small>[".$row['user_id']."][".$row['time']."]</small></tr>";
			$view_news.= "<tr><td><td>".$row['content']."</tr></table><hr>";

		}
	}

//// category
$r=false;
$view_category="";
	$sql=	"select distinct source "
			."FROM `problem` "
			."LIMIT 500";
	$r=pdo_query($sql);//mysql_escape_string($sql));
	$category=array();
        foreach ($r as $row){
		$cate=explode(" ",$row['source']);
		foreach($cate as $cat){
			array_push($category,trim($cat));	
		}
	}
	$category=array_unique($category);
	if (!$result){
		$view_category= "<h3>No Category Now!</h3>";
	}else{	
		foreach ($category as $cat){
			if(trim($cat)=="") continue;
	                $view_category.="<a class='tagc3' href='problemset.php?search=".htmlentities($cat,ENT_QUOTES,'UTF-8')."'>".$cat."</a>";	
               }
	}



        


                        
/////////////////////////Template
require("template/".$OJ_TEMPLATE."/index.php");
/////////////////////////Common foot
if(file_exists('./include/cache_end.php'))
	require_once('./include/cache_end.php');
?>
