<div class ="left-sidebar" style = "">
&nbsp;&nbsp;

<?php if ($user_roll == 'administrator'){ ?>

&nbsp;&nbsp;<a href = "/infra/form/?info=<?php echo $info ;?>" >Infra </a>
&nbsp;&nbsp;<a href = "/admin/admissions/?info=<?php echo $info ;?>" >Admissions </a>
&nbsp;&nbsp;<a href = "/attendance/form/?info=<?php echo $info ;?>" >Attendance</a>
&nbsp;&nbsp;<a href = "/admin/schoolfee/?info=<?php echo $info ;?>" >School fee </a>	
&nbsp;&nbsp;<a href = "/admin/transport/?info=<?php echo $info ;?>" >Transport </a>
&nbsp;&nbsp;<a href = "/admin/overdue/?info=<?php echo $info ;?>" >Overdue </a>
&nbsp;&nbsp;<a href = "/otherfee/form/?info=<?php echo $info ;?>" >Other Fee</a>
&nbsp;&nbsp;<a href = "/admin/cost/?info=<?php echo $info ;?>" >Cost </a>
<!--&nbsp;&nbsp;<a href = "/tenth/form/?info=<?php echo $info ;?>" >Tenth</a>
&nbsp;&nbsp;<a href = "/admin/teacher/?info=<?php echo $info ;?>" >Teacher </a>
&nbsp;&nbsp;<a href = "/admin/observations/?info=<?php echo $info ;?>" >Observations </a>-->

<?php } else {?>

&nbsp;&nbsp;<a href = "/admin/teachersurvey/?info=<?php echo $info ;?>" >Teacher Survey </a>
&nbsp;&nbsp;<a href = "/admin/parentsurvey/?info=<?php echo $info ;?>" >Parent Survey </a>
&nbsp;&nbsp;<a href = "/teacher_test/show_option/?info=<?php echo $info ;?>" >Teacher Test </a>
&nbsp;&nbsp;<a href = "/student_test/show_option/?info=<?php echo $info ;?>" >Student Test </a>
&nbsp;&nbsp;<a href = "/admin/revenue/?info=<?php echo $info ;?>" >Revenue </a>


<?php }?>
<?php /*<!--
&nbsp;&nbsp;<a href = "/admin/add_user/?info=<?php echo $info ;?>" >New User </a>
&nbsp;&nbsp;<a href = "/admin/display_school/?info=<?php echo $info ;?>" >Display All School </a>
&nbsp;&nbsp;<a href = "/admin/ttsheet/?info=<?php echo $info ;?>" >Teacher Test </a>
&nbsp;&nbsp;<a href = "/create_xls/creatxls" >Genrate XLS</a>
&nbsp;&nbsp;<a href = "/admin/content_display/?info=<?php echo $info ;?>" >Lookup Tables</a>
-->*/?>