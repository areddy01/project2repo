<ul class="tabss" id="homeAccordion">


<?php if ($user_roll == 'administrator'){ ?>

<li  style="text-decoration:none;"><a href = "/infra/form/?info=<?php echo $info ;?>" >Infra </a></li>
<li><a href = "/admin/admissions/?info=<?php echo $info ;?>" >Admissions </a></li>
<li><a  href = "/attendance/form/?info=<?php echo $info ;?>" >Attendance</a></li>
<li><a href = "/admin/schoolfee/?info=<?php echo $info ;?>" >School fee </a></li>	
<li><a href = "/admin/transport/?info=<?php echo $info ;?>" >Transport </a></li>
<li><a href = "/admin/overdue/?info=<?php echo $info ;?>" >Overdue </a></li>
<li><a href = "/otherfee/form/?info=<?php echo $info ;?>" >Other Fee</a></li>
<li><a href = "/admin/cost/?info=<?php echo $info ;?>" >Cost </a></li>
<li><a href = "/tenth/form/?info=<?php echo $info ;?>" >Tenth</a></li>
<li><a href = "/admin/teacher/?info=<?php echo $info ;?>" >Teacher </a></li>
<li><a href = "/admin/observations/?info=<?php echo $info ;?>" >Observations </a>

<?php }else{ ?>
<a href = "/admin/teachersurvey/?info=<?php echo $info ;?>" >Teacher Survey </a>
<a href = "/admin/parentsurvey/?info=<?php echo $info ;?>" >Parent Survey </a>
<a href = "/teacher_test/show_option/?info=<?php echo $info ;?>" >Teacher Test </a>
<a href = "/student_test/show_option/?info=<?php echo $info ;?>" >Student Test </a>

<?php }?>
<!--
<a href = "/admin/add_user/?info=<?php echo $info ;?>" >New User </a>
<a href = "/admin/display_school/?info=<?php echo $info ;?>" >Display All School </a>
<a href = "/admin/ttsheet/?info=<?php echo $info ;?>" >Teacher Test </a>
<a href = "/create_xls/creatxls" >Genrate XLS</a>
<a href = "/admin/content_display/?info=<?php echo $info ;?>" >Lookup Tables</a>
--></ul>