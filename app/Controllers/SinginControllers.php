<?php
/**
 * Created by PhpStorm.
 * User: Pouria Yazdanpanah
 * Date: 12/21/2019
 * Time: 11:05 PM
 */
use App\Http\BaseControllers;
use App\Model\DB;
use App\Http\Request;
use App\Http\Config;
class SinginControllers extends BaseControllers
{
    public function post()
    {

        $username = Request::get_param('usr');
        $password = Request::password('pws'); //ingection

        $cmp=DB::table('users')
            ->where("username","=",$username)
                ->andwhere("password","=",$password)
                    ->get();

        if( $cmp != array())
        {
            session_start();
            $_SESSION['ID'] = $cmp[0]["ID"];
            if ( $cmp[0]["access"]=="teacher"){

                return $this->redirect("../teacher/index");
            }
            else{
                return $this->redirect("../student/image");
            }



        }
        else
        {
          return $this->redirect("../home/register");
        }
    }



}