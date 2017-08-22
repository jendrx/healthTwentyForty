<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\UsersStudy $usersStudy
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Users Study'), ['action' => 'edit', $usersStudy->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Users Study'), ['action' => 'delete', $usersStudy->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersStudy->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users Studies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Users Study'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Studies'), ['controller' => 'Studies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Study'), ['controller' => 'Studies', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usersStudies view large-9 medium-8 columns content">
    <h3><?= h($usersStudy->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $usersStudy->has('user') ? $this->Html->link($usersStudy->user->id, ['controller' => 'Users', 'action' => 'view', $usersStudy->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Study') ?></th>
            <td><?= $usersStudy->has('study') ? $this->Html->link($usersStudy->study->id, ['controller' => 'Studies', 'action' => 'view', $usersStudy->study->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($usersStudy->id) ?></td>
        </tr>
    </table>
</div>
