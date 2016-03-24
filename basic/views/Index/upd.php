<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<?php $form = ActiveForm::begin([
    'action' => ['index/upds'],
    'method'=>'post',
]); ?>
    <input type="hidden" value="<?php echo $id ?>" name="content_id"/>
    请留言：<input type="text" name="content_name"/>
    <input type="submit" value="提交"/>
<?php ActiveForm::end(); ?>
    <hr/>

<?php
use yii\widgets\LinkPager;
?>