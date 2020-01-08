<?php
/**
 * Created by PhpStorm.
 * User: Pouria Yazdanpanah
 * Date: 12/20/2019
 * Time: 8:16 PM
 */

use App\Http\BaseControllers;
use App\Model\DB;
use App\Http\Request;
class SingupControllers extends BaseControllers
{
    public function index()
    {
           return $this->redirect("post");
    }
    public function post()
    {
        $username = Request::get_param('usr');
        $password = Request::password('pws');
        $access_mode=Request::mode("mode");


        $fields=["username","password","access"];
        $record=[$username,$password,$access_mode];

        DB::table("users")->insert($fields,$record);
        $this->redirect("../home/register");

    }


}