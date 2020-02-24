<?php
class subscriberController extends super_controller
{
    public function showSubscriber()
    {
        $this->model('subscriber',[],'showSubscriber');
        $data=call_user_func_array([$this->model,$this->model_queryname],$this->model_data);
        //call_user_func_array([$this->model,$this->model_queryname],$this->model_data);
        //print_r($this->view_data);
        $this->view('/dashboard/showSubscriber',['subscribers'=>$data],'');
        $this->view->render();
    }

    public function addSubscriber()
    {
        $this->model('subscriber',[],'addSubscriber');
        $can_access=call_user_func_array([$this->model,$this->model_queryname], $this->model_data);
        $this->view('/dashboard/addSubscriber',[],'Add Subscriber');
        $this->view->render();
    }

    public function addSubscriberDisplay()
    {
        //$this->model('subscriber',[],'addSubscriber');
        //$can_access=call_user_func_array([$this->model,$this->model_queryname], $this->model_data);
        $this->view('/dashboard/addSubscriber',[],'Add Subscriber');
        $this->view->render();
    }
}
?>