<?php
$conn = mysqli_connect('localhost','root','','happyhouse'); 
 
if(!$conn)
{
	die("Error Establishing Connection" . mysqli_error($conn));
}

function change_status(){
	alert("hi");
$id = $this->input->post('id');
$status = $this->db->query("select Status from list where id = id")->row()->status;
if($status==1){
    $status = 0;
} else {
    $status = 1;
}
$data=array('status'=>$status);
$this->db->where('id','$id');
$this->db->update('list',$data);
}
?>