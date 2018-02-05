<?php 
  $url=basename($_SERVER['REQUEST_URI']);
  $dir=basename(getcwd());
  if($dir=="discuss3") $path_fix="../";
  else $path_fix="";
  if(isset($OJ_NEED_LOGIN)&&$OJ_NEED_LOGIN&&(
                  $url!='loginpage.php'&&
                  $url!='lostpassword.php'&&
                  $url!='lostpassword2.php'&&
                  $url!='registerpage.php'
                  ) && !isset($_SESSION[$OJ_NAME.'_'.'user_id'])){
 
           header("location:loginpage.php");
           exit();
        }

  if($OJ_ONLINE){
    require_once('./include/online.php');
    $on = new online();
  }
?>
      <!-- Static navbar -->
      <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">COLOR OJ</a>
            </div>

            <div class="header-right">

            <script src="<?php echo $path_fix."template/$OJ_TEMPLATE/profile.php?".rand();?>" ></script>
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">



                    <li>
                        <a href="index.php"><i class="fa fa-dashboard "></i>Home</a>
                    </li>
                   
                    <li>
                        <a href="<?php echo $path_fix?>problemset.php"><i class="fa fa-square-o "></i>Problems</a>
                    </li>
                     <li>
                        <a href="<?php echo $path_fix?>status.php"><i class="fa fa-square-o "></i>status</a>
                    </li>
                     <li>
                        <a href="<?php echo $path_fix?>contest.php"><i class="fa fa-square-o "></i>Contests</a>
                    </li>
                     <li>
                        <a href="<?php echo $path_fix?>ranklist.php"><i class="fa fa-square-o "></i>Rank</a>
                    </li>
                </ul>
            </div>

        </nav>

