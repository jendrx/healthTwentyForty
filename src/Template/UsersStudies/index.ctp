<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\UsersStudy[]|\Cake\Collection\CollectionInterface $usersStudies
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Users Study'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Studies'), ['controller' => 'Studies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Study'), ['controller' => 'Studies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usersStudies index large-9 medium-8 columns content">
    <h3><?= __('Users Studies') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('study_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usersStudies as $usersStudy): ?>
            <tr>
                <td><?= $this->Number->format($usersStudy->id) ?></td>
                <td><?= $usersStudy->has('user') ? $this->Html->link($usersStudy->user->id, ['controller' => 'Users', 'action' => 'view', $usersStudy->user->id]) : '' ?></td>
                <td><?= $usersStudy->has('study') ? $this->Html->link($usersStudy->study->id, ['controller' => 'Studies', 'action' => 'view', $usersStudy->study->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $usersStudy->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usersStudy->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usersStudy->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usersStudy->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
