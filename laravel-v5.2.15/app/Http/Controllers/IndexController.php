<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function Index(){
       $video_list = DB::table('dz_video')->orderBy('video_weight','desc')->limit(2)->get();//视频列表
       $diary_list_all = DB::table('dz_diary')->join('dz_user','dz_diary.user_id',' =' ,'dz_user.user_id')->orderBy('diary_addtime','asc')->limit(4)->get();//房东日记
       $diary_list_one = DB::table('dz_diary')->join('dz_user','dz_diary.user_id',' =' ,'dz_user.user_id')->orderBy('diary_addtime','desc')->limit(1,4)->first();//房东日记
       $comment_list_one = DB::table('dz_comment')->join('dz_user','dz_comment.user_id',' =' ,'dz_user.user_id')->orderBy('com_id','desc')->limit(1,4)->first();//房客点评
       $comment_list_all = DB::table('dz_comment')->join('dz_user','dz_comment.user_id',' =' ,'dz_user.user_id')->orderBy('com_id','asc')->limit(4)->get();//房客点评
       $house_list = DB::table('dz_houseinfo')->join('dz_user' ,'dz_houseinfo.user_id','=','dz_user.user_id')->orderBy('houseinfo_weight','desc')->limit(9)->get();//房屋详情
       foreach($house_list as $k=>$v){
           $houseinfo_id = $v['houseinfo_id'];
           $house_list[$k]['dz_pricle'] = DB::table('dz_pricle')->where("houseinfo_id", $houseinfo_id)->first();
       }
        return view('Index/index',
            [
                'video_list'=>$video_list,//视频列表
                'diary_list_all'=> $diary_list_all,//房东日记取4条做循环
                'diary_list_one'=>$diary_list_one//房东日记取一条做首个
                ,'comment_list_one'=>$comment_list_one,//房客点评取一条做首个
                'comment_list_all'=>$comment_list_all,//房客点评取4条做循环
                'house_list'=>$house_list
            ]);
    }
}
