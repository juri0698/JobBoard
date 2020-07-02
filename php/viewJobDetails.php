<?php 
	include '../php/connect.php';

		$JOBid = $_GET['jobid'];
		$sql = "SELECT * FROM jobs.AllJobs where id='$JOBid' ";
		
        $result = mysqli_query($con7,$sql);

        $data = array();

        while ($row = mysqli_fetch_array($result)) {
         $data[] = array("id"=>$row['id'],"title"=>$row['job_Title'],"location"=>$row['location'],"date"=>$row['job_date'],"job_desc"=>$row['job_description']);
        }

        echo json_encode($data);
	
 ?>