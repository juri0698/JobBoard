<?php

include '../php/connect.php';

            
         $csvFile = fopen("../jobs.csv", 'r');
           
          $queryTruncateJobs = mysqli_query($con7, "TRUNCATE TABLE jobs.AllJobs;");
          $queryTruncateApplicants = mysqli_query($con7, "TRUNCATE TABLE jobs.Applicants;");

        while(($line = fgetcsv($csvFile,0,',')) !== FALSE){
            if($line[0] == "job title" || $line[1] == "job description" || $line[2] == "date" || $line[3] == "location" || $line[4] == "applicants"){

            }else{
                $jobTitle = $line[0];
                $jobDesc = $line[1];
                $jobDate = $line[2];
                $jobLocation = $line[3];
                
                $queryInsert = mysqli_query($con7, "INSERT INTO jobs.AllJobs (`job_Title`, `job_description`, `job_date`, `location`) VALUE ('$jobTitle','$jobDesc','$jobDate','$jobLocation')");

                $appArr = explode(",",$line[4]);
                
                for($i = 0; $i < count($appArr); $i++){
                    $applicant = $appArr[$i];
                    $getQuery = mysqli_query($con7,"SELECT id FROM jobs.AllJobs ORDER BY id desc limit 1");
                    
                    while($row = mysqli_fetch_array($getQuery)){
                        $jobID = $row['id'];
                        $queryInsertApp = mysqli_query($con7, "INSERT INTO jobs.Applicants (`job_id`, `applicant_Name`) VALUE ('$jobID','$applicant')");

                    }
                   
                }
                

            }
        }

        $sql = "SELECT * FROM jobs.AllJobs";
        $result = mysqli_query($con7,$sql);

        $data = array();

        while ($row = mysqli_fetch_array($result)) {
         $data[] = array("id"=>$row['id'],"title"=>$row['job_Title'],"location"=>$row['location'],"date"=>$row['job_date']);
        }

        echo json_encode($data);
            
          fclose($csvFile);
            
            
?>