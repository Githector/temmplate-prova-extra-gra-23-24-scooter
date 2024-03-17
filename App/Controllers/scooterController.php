<?php
include_once(__DIR__ . "/../Models/Scooter.php");
include_once(__DIR__ . "/../Models/Rent.php");
include_once(__DIR__ . "/../Core/Store.php");

use Intervention\Image\ImageManager;

class scooterController extends Controller
{

    public function index()
    {


        $this->render("scooter/index", $params, "site");
    }



    public function destroy()
    {
    }

    public function store()
    {
    }
}
