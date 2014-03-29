<?php
Class Admindata extends CI_Model
{
	function __construct(){

	}

/* pushing school data in database */

	function AddSchoolDB($schooldata)
	{
		$this->db->insert('school', $schooldata);
		return true ; 
	}
	
	function addinfradb($infradata)
	{
		$this->db->insert('infra', $infradata);
		return true ; 
	}

	/*function GetSchooDB (){
		    $this->db->select(array('id','schoolname','schoolid','design', 'active'));			
			$recsetclear = $this->db->get("school");	
			return  $recsetclear->result_array();
	}*/

	function GetSchooDBbyvalue(){
		    $this->db->select(array('id','schoolname','schoolid','design', 'active'));			
			$recsetclear = $this->db->get("school");	
			return  $recsetclear->result_array();
	}
	function SearchSchooDB($value){
		 $this->db->select(array('id','schoolname','schoolid','design', 'active'));
		 $recsetclear = $this->db->where($value);
		 $recsetclear = $this->db->get("school");
		return  $recsetclear->result_array();

	}


	function record_count() {
        return $this->db->count_all("school");
    }

   function GetSchooDB($limit, $start, $value) {
        $this->db->limit($limit, $start);
        //$query = $this->db->get("school");
		$query = $this->db->query("SELECT a.school_code, b.assessment_status, a.school_name FROM school a, assessment b WHERE a.school_code =b.school_code GROUP BY a.school_code ORDER BY a.id")->result_array();
		return  $query ;
     /*if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;*/


   }
function addschoolfeedb($schoolfee)
	{
		$this->db->insert('school_fees', $schoolfee);
		return true ; 
	}

    function addadmissionsdb($admissions)
	{
		$this->db->insert('admissions', $admissions);
		return true ; 
	}


	function addtransportdb($transportdata)
	 {
	  $this->db->insert('transport', $transportdata);
	  return true ; 
	 }
	 
	function addfinancialdb($financialdata)
	 {
	  $this->db->insert('financial', $financialdata);
	  return true ; 
	 }
	 
	function addteachersurveydb($teachersurveydata)
	 {
	 $this->db->insert('teachersurvey', $teachersurveydata);
	  return true ;
	 }
	
	function addoverduedb($overduedata)
	 {
	 $this->db->insert('overdue', $overduedata);
	  return true ;
	 }

	function addteacherfeedbackdb($teacherfeedbackdata)
	 {
	 $this->db->insert('teacherfeedback', $teacherfeedbackdata);
	  return true ;
	 }
	 
	 
	function addttsheetdb($ttsheetdata)
	 {
	 $this->db->insert('ttsheet', $ttsheetdata);
	  return true ;
	 }
	 
	function addtenthdb($tenthdata)
	 {
	 $this->db->insert('tenth', $tenthdata);
	  return true ;
	 }

	function addparentsurveydb($parentsurveydata)
	 {
	 $this->db->insert('parentsurvey', $parentsurveydata);
	  return true ;
	 }

	 
	function addobservationsdb($observationsdata)
	 {
	 $this->db->insert('observations', $observationsdata);
	  return true ;
	 }
	 
	function addteacherdb($teacherdata)
	 {
	 $this->db->insert('teacher', $teacherdata);
	  return true ;
	 }
	
	function addattendancedb($attendancedata)
	 {
	 $this->db->insert('attendance', $attendancedata);
	  return true ;
	 }


}
?>
