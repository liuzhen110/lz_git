<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class ContentController extends Controller
{
    //主页显示
    public function Index()
    {
        $list =DB::table('content')->get();
        return view('Index/index',['list'=>$list]);
    }
    public function add(){
        $content_name = $_GET['content_name'];
        DB::table('content')->insert(['content_name' => $content_name]);
        echo "<script>alert('留言成功');location.href='content';</script>";
    }
    //删除
    public function Del(){
        $comment_id=$_GET['id'];
        DB::table('content')->where('content_id','=',$comment_id)->delete();
        echo "<script>alert('删除成功');location.href='content';</script>";
    }
    //修改
    public function Upd(){
        $content_id=$_GET['id'];
        return view('Index/upd',['content_id'=>$content_id]);
    }
    //修改
    public function Upds(){;
        $content_id=$_GET['content_id'];
        $content_name = $_GET['content_name'];
        DB::table('content')
            ->where('content_id',$content_id)
            ->update(['content_name' => $content_name]);
        echo "<script>alert('修改成功');location.href='content';</script>";
    }
 }