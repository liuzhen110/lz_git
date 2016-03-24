<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<?php $form = ActiveForm::begin([
    'action' => ['index/add'],
    'method'=>'post',
]); ?>

请留言：<input type="text" name="content_name"/>
<input type="submit" value="提交"/>
<?php ActiveForm::end(); ?>
<hr/>

<?php
use yii\widgets\LinkPager;
    ?>
   <table>
       <tr>
           <td>编号</td>
           <td>内容</td>
           <td>操作</td>
       </tr>
       <?php foreach($models as $k=>$v){?>
       <tr>
           <td><?php echo $v['content_id']?></td>
           <td><?php echo $v['content_name']?></td>
           <td><a href="/?r=index/del&id=<?php echo $v['content_id']?>">删除</a><a href="/?r=index/upd&id=<?php echo $v['content_id']?>">修改</a></td>
       </tr>
       <?php }?>
   </table>
<?php
echo LinkPager::widget([
    'pagination' => $pages,
]);
?>


