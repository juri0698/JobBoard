<?php 
	include '../php/connect.php';

		$JOBid = $_GET['jobid'];
		$sql = "SELECT * FROM jobs.Applicants where job_id='$JOBid' ";
		
        $result = mysqli_query($con7,$sql);

        $data = array();

        while ($row = mysqli_fetch_array($result)) {
         $data[] = array("id"=>$row['id'],"name"=>$row['applicant_Name']);
        }

        echo json_encode($data);
	
 ?>