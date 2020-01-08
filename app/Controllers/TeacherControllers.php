<?php

use App\Http\BaseControllers;
use App\Model\DB;
use App\Http\Request;
use App\Http\Config;
class TeacherControllers extends BaseControllers
{
    public function index()
    {
        $this->view("teacher/index",[""]);

    }

    public function image ($ID)
    {

        session_start();

        $session = $_SESSION['ID'];
        $results =DB::table("comments")
                    ->where('user_id','=',$session)
                        ->get();
        $person=DB::table("users")
                    ->where('ID','=',$session)
                        ->get();
        $this->view("teacher/image",['results'=>$results,'person'=>$person]);

    }

    public function upload()
    {
                session_start();

        if (move_uploaded_file($_FILES['items']['tmp_name'], Config::STORAGE . $_FILES['items']['name']))
        {
                $field = Config::RESTOR. $_FILES['items']['name'];
                $session = $_SESSION['ID'];
                $caption= Request::get_param('text');

                $records = [$field,$session,$caption];
                $fields = ['image','user_id','caption'];

                DB::table('comments')->insert($fields , $records);

                $this->redirect("image");

        }
        else {
            print " was uploaded";

        }

    }
    public function get()
    {
            $this->view("teacher/get",['']);
    }
    public function delete($id)
    {

        DB::table("comments")->delete("ID",$id);
        $this->redirect("../image");
    }
}