<?php 

    include_once 'App/Models/Rent.php';
    include_once 'App/Models/Scooter.php';

    class rentController extends Controller{
            
            public function store(){


            }

            public function finish(){
                




            }


            public function index(){


                    $this->render("rent/index", $params, "site");
                }

            

    }

?>