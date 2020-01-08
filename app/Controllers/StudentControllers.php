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

        return $this->view("student/comment",['re'=>$image,'id'=>$ID]);

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
}