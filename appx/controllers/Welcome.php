<?php
use Restserver\Libraries\REST_Controller;
require(APPPATH.'/libraries/REST_Controller.php');
require(APPPATH.'/libraries/Format.php');
class Welcome extends REST_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('book_model');
    }
    //API - create a new book item in database.
    function adddata_post(){
//        var_dump(json_decode(file_get_contents("php://input"),true));
        $data = $this->post();
        echo json_encode($data);
//        var_dump($data);
   }
}