<?php
Class Cost_model extends CI_Model
{
	function __construct(){
	$this->load->helper('url');	
	}
/* Model for insert and update the data for Infra Form 

Author : Nishant Sharma */

  function general($school){
 
		$condtionloop = 0;
		$condtionloop1 = 0;
    	for($increment= 0 ; $increment < count($_REQUEST['expense_sub_cat_id']);$increment++){
    	
    	$val=$_REQUEST['expense_cat_id'][$increment];
    	$data2=array();
    	$data3=array();
		$data1 = array('assessment_id'=>$school['assessment_id'], 
			'expense_cat_id '=>$_REQUEST['expense_cat_id'][$increment],
			'school_code'=>$school['school_code'],
			'expense_sub_cat_id' =>$_REQUEST['expense_sub_cat_id'][$increment]
			);

			if ($val == 1) 
					{
					
					$data2 = array('amount' => $_REQUEST['quantity'][0][$increment],
							'quantity' => $_REQUEST['quantity'][1][$increment],
							'comments' => $_REQUEST['quantity'][3][$increment]);
					}
			 else if($val == 2)
					{
					
					$data2= array('amount' => $_REQUEST['quantity'][4][$condtionloop]);
					$condtionloop++;
					}
			else if($val == 3)
					{
					
					$data3 = array('loan1'=> $_REQUEST['quantity'][5][$condtionloop1],
					'loan2' => $_REQUEST['quantity'][6][$condtionloop1],
					'loan3' => $_REQUEST['quantity'][7][$condtionloop1],
					'loan4' => $_REQUEST['quantity'][8][$condtionloop1],
					'loan5' => $_REQUEST['quantity'][9][$condtionloop1] );
					$condtionloop1++ ;
					}

		$data=array_merge($data1,$data2,$data3);
		

		$recsetclear = $this->db->query("SELECT cost_id FROM `cost` a ,`assessment` b  WHERE a.school_code = '".$data['school_code']."' AND b.assessment_id = a.assessment_id  AND b.assessment_status =1 AND expense_sub_cat_id  = '".$data['expense_sub_cat_id']."'" );
		$validate =($recsetclear->result_array());
		$recsetclear1 = $this->db->query("SELECT financial_id FROM `financial` a ,`assessment` b  WHERE a.school_code = '".$data['school_code']."' AND b.assessment_id = a.assessment_id  AND b.assessment_status =1 AND expense_sub_cat_id  = '".$data['expense_sub_cat_id']."'" );
		$validate1=($recsetclear1->result_array());
		
		if ($val ==1 or $val==2)
		{
		if(count($validate)==0){	
		$this->db->insert('cost',$data);
		}
		else{
		$ID =$validate[0]['cost_id'];
		$condition = array('cost_id' =>$ID);
		$this->db->where($condition);
		$this->db->update('cost',$data);
		}
		}
		if($val == 3)
					{

		if(count($validate1)==0){
		$this->db->insert('financial',$data);
		}
		else{
		$ID =$validate1[0]['financial_id'];
		$condition = array('financial_id' =>$ID);
		$this->db->where($condition);
		$this->db->update('financial',$data);
		}

				}		
  }
  return true;
  }
/* display the data from data base 
Author :Nishant Sharma*/
function display_form($school){
	
	$setvalues = $this->db->query("SELECT a.* FROM `cost` a ,`assessment` b WHERE a.school_code = '".$school['school_code']."' AND b.assessment_id = a.assessment_id  AND b.assessment_status =1");
	$formarray2['getvalue'] =($setvalues->result_array());
	$setvalues1 = $this->db->query("SELECT a.* from financial a,assessment b where a.school_code = '".$school['school_code']."' AND b.assessment_id = a.assessment_id  AND b.assessment_status =1");
	$formarray3['getvalue1'] =($setvalues1->result_array());
	

	$recsetclear = $this->db->query("Select b.* FROM `ref_expense_category` a INNER JOIN `ref_expense_sub_category` b ON a.expense_cat_id=b.expense_cat_id ORDER BY b.expense_cat_id " );
	$formarray['setvalues'] =($recsetclear->result_array());
	$formarray=array_merge($formarray2,$formarray,$formarray3);
	return $formarray;
}
}
?>
