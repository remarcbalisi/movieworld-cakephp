<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cinema[]|\Cake\Collection\CollectionInterface $cinemas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cinema'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Movies'), ['controller' => 'Movies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Movie'), ['controller' => 'Movies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cinemas index large-9 medium-8 columns content">
    <h3><?= __('Cinemas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('movie_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_at') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cinemas as $cinema): ?>
            <tr>
                <td><?= $this->Number->format($cinema->id) ?></td>
                <td><?= h($cinema->name) ?></td>
                <td><?= $cinema->has('movie') ? $this->Html->link($cinema->movie->title, ['controller' => 'Movies', 'action' => 'view', $cinema->movie->id]) : '' ?></td>
                <td><?= h($cinema->created_at) ?></td>
                <td><?= h($cinema->modified_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cinema->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cinema->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cinema->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cinema->id)]) ?>
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
