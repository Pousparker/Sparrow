<?php
/**
 * Created by PhpStorm.
 * User: Pouria Yazdanpanah
 * Date: 12/21/2019
 * Time: 1:39 PM
 */

namespace App\Http;

class Request
{
    public static function get_param($param)
    {
        if (isset($_POST[$param])){
            return $_POST[$param];
        }
    }
    public static function password($password)
    {
        if(isset($_POST[$password])){
            return md5(strip_tags(trim($_POST[$password])));
        }
    }
    public static function mode($access)
    {
       if (isset($_POST[$access]))
       {
           if ($_POST[$access]=="student"){
               return $_POST[$access];
           }
           else{
               return $_POST[$access];

           }
       }
    }






}