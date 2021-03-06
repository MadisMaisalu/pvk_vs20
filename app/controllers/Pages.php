<?php


class Pages extends Controller
{

    /**
     * Pages constructor.
     */
    public function __construct()
    {
        $this->pagesModel = $this->model('Page');
    }

    public function index(){
        // echo 'index method is loaded<br>';
        $data = array(
            'title' => 'Welcome to Pages',
            'content' => 'Pages index view is loaded by MVC'
        );
        $this->view('pages/index', $data);
    }

    public function about(){
        //model test
        $this->pagesModel->addUser();
        echo 'user data is saved<br>';
        // echo 'about method is loaded<br>';
        $data = array('content' => 'Pages about view is loaded by MVC');
        $this->view('pages/about', $data);
    }
}