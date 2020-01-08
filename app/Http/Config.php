<?php
/**
 * Created by PhpStorm.
 * User: Pouria Yazdanpanah
 * Date: 12/19/2019
 * Time: 8:40 PM
 */

namespace App\Http;

class Config
{
    const CONTROLLERS_PATH = "../app/Controllers/"; // this path is for connecting the kernel to  our controller...
    const RESOURCES_PAHT ="../resources/";//this path is for connecting the controller to  our view...
    const HOME_PATH="../resources/layout/index.php"; // this path for connecting the controller to layout...
    const SINGUP_PATH="../resources/layout/singup.php";//this path for connecting the controller to layout...
    const TEACHER_PATH="../resources/layout/Tlayout.php";
    const STUDENT_PATH="../resources/layout/Slayout.php";
    const STORAGE="../public/img/";

    const RESTOR="../img/";


    const HOSTNAME="127.0.0.1";
    const USERNAME="root";
    const PASSWORD= "";
    const DATABASE="comment";

}