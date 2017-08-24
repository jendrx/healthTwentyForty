<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Indicators'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="indicators form large-9 medium-8 columns content">
    <?= $this->Form->create($indicator) ?>
    <fieldset>
        <legend><?= __('Add Indicator') ?></legend>
        <?php
            echo $this->Form->control('description');
            echo $this->Form->control('questions._ids', ['options' => $questions]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
