<form action="/laravel-v5.2.15/public/add" method="get">
    请留言：<input type="text" name="comtent"/><input type="submit" value="提交"/>
</form>
<hr/>
<table>
    <tr>
        <td>编号</td>
        <td>留言内容</td>
        <td>操作</td>
    </tr>
    <?php foreach($list as $k=>$v){?>
        <tr>
            <td><?php echo $v['content_id']?></td>
            <td><?php echo $v['content_name']?></td>
            <td><a href="del?id=<?php echo $v['content_id']?>">删除</a><a href="upd?id=<?php echo $v['content_id']?>">修改</a></td>
        </tr>
    <?php }?>
</table>