<?php
/**
 * Created by PhpStorm.
 * User: rom
 * Date: 8/22/17
 * Time: 3:43 PM
 */?>

<div class="form large-6 medium-4 large-offset-3 medium-offset-4 columns " style="margin: 0 auto">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Login') ?></legend>
        <?php
        echo $this->Form->control('username', ['type' => 'text']);
        echo $this->Form->control('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

