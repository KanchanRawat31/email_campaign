<?php


class loginController extends super_controller
{
	public function index()
    {
      $this->view('/login/login',[],'login');
        $this->view->render();
    }

    public function signUpDisplay(){
        $this->view('/login/signUp',[],'Sign Up');
        $this->view->render();
    }

    public function loginDisplay(){
        $this->view('login/login',[],'login');
        $this->view->render();
    }

	public function login()
	{
		$this->model('user',[],'SELECT');
		echo 'this portion is executed';
		//if (method_exists($this->model,$this->model_queryname))
		//{
			//$can_access = $this->model->SELECT();
           $can_access=call_user_func_array([$this->model,$this->model_queryname],$this->model_data); 
             if($can_access == True){
                //echo $_POST['email'];
                //echo $_SESSION['User'];
                //$this->username = $_SESSION['User'];
               
                header("location:/login/dashboard");
            //$this->view->render();
            }
            else
            {
                echo 'This is wrong';
                header("location:/login/index/somethingwentwrong");
                /*$this->controller = 'homeController';
                $this->action ='login';
                $this->params ='Something went wrong';
                $this->view('/home/login',['try again'],'Login');
                $this->view->render();*/
         /*       header("location:/login/login");
            }
        }*/
    }
}
    public function dashboard(){
    	$this->view('/dashboard/dashboard',[],'');
    	$this->view->render();
    }
    public function home()
    {
        $this->view('/dashboard/home',[],'');
        $this->view->render();
    }
    public function logout()
    {
        //$this->view('/dashboard/logout',[],'');
        //$this->view->render();
    require_once "../common/config.php";
    unset($_SESSION['access_token']);
    $gClient->revokeToken();
    session_destroy();
    header('Location: /login/loginDisplay');
    exit();
    }

    public function g_callback(){
        require_once "../common/config.php";

    if (isset($_SESSION['access_token']))
        $gClient->setAccessToken($_SESSION['access_token']);
    else if (isset($_GET['code'])) {
        $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
        $_SESSION['access_token'] = $token;
    } else {
        header('Location: login/signUpDisplay');
        exit();
    }

    $oAuth = new Google_Service_Oauth2($gClient);
    if($auth_url=='https://oauth2.example.com/auth?error=access_denied'){
        header('Location: /login/signUpDisplay');
        //$this->view('login/signUp',[],'Sign Up');
        //$this->view->render();
    }
    else{
    $userData = $oAuth->userinfo_v2_me->get();

    $_SESSION['id'] = $userData['id'];
    $_SESSION['email'] = $userData['email'];
    $_SESSION['username'] = $userData['username'];

    echo session_id();
    //header('Location: index.php');
    $this->dashboard();
    exit();
    }
}
}
?>