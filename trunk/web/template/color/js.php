<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="<?php echo $path_fix."template/$OJ_TEMPLATE/"?>jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="<?php echo $path_fix."template/$OJ_TEMPLATE/"?>bootstrap.min.js"></script>
<script src="<?php echo $path_fix."template/$OJ_TEMPLATE/"?>assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
<script src="<?php echo $path_fix."template/$OJ_TEMPLATE/"?>assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
<script src="<?php echo $path_fix."template/$OJ_TEMPLATE/"?>assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
<script src="<?php echo $path_fix."template/$OJ_TEMPLATE/"?>assets/js/custom.js"></script>

<?php
if(file_exists("./admin/msg.txt"))
$view_marquee_msg=file_get_contents($OJ_SAE?"saestor://web/msg.txt":"./admin/msg.txt");
if(file_exists("../admin/msg.txt"))
$view_marquee_msg=file_get_contents($OJ_SAE?"saestor://web/msg.txt":"../admin/msg.txt");


?>
<!--<script type="text/javascript"
  src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
</script>
-->
<script>
$(document).ready(function(){
  var msg="<marquee style='margin-top:10px' id=broadcast scrollamount=1 scrolldelay=50 onMouseOver='this.stop()'"+
      " onMouseOut='this.start()' class=toprow>"+<?php echo json_encode($view_marquee_msg); ?>+"</marquee>";
  $(".jumbotron").prepend(msg);
  $("form").append("<div id='csrf' />");
  $("#csrf").load("<?php echo $path_fix?>csrf.php");
  $("body").append("<div id=footer-sec class=center ><a href='https://github.com/skykiss' >Color Online Judge</a> "+(new Date()).getFullYear()+" </div>");
});
  console.log("If you want to change the appearance of the web pages, make a copy of bs3 under template directory.\nRename it to whatever you like, and change the $OJ_TEMPLATE value in db_info.inc.php\nAfter that modify files under your own directory .\n");


</script>

