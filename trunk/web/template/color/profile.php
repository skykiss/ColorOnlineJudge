<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
	if(isset($_SERVER['HTTP_REFERER']))$dir=basename(dirname($_SERVER['HTTP_REFERER']));
	else $dir="";
	if($dir=="discuss3") $path_fix="../";
	else $path_fix="";
	require_once("../../include/db_info.inc.php");
	if(isset($OJ_LANG)){
		require_once("../../lang/$OJ_LANG.php");
	}else{
		require_once("../../lang/en.php");
	}
    function checkmail(){
			
		$sql="SELECT count(1) FROM `mail` WHERE 
				new_mail=1 AND `to_user`=?";
		$result=pdo_query($sql,$_SESSION['user_id']);
		if(!$result) return false;
		$row=$result[0];
		$retmsg="<span id=red>(".$row[0].")</span>";
		
		return $retmsg;
	}
	$profile='';
		if (isset($_SESSION['user_id'])){
				$sid=$_SESSION['user_id'];
                                    $profile.= " <a href='".$path_fix."userinfo.php?user=$sid'><span id=red>个人中心</span></a>&nbsp;";
				$mail=checkmail();
                                
				$profile.= "<a href=".$path_fix."logout.php>$MSG_LOGOUT</a>&nbsp;";
			}else{
                if ($OJ_WEIBO_AUTH){
				    $profile.= "<li><a href=".$path_fix."login_weibo.php>$MSG_LOGIN(WEIBO)</a></li>&nbsp;";
                }
                if ($OJ_RR_AUTH){
				    $profile.= "<li><a href=".$path_fix."login_renren.php>$MSG_LOGIN(RENREN)</a></li>&nbsp;";
                }
                if ($OJ_QQ_AUTH){
            $profile.= "<li><a href=".$path_fix."login_qq.php>$MSG_LOGIN(QQ)</a></li>&nbsp;";
                }
				$profile.= "<a href=".$path_fix."loginpage.php>$MSG_LOGIN</a>&nbsp;";
				if($OJ_LOGIN_MOD=="hustoj"){
					if(isset($OJ_REGISTER)&&!$OJ_REGISTER){
					}else{
						$profile.= "<a href=".$path_fix."registerpage.php>$MSG_REGISTER</a>&nbsp;";
					}
				}
			}
			if (isset($_SESSION['administrator'])||isset($_SESSION['contest_creator'])||isset($_SESSION['problem_editor'])){
           $profile.= "<a href=".$path_fix."admin/>$MSG_ADMIN</a>&nbsp;";
			
			}
	 //  $profile.="</ul></li>";
		?>
document.write("<?php echo ( $profile);?>");
document.getElementById("profile").innerHTML="<?php echo  isset($sid)?$sid:$MSG_LOGIN  ?>";
