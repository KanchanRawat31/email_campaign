<?php
//require 'database/connection.php';


//echo 'I am inside connection for database';


class userModel extends connection {
	/*protected $servername="localhost";
	protected $username="root";
	protected $password="";
	protected $db="demo";
*/
	public function SELECT()
	{
	//	$conn=mysqli_connect($this->servername,$this->username,$this->password,$this->db);
 //if(!$conn){
 	//die("connection failed:".mysqli_connect_error());
//}
		$conn = $this->connect();
		//echo 'select function of userModel';
		// here goes some hardcoded values to simulate the database
		/*if(isset($_REQUEST['username']) && isset($_REQUEST['password']))
		{
			if($_REQUEST['username']=='admin' && $_REQUEST['password']=='admin')
			{
				return 'login';
			}
			else
			{
			 	return 'invalid user';
			}
		}*/
		 if(isset($_POST['Login']))
    {
      
       
       		
            $query="select * from user where username='".$_POST['username']."' and password='".$_POST['password']."'";
            $result=mysqli_query($conn,$query);

            if(mysqli_fetch_assoc($result))
            {
            	return True;
               // $_SESSION['User']=$_POST['uname'];
               // header("location:/ec/view/dashboard/dashboard.php");
            }
            else
            {
            	return False;
                //header("location:login.php ");
            }
       
    }
    else
    {
        echo 'Not Working Now Guys';
    }


	}

	public function addUser(){
		   $userName = $_POST['userName'];
           $email = $_POST['email'];
           $password = $_POST['password'];
           $occupation = $_POST['industry'];
           $sql = "INSERT INTO `user`(
                    `username`,
                    `email`,
                    `password`,
                    `occupation`
                ) VALUES(
                '$userName',
                '$email',
                '$password',
                '$occupation'
            );";
           // $result = $this->connect()->query($sql);
           /* $sql = "INSERT INTO user('id','firstName','lastName','email','organizationName',
            'organizationUrl','industry','password','recoveryEmail','googleUser') 
            VALUES('1','Priya','Pathak','priyapathak24.07@gmail.com',THDCIHET','www.thdcihet.ac.in',
            'developer','123','pp.17cs28@thdcihet.ac.in','1');";*/
          $con = $this->connect();
            //echo 'connection has been created';
            //$result = (mysqli(query($sql,$con)==true));
           // $sql = "SELECT * FROM user";
            $result = mysqli_query($con,$sql);
           // $result = $this->connect()->query($sql);
            //echo 'after execution of insert query';

        if(! $result )
        {   
            //echo 'this is before your error will be displayed to it<br>';
           // echo("Error description: " . mysqli_error($result));
           echo mysqli_errno($con) . ": " . mysqli_error($con) . "\n"; 
           return False;
        }
        else{
        	//echo '<br>no error will be displayed<br>';
            return True;
        }
}

//else 
//{
  //  echo ("We inserted the id");
	}
?>