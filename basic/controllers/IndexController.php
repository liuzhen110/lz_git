<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Content;
use yii\data\Pagination;

class IndexController extends Controller
{
    //首页显示
    public function actionIndex()
    {
        $content = new content();
        $arr = $content->find();
        $pages = new Pagination([
            'totalCount' => $arr->count(),
            'pageSize' => 3   //每页显示条数
        ]);
        $models = $arr->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        return $this->render('index', [
            'models' => $models,
            'pages' => $pages
        ]);
    }
  //添加
    public function actionAdd()
    {
        $request = yii::$app->request;
        if ($request->isPost) {
            $content_name = $request->post("content_name");
            $content = new content();
            $content->content_name = $content_name;
            $content->save();
            echo "<script>alert('留言成功');location.href='/?r=index/index';</script>";
        }
    }
    //删除
    public function actionDel(){
        $request = yii::$app->request;
        if ($request->isGet) {
            $id = $request->get("id");
            $content = new content();
            $result=$content->find()->where("content_id=$id")->one();
            $result->delete();
            echo "<script>alert('删除成功');location.href='/?r=index/index';</script>";
        }
    }
    //修改
    public function actionUpd(){
        $request = yii::$app->request;
        if ($request->isGet) {
            $id = $request->get("id");
            return $this->render('upd',['id'=>$id]);
        }
    }
    //修改
    public function actionUpds(){
        $request = yii::$app->request;
        if ($request->isPost) {
            $content = new content();
            $content_id = $request->post("content_id");
            $content_name = $request->post("content_name");
            $result=$content->find()->where("content_id=$content_id")->one();
            $result->content_name=$content_name;
            $result->save();
            echo "<script>alert('修改成功');location.href='/?r=index/index';</script>";
        }
    }
}



