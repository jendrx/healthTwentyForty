<?php
/**
 * Created by PhpStorm.
 * User: rom
 * Date: 8/23/17
 * Time: 2:18 PM
 */?>
<div class="form large-4 medium-2 large-offset-4 medium-offset-5 columns " style="margin: 0 auto">
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        <div class="row">
            <?php
            echo $this->Form->control('username', ['type' => 'text']);
            echo $this->Form->control('password');
            ?>
        </div>
        <?= $this->Form->button(__('Login'),['class' => 'button small']) ?>
        <?= $this->Form->end() ?>
    </fieldset>
</div>


