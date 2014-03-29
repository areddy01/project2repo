<?php
Class Attendance_model extends CI_Model
{
	function __construct(){
	//$this->load->helper('url');	
	}
/* Model for insert and update the data for Infra Form 

Author : Nishant Sharma */

  function general($school){
	//echo "<pre>";
//print_r($_REQUEST);

	 for ($allincrement = 0 ; $allincrement < 3; $allincrement++){
	$getdate = mktime(0,0,0,date("m")-$allincrement ,date("d"),date("Y"));
	$month = date("Y-m-d", $getdate);
	for($increment= 0 ; $increment < count($_REQUEST['class_id']);$increment++){
		$data = array('assessment_id'=>$school['assessment_id'], 
			'class_id'=>$_REQUEST['class_id'][$increment],
			'school_code'=>$school['school_code'] ,
			'month' =>$month,
			'year'=>date("Y"),
			'no_of_sections'=>$_REQUEST["Section".$allincrement.""][$increment],		
			'no_working_days'=>$_REQUEST["WorkingDays".$allincrement.""][$increment],
			'no_students_attended'=>$_REQUEST["NumberOFStudents".$allincrement.""][$increment],
			'student_cumulative_attendance' =>$_REQUEST["CumulativeAttendance".$allincrement.""][$increment], 
			'no_teachers_attended' =>$_REQUEST['NumberofTeachers3'][$allincrement],
			'no_working_days_teachers'=>$_REQUEST['Workingdays3'][$allincrement],
			'teacher_cumulative_attendance'=>$_REQUEST['CumulativeAttendance3'][$allincrement],
		    'update_user'=>$school['user_roll'],
			'update_date'=>date("Y-m-d")
			
			);
			//print_r($data);
		$getdate2 = mktime(0,0,0,date("m")-$allincrement ,date("d"),date("Y"));
	$lastmonth = date("m", $getdate2);
	$recsetclear = $this->db->query("SELECT * FROM `attendance` a ,`assessment` b  WHERE a.school_code = '".$data['school_code']."' AND b.assessment_id = a.assessment_id  AND b.assessment_status =1 AND class_id ='".$data['class_id']."' AND DATE_FORMAT(
month , '%m' )= '".$lastmonth."' ");

		$validate =($recsetclear->result_array());
	
		if(count($validate)==0){
			
		$this->db->insert('attendance',  $data);
		}
		else{
		$ID =$validate[0]['attendance_id'];
		$condition = array('attendance_id' =>$ID);
		
		$this->db->where($condition);
		$this->db->update('attendance',  $data);
		}
		
	}
	  }
	   return true;
  }
/* display the data from data base 
Author :Nishant Sharma*/
function display_form($school){
			//echo $lastmonth = sprintf("%02s", date("m")-2);
			$lastmonth = sprintf("%02s", date("m")-1);
			$getdate = mktime(0,0,0,date("m")-2 ,date("d"),date("Y"));
			$lastlastmonth = date("m", $getdate);

			$setvalues = $this->db->query("SELECT ref_class_name.class_name, ref_class_name.class_id FROM `ref_class_name` ");
			$formarray1['setvalue'] =($setvalues->result_array());

			$recsetclear = $this->db->query("SELECT * FROM `attendance` a ,`assessment` b  WHERE a.school_code = '".$school['school_code']."' AND b.assessment_id = a.assessment_id  AND b.assessment_status =1 AND DATE_FORMAT(
			month , '%m' )= '".date("m")."' ");
			$formarray2['getvalue'] =($recsetclear->result_array());

			$lastmonth = $this->db->query("SELECT * FROM `attendance` a ,`assessment` b  WHERE a.school_code = '".$school['school_code']."' AND b.assessment_id = a.assessment_id  AND b.assessment_status =1 AND DATE_FORMAT(
			month , '%m' )= '".date("$lastmonth")."' ");
			$formarray3['getvaluelastmonth'] =($lastmonth->result_array());

			$lastlastmonth  = $this->db->query("SELECT * FROM `attendance` a ,`assessment` b  WHERE a.school_code = '".$school['school_code']."' AND b.assessment_id = a.assessment_id  AND b.assessment_status =1 AND DATE_FORMAT(
			month , '%m' )= '".date("$lastlastmonth")."' ");
			$formarray4['getvaluelastlastmonth'] =($lastlastmonth->result_array());

			$formarray = array_merge($formarray1,$formarray2,$formarray3,$formarray4);
			
			return $formarray;
}
}
?>
