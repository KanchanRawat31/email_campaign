<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class settingController extends super_controller
{
    public $gmail=True;
    public function index(){
        $this->view('/dashboard/setting',[],'Setting');
        $this->view->render();
    }

    public function gmailSmtp(){
        //echo '<br>xxxxThis is inside gmailSmtpxxxxxx<br>';
        $this->gmail =True;
        $counter = 0;
        $mail             = new PHPMailer();
        $mail->IsSMTP();
        $mail->CharSet="UTF-8";
        $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );//this is for the error that start tls one
       
        $mail->SMTPSecure = 'ssl';//tls
        $mail->SMTPAuth   = true;
        $mail->Host       = "smtp.gmail.com";
        $mail->Port       = 465;//telnet smtp.gmail.com 587,465
                   // only this command is showing 220 something 
                   //if it would have not been so it would mean that i have wrong server or down server.
         $mail->SMTPDebug  = 0;
        $mail->IsHTML(true);
        $mail->Username   = "rawatkanchan1999@gmail.com";
        $mail->Password   = "uxcwrvvlluxcerlh";
        $mail->From       = "rawatkanchan1999@gmail.com";
        $mail->AddReplyTo("rawatkanchan1999@gmail.com","KANCHAN RAWAT");
        $mail->Subject    = $_POST['subject'];
        $mail->AltBody    = "Any message.";
        $body             = $_POST['body'];
        $mail->MsgHTML($body);
        $address = 'priyapathak24.07@gmail.com';
        //$data = array();
        $this->model('subscriber',[],'mailTo');
        $data = $this->model->mailTo();
        foreach ($data as $address) {
           echo $address.'<br>';
            $mail->addAddress($address);//this is where changes has been made 
            if(!$mail->send()){
                //echo 'this is error';
                echo mysqli_errno($con) . ": " . mysqli_error($con) . "\n"; 
                //echo 'email not sent';
            }
            else{
                //$this->model('campaign',[],'launchCampaign');
                //$launched = $this->model->launchCampaign();
                //if($launched){
                echo 'email sent'.$address.'<br>';
                echo'<br><br>';
                $counter = $counter + 1;
            }
            $this->addCampaignModel();
            echo '<br>';
                //else {
                  //  echo 'something wrong';
                //}
            }
      
    }

    public function addCampaignModel(){
        //echo '<br>add campaign model<br>';
        $this->model('campaign',[],'launchCampaign');
        //echo '<br>no issue with creating model<br>';
        $launched = $this->model->launchCampaign();
        //echo '<br>may be it never launched<br>';
        if($launched){
           echo '<br>email inserted';
        }

        else{
            echo '<br>email not inserted<br>';
        }
    }
}
?>