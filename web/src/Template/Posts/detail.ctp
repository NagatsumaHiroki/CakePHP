<?php
    $this->assign('title', 'Blog Detail')
?>
<?php foreach($posts as $post) :?>
    <h1>
        <?= h($post->title) ?>
        <?= $this->Html->link('Back', ['action'=> 'index'],['class' =>['pull-right','fs12']]) ?>
    </h1>
<div><?= nl2br($post->body) ?></div>
<?php endforeach; ?>
