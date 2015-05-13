<h2>ユーザー一覧</h2>
<table class="table table-striped table-bordered table-hover">
   
<?php foreach ($users as $user): ?>
   <tr>
        <td><?php echo $this->Html->link($user['User']['name'],array('action'=>'search',$user['User']['id'])); ?></td>
   </tr>
<?php endforeach; ?>
</table>
<?php 
echo $this->Form->create('User', array('action'=>'add'));
echo $this->Form->input('name', array('rows'=>1));
echo $this->Form->submit('ユーザーを追加する',array('class'=>'btn btn-primary')
);
?>
