<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users Studies'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Studies'), ['controller' => 'Studies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Study'), ['controller' => 'Studies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usersStudies form large-9 medium-8 columns content">
    <?= $this->Form->create($usersStudy) ?>
    <fieldset>
        <legend><?= __('Add Users Study') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('study_id', ['options' => $studies, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
