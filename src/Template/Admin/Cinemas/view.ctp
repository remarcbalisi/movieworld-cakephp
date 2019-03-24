<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cinema $cinema
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cinema'), ['action' => 'edit', $cinema->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cinema'), ['action' => 'delete', $cinema->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cinema->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cinemas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cinema'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Movies'), ['controller' => 'Movies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Movie'), ['controller' => 'Movies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cinemas view large-9 medium-8 columns content">
    <h3><?= h($cinema->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($cinema->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Movie') ?></th>
            <td><?= $cinema->has('movie') ? $this->Html->link($cinema->movie->title, ['controller' => 'Movies', 'action' => 'view', $cinema->movie->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cinema->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($cinema->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified At') ?></th>
            <td><?= h($cinema->modified_at) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Orders') ?></h4>
        <?php if (!empty($cinema->orders)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Code') ?></th>
                <th scope="col"><?= __('Pieces') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Cinema Id') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col"><?= __('Modified At') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cinema->orders as $orders): ?>
            <tr>
                <td><?= h($orders->id) ?></td>
                <td><?= h($orders->code) ?></td>
                <td><?= h($orders->pieces) ?></td>
                <td><?= h($orders->user_id) ?></td>
                <td><?= h($orders->cinema_id) ?></td>
                <td><?= h($orders->created_at) ?></td>
                <td><?= h($orders->modified_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Orders', 'action' => 'view', $orders->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Orders', 'action' => 'edit', $orders->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Orders', 'action' => 'delete', $orders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orders->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
