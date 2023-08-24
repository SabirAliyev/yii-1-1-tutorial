<?php

class DashboardController extends Controller
{
    public $pageTitle = "This is the pag title";
    public function actionHome(){
        // echo 'home is here'.$this->pageTitle;
        // $this->render('view');

        $emails = ['test@gmail.com', 'johndoe@gmail.com'];
        $this->render('view', ['emails'=>$emails]);
    }

    public function message($msg){
        return $msg;
    }
}