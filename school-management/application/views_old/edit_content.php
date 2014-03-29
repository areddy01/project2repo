<div id="shell">
<?php    $this->load->view('header'); ?>
	<!-- Header -->
	<script>
	function getcategory(){
		var valu = $('#getcat').val();
		if(valu == 'dropdown'){
			$('#drop').show()
		}
			else
			$('#drop').hide()

	}
	</script>
	<div id="header">
		<h1><a href="#">School Management System</a></h1>
		<div class="right">
			<p>Welcome <a href="#"><strong>Administrator</strong></a></p>
			<p class="small-nav"><a href="#">Help</a> / <a href="">Profile Settings</a> / <a href="home/logout">Log Out</a></p>
		</div>
	</div>
	<!-- End Header -->
	<!-- Navigation -->
	 <?php    $this->load->view('menu'); ?>	
	<!-- End Navigation -->
	<!-- Content -->
	<div id="content">
<?php    $this->load->view('dashboard', $info ); ?>
	 <form name = "myfrom" id = "showschool" action = "/admin/getform_data?formname=school_profile&school_code=<?php echo $school_code ; ?> '&school_name=<?php echo $school_name; ?> "  method  = "POST">
	<label>Select the form: </label>
   <select name="formname" style="width: 200px">
		<option value="school_profile">Infra form</option>
		<option value="assessment">assessment form</option>
		<option value="enrollment">enrollment form</option>
	</select>
	<input type =  "hidden"  id = "school_code" value = "<?php echo $school_code;?>" >
	<input type =  "hidden" name = "school_name"  value = "<?php echo $school_name ;?>" >
	<input type = "submit" value = "Submit" />				
	</div>
	</form>	
	<!--<table style="border:solid;">
	<tr>
	<td>Category</td>
	<td>Sub Category Name(label value)</td>
	<td>Category Field Type</td>
	<td>Default Value </td>
	<td>Action</td>
	</tr>
	<?php 
	for ($row = 0; $row < count($arr) ;  $row++) { ?>
	<tr style="border:solid;">
	<td style="border:solid;" ><?php echo $arr[$row]['facility_cat_name'] ; ?></td>
	<td style="border:solid;" ><?php echo $arr[$row]['facility_sub_cat_name'] ; ?></td>
	<td style="border:solid;" ><?php echo $arr[$row]['facility_sub_cat_type'] ; ?></td>
	<td style="border:solid;" ><?php echo $arr[$row]['facility_sub_cat_type_field'] ; ?></td>
	<td style="border:solid;" ><a href = ""> Edit </a></td>
	<tr>
	<?php }?>
	<table>-->
	
	<!-- End Content -->
</div>
<!-- End Shell -->