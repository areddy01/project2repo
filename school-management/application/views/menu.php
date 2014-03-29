
		<ul>
		    <li><a href="/"  ><span>Dashboard</span></a></li>
		    <li><a href = "/email_control/resetpassword/" class="active" >Reset Password </a></li>
			<?php 
			//echo "<pre>";
			//print_r($this->arr);
			?>
			
			<?php if(isset($id) && $id ==1):?>
			
			<li><a href="/outside_controller/assement" class="active" ><span>Start New Assessment </span></a></li>
			<li> <a href = "/outside_controller/addschool/" class="active" ><span>New school </span> </a></li>	
			<li><a href = "/outside_controller/add_user/" class="active" >New User </a></li>	
			<li><a href = "/outside_controller/display_school/" class="active" >Display All Schools </a></li>
			<li><a href = "/lookup_controller/content_display/" class="active" >Lookup Tables</a></li>
			<!---<li><a href = "/genratereport_controller/select_school" class="active" > Reports</a></li>-->
			<?php endif ;?> 
		

		
		<h4><p  align="right" style="margin: 0px 10px 0px 0px;" ><font color="red" > <?php if(isset($school_code)) echo "School Code :".$school_code ; ?> <br/>  
		<?php if(isset($school_name)) echo "School Name :".$school_name ; ?></font> </p></h4>
</ul> 