<ul class="navigate" >

<?php 
?>

<?php if ($user_roll == 'administrator'){ ?>

<li style="  border:1px solid; height:30px;  border-color:white;"  class="<?php if($_REQUEST['page']==0){ echo 'btnbg'; } else {  echo ''; } ?>"><a  style="margin-left:10px; text-decoration:none;" href = "/infra/form/?info=<?php echo $info ;?>&page=0" >Infra </a></li>
<li style="  border:1px solid; height:30px;  border-color:white;"  class="<?php if($_REQUEST['page']==2){ echo 'btnbg'; } else {  echo ''; } ?>"><a style="margin-left:10px; text-decoration:none;" href = "/admin/admissions/?info=<?php echo $info ;?>&page=2" >Admissions </a></li>
<li style="  border:1px solid; height:30px;  border-color:white;"  class="<?php if($_REQUEST['page']==3){ echo 'btnbg'; } else {  echo ''; } ?>"><a style="margin-left:10px; text-decoration:none;"  href = "/attendance/form/?info=<?php echo $info ;?>&page=3" >Attendance</a></li>
<li style="  border:1px solid; height:30px;  border-color:white;"  class="<?php if($_REQUEST['page']==4){ echo 'btnbg'; } else {  echo ''; } ?>"><a style="margin-left:10px; text-decoration:none;" href = "/admin/schoolfee/?info=<?php echo $info ;?>&page=4" >School fee </a></li>	
<li style="  border:1px solid; height:30px;  border-color:white;"  class="<?php if($_REQUEST['page']==5){ echo 'btnbg'; } else {  echo ''; } ?>"><a style="margin-left:10px; text-decoration:none;" href = "/admin/transport/?info=<?php echo $info ;?>&page=5" >Transport </a></li>
<li style="  border:1px solid; height:30px;  border-color:white;"  class="<?php if($_REQUEST['page']==6){ echo 'btnbg'; } else {  echo ''; } ?>"><a style="margin-left:10px; text-decoration:none;" href = "/admin/overdue/?info=<?php echo $info ;?>&page=6" >Overdue </a></li>
<li style="  border:1px solid; height:30px;  border-color:white;"  class="<?php if($_REQUEST['page']==7){ echo 'btnbg'; } else {  echo ''; } ?>"><a style="margin-left:10px; text-decoration:none;" href = "/otherfee/form/?info=<?php echo $info ;?>&page=7" >Other Fee</a></li>
<li style="  border:1px solid; height:30px;  border-color:white;"  class="<?php if($_REQUEST['page']==8){ echo 'btnbg'; } else {  echo ''; } ?>"><a style="margin-left:10px; text-decoration:none;" href = "/admin/cost/?info=<?php echo $info ;?>&page=8" >Cost </a></li>
<li style="  border:1px solid; height:30px;  border-color:white;"  class="<?php if($_REQUEST['page']==9){ echo 'btnbg'; } else {  echo ''; } ?>"><a style="margin-left:10px; text-decoration:none;" href = "/tenth/form/?info=<?php echo $info ;?>&page=9" >Tenth</a></li>
<li style="  border:1px solid; height:30px;  border-color:white;"  class="<?php if($_REQUEST['page']==10){ echo 'btnbg'; } else {  echo ''; } ?>"><a style="margin-left:10px; text-decoration:none;" href = "/admin/teacher/?info=<?php echo $info ;?>&page=10" >Teacher </a></li>
<li style="  border:1px solid; height:30px;  border-color:white;"  class="<?php if($_REQUEST['page']==11){ echo 'btnbg'; } else {  echo ''; } ?>"><a style="margin-left:10px; text-decoration:none;" href = "/admin/observations/?info=<?php echo $info ;?>&page=11" >Observations </a>

<?php }else{ ?>
<li style="  border:1px solid; height:30px;  border-color:white;"  class="<?php if($_REQUEST['page']==12){ echo 'btnbg'; } else {  echo ''; } ?>"><a style="margin-left:10px; text-decoration:none;" href = "/admin/teachersurvey/?info=<?php echo $info ;?>&page=12" >Teacher Survey </a>
</li><li style="  border:1px solid; height:30px;  border-color:white;"  class="<?php if($_REQUEST['page']==13){ echo 'btnbg'; } else {  echo ''; } ?>"><a style="margin-left:10px; text-decoration:none;" href = "/admin/parentsurvey/?info=<?php echo $info ;?>&page=13" >Parent Survey </a></li>
<li v class="<?php if($_REQUEST['page']==14){ echo 'btnbg'; } else {  echo ''; } ?>"><a style="margin-left:10px; text-decoration:none;" href = "/teacher_test/show_option/?info=<?php echo $info ;?>&page=14" >Teacher Test </a></li>
<li style="  border:1px solid; height:30px;  border-color:white;"  class="<?php if($_REQUEST['page']==15){ echo 'btnbg'; } else { echo ''; } ?>"><a style="margin-left:10px; text-decoration:none;" href = "/student_test/show_option/?info=<?php echo $info ;?>&page=15" >Student Test </a></li>

<?php }?>
<!--
<a href = "/admin/add_user/?info=<?php echo $info ;?>" >New User </a>
<a href = "/admin/display_school/?info=<?php echo $info ;?>" >Display All School </a>
<a href = "/admin/ttsheet/?info=<?php echo $info ;?>" >Teacher Test </a>
<a href = "/create_xls/creatxls" >Genrate XLS</a>
<a href = "/admin/content_display/?info=<?php echo $info ;?>" >Lookup Tables</a>
--></ul>