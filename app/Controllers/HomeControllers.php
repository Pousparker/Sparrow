<?php
/**
 * Created by PhpStorm.
 * User: Pouria Yazdanpanah
 * Date: 12/19/2019
 * Time: 1:26 PM
 */

use App\Http\BaseControllers;

class HomeControllers extends BaseControllers
{

    public function index() //for connecting to view
    {
      return parent::view("home/index",['']);
    }
    public function register()
    {
        return parent::view("singup/index",['']);
    }

}
