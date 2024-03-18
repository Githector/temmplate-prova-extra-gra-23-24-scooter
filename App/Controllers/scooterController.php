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

        $array = explode(".", $_FILES['img']['name']);
        $extension = $array[count($array) - 1];
       
        $nameImg = "scooter - " . uniqid() .  "." . $extension; //nom complert de la imatge

        $src = $_FILES['img']['tmp_name']; //ruta temporal de la imatge
        $dst = "scooters";

        Store::store($src, $dst, $nameImg);
    }
}
