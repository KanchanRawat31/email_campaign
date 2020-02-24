<?php
//require 'database/connection.php';

class campaignModel extends connection{

    protected $data = [];

    public function showCampaign()
    {
       $con = $this->connect();
       $query = "SELECT * FROM campaign;";
       $result=mysqli_query($con,$query);
       $resultCheck = mysqli_num_rows($result);
        if($resultCheck >0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $this->data[] = $row['camp_id'].'//'.$row['camp_subject'].'//'.$row['camp_body'].'//'.$row['camp_date'].'//'.$row['camp_entered'].'//'.$row['camp_category'].'//'.$row['mailService'];
            }
            //print_r ($this->data);
            return ($this->data);
        }
        else
        {
            echo 'sorry not working
            <br> work harder';
        }
       
        }
     public function launchCampaign(){

        //echo '<br><h1>you need to tweak in the code for calling this function majorly in
       // addCampaignModel function<h1><br>';
        $mailTo = $_POST['industry'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];
        $launchedBy = "kanchan";
        $date="";
        $enter="";
        $gmailSmtp = "Gmail Smtp";
        $con = $this->connect();
        $query="INSERT INTO `campaign`(`camp_category`,`camp_subject`,`camp_body`,`camp_id`,`camp_date`,`camp_entered`,`mailService`) 
        VALUES('$mailTo','$subject','$body','$launchedBy','$date','$enter','$gmailSmtp');";
        $result = mysqli_query($con,$query);
        if(!$result){
            echo mysqli_errno($con) . ": " . mysqli_error($con) . "\n"; 
            //echo '<br>not inserted<br>';
            return False;
        }
        else{
            echo '<br>inserted<br>';
            return True;
          }
        }
}

?>