<?php
/**---------------------------------
productive : Pouria Yazdanapanah
--------------------------------- **/
namespace App\Http;

use App\Http\Config;
class kernel
{
    protected $controller="HomeControllers";
    protected $action = "index";
    protected $params= [];
//
//    /**
//     * kernel constructor.
//     */
    public function __construct ()
    {
        $url = $this->parseUrl(); //save url into array
        $state = ucfirst($url[0])."Controllers"; // upper first letter


        if (file_exists(Config::CONTROLLERS_PATH.$state.".php")) //for connection to controller
        {
            $this->controller = $state;
            unset($url[0]);
        }


        require_once Config::CONTROLLERS_PATH.$this->controller.".php";
        $this->controller = new $this->controller;

        if(isset($url[1]))

        {
            if (method_exists($this->controller,$url[1])) //for connection to action of controller
            {
                $this->action=$url[1];
                unset($url[1]);
                $this->params = $url ? array_values($url) : [" "];
            }
        }
//
//
        call_user_func_array([$this->controller,$this->action],$this->params);
//        var_dump($url);
    }

    public function parseUrl()
    {
        if (isset($_GET['url'])){
           return explode("/",rtrim($_GET['url'],"/")); //beak the url
        }
    }
}