<?php
//require CORE.DIRECTORY_SEPARATOR.'session.php';
class authController extends super_controller{
   /* public function __construct(){
        echo 'this is constructor function of login controller';
    }*/
    protected $username;
    //protected $session;
    public function signUp(){
        echo 'I am here';
        $this->model('user',[],'addUser');
        if(method_exists($this->model,$this->model_queryname)){
            $is_registered=call_user_func_array([$this->model,$this->model_queryname],$this->model_data); 
        }
       // echo 'after model call';
       if($is_registered){
        $this->view('/dashboard/home',[],'Dashboard');
        $this->view->render();}
        else{
            $this->view('/login/signUp',[],'Try again for signUp');
            $this->view->render();
        }
    }


    public function login(){
        $email = $_POST['email'];
        echo 'I am in auth controller and loginIn function';
        $this->model('user',[],'SELECT');
        if (method_exists($this->model,$this->model_queryname)){
            $can_access = call_user_func_array([$this->model,$this->model_queryname],$this->model_data); 
            if($can_access == True){
                $this->session = new session();
                var_dump($this->session);
                session_start();
                echo session_id();
                session_destroy();
                header("location:/auth/dashboard");
           // $this->view('/dashboard/home',$_POST['Uname'],'Dashboard');
            //$this->view->render();
            }
            else{
                echo 'This is wrong';
                /*$this->controller = 'homeController';
                $this->action ='login';
                $this->params ='Something went wrong';
                $this->view('/home/login',['try again'],'Login');
                $this->view->render();*/
                header("location:/home/login/something went wrong");
            }
        }
    }
    public function validate(){
        echo 'this is validate function of login controller';
        /*$client = new Google_Client();
        $client->setAuthConfig('client_secret.json');
        $client->addScope(Google_Service_Drive::DRIVE_METADATA_READONLY);
        $client->setRedirectUri('http://' . $_SERVER['HTTP_HOST'] . '/login/dashboard');
// offline access will give you both an access and refresh token so that
// your app can refresh the access token without user interaction.
        $client->setAccessType('offline');
// Using "consent" ensures that your application always receives a refresh token.
// If you are not using offline access, you can omit this.
        $client->setApprovalPrompt("consent");
        $client->setLoginHint('priyapathak24.07@gmail.com');
        $client->setIncludeGrantedScopes(true);   // incremental auth

        $auth_url = $client->createAuthUrl();
        header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));

        if($auth_url=='https://oauth2.example.com/auth?error=access_denied'){
            $this->view('home/login',[],'Login');
        }
        else{
            $client->authenticate($_GET['code']);
            $access_token = $client->getAccessToken();
            if(isset($access_token)){
                $drive = new Google_Service_Drive($client);
                //$files = $drive->files->listFiles(array())->getItems();
                //$client->revokeToken();

                // Create a state token to prevent request forgery.
// Store it in the session for later validation.
$state = sha1(openssl_random_pseudo_bytes(1024));
$app['session']->set('state', $state);
// Set the client ID, token state, and application name in the HTML while
// serving it.
return $app['twig']->render('index.html', array(
    'CLIENT_ID' => CLIENT_ID,
    'STATE' => $state,
    'APPLICATION_NAME' => APPLICATION_NAME
));

if ($request->get('state') != ($app['session']->get('state'))) {
    return new Response('Invalid state parameter', 401);
  }
            else{
                $this->dashboard();
            }*/
                    
					
					/******Google API Connection With My APP**************/
					$client = new apiClient();
					//$client->setApplicationName("TheASP");
					$client->setClientId($client_id);
					$client->setClientSecret($client_secret);
					$client->setDeveloperKey($api_key);
					$client->setRedirectUri($redirect_url);
					$client->setApprovalPrompt(true);
					$oauth2 = new apiOauth2Service($client);
        

    }

    public function dashboard(){
       // var_dump($this->session);
        echo 'Before calling dashboard<br>';
        echo 'this is dashboard';
        echo $this->username;
        
        $this->view('/dashboard/home',$this->username,'Dashboard');
        $this->view->render();
        
    }
}

?>