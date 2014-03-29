<?php 
Class Revenue_model extends CI_Model
{
          function __construct(){
           //$this->load->helper('url');
          }
          
          function display_form($school){
          
          $getvalue1=$this->db->query("SELECT fee_amount FROM school_fees WHERE school_code = '".$school['school_code']."'");
          $formarray1['school_fees']=($getvalue1->result_array());
          
          $getvalue2=$this->db->query("SELECT fee_amount,quantity FROM transport_fees WHERE school_code = '".$school['school_code']."'");
          $formarray2['transport_fees']=($getvalue2->result_array());
          
          $getvalue3=$this->db->query("SELECT fee_overdue FROM overdue WHERE school_code = '".$school['school_code']."'");
          $formarray3['overdue']=($getvalue3->result_array());
       
          $getvalue4=$this->db->query("SELECT `fee_amount`,`quantity`,`margin_books`,`margin_etc`FROM other_fees WHERE fee_id=7 AND `school_code`='HYD0002'");
          $formarray4['otherfeebooks']=($getvalue4->result_array());     
          
          $getvalue5=$this->db->query("SELECT class_name FROM ref_class_name");
          $formarray5['class_name']=($getvalue5->result_array());
          
          $getvalue6=$this->db->query("SELECT total_enrollment_boys,total_enrollment_girls,total_free_admissions_students FROM enrollment WHERE school_code = '".$school['school_code']."'");
          $formarray6['enrollment']=($getvalue6->result_array());

          $getvalue7=$this->db->query("SELECT `fee_amount`,`quantity`,`margin_books`,`margin_etc`FROM other_fees WHERE fee_id=8 AND `school_code`='HYD0002'");
          $formarray7['otherfeeetc']=($getvalue7->result_array());

       
          $formarray = array_merge($formarray1,$formarray2,$formarray3,$formarray4,$formarray5,$formarray6,$formarray7);
          
        
          return $formarray;
          }

}


?>