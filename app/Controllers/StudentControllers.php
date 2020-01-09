<?php

use App\Http\BaseControllers;
use App\Model\DB;
use App\Http\Request;
use App\Http\Config;

class StudentControllers extends BaseControllers
{
    public function index()
    {
        return $this->view("student/index",['']);
    }
    public function comment($ID)
    {
        $image=DB::table("comments")->where("ID","=",$ID)->get();
        $reply=DB::table("reply")->where("com_id","=",$ID)->get();
        return $this->view("student/comment",['re'=>$image,'id'=>$ID,'reply'=>$reply]);

    }
    public function image ( )
    {
        $results =DB::table("comments")->get();
        return $this->view("student/image",['result'=>$results]);
    }
    public function message($ID)
    {
        $message=Request::get_param('text');

        DB::table('comments')->update("comment",$message,$ID);
        return $this->redirect("../comment/{$ID}");
    }
    public function replay($ID)
    {
        session_start();

        $iduser=$_SESSION['ID'];
        $reply=Request::get_param('reply');
        $field=['com_id','user_id','replay'];
        $record=[$ID,$iduser,$reply];

        DB::table('reply')->insert($field,$record);

        return $this->redirect("../comment/{$ID}");
    }
}
