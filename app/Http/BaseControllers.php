<?php
/**
 * Created by PhpStorm.
 * User: Pouria Yazdanpanah
 * Date: 12/19/2019
 * Time: 11:37 PM
 */

namespace App\Http;
use App\Http\Config;

class BaseControllers //this class for routing view
{
    public function view($adrress,array $data)
    {
        return require_once Config::RESOURCES_PAHT.$adrress.".php";
    }


    public function home($content="")
    {
        $get_file = file_get_contents(Config::HOME_PATH);
        print str_replace("{content}",$content,$get_file);
    }
    public function singup($content="")
    {
        $get_file = file_get_contents(Config::SINGUP_PATH);
        print str_replace("{content}",$content,$get_file);
    }

    public function teacher($content="")
    {
        $get_file = file_get_contents(Config::TEACHER_PATH);
        print str_replace("{content}",$content,$get_file);
    }
    public function student($content="")
    {
        $get_file = file_get_contents(Config::STUDENT_PATH);
        print str_replace("{content}",$content,$get_file);
    }
    public function redirect ($path)
    {
        return header("location:{$path}");
    }


}
