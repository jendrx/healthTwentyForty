<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="form large-6 medium-4 large-offset-3 medium-offset-4 columns " style="margin: 0 auto">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Register') ?></legend>
        <?php
        echo $this->Form->control('username', ['type' => 'text']);
        echo $this->Form->control('password');
        /*echo $this->Form->control('role');
        echo $this->Form->control('studies._ids', ['options' => $studies]);*/
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>


<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Studies'), ['controller' => 'Studies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Study'), ['controller' => 'Studies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            /*echo $this->Form->control('role');
            echo $this->Form->control('studies._ids', ['options' => $studies]);*/
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>-->


