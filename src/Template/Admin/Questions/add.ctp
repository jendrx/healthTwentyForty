<?php
/**
  * @var \App\View\AppView $this
  */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rounds'), ['controller' => 'Rounds', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Round'), ['controller' => 'Rounds', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Indicators'), ['controller' => 'Indicators', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Indicator'), ['controller' => 'Indicators', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="questions form large-9 medium-8 columns content">
    <?= $this->Form->create($question) ?>
    <fieldset>
        <legend><?= __('Add Question') ?></legend>
        <?php
            echo $this->Form->control('category_id', ['options' => $categories]);
            echo $this->Form->control('description',['label' => 'Question']);
            echo $this->Form->control('indicators._ids', ['options' => $indicators]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>-->



<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Questions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rounds'), ['controller' => 'Rounds', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Round'), ['controller' => 'Rounds', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Indicators'), ['controller' => 'Indicators', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Indicator'), ['controller' => 'Indicators', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="questions form large-9 medium-8 columns content">
    <?= $this->Form->create($question) ?>
    <fieldset>
        <legend><?= __('Add Question') ?></legend>
        <?php
        echo $this->Form->control('category_id', ['options' => $categories]);
        echo $this->Form->control('description',['label' => 'Question']);
        $id = 0;
        foreach ($indicators as $indicator):
            echo '<div class="row">';
            echo '<p>'.$indicator->description.'</p>';
            echo $this->Form->control('indicators.'.$id.'.id', ['value' => $indicator->id]);
            echo '<div class="large-4 columns">';
            echo $this->Form->control('indicators.'.$id.'._joinData.default_min_value');
            echo '</div>';
            echo '<div class="large-4 columns">';
            echo $this->Form->control('indicators.'.$id.'._joinData.default_value');
            echo '</div>';
            echo '<div class="large-4 columns">';
            echo $this->Form->control('indicators.'.$id.'._joinData.default_max_value');
            echo '</div>';
            echo '</div>';
            $id = $id + 1;
        endforeach;
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
