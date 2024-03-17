<?php 

    class itemsController extends Controller{
            
            public function index(){
                $params = null;

                $this->render("items/index", $params, "site");
            }


    
}
?>