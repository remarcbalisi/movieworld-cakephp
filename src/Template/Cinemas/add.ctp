<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cinema $cinema
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cinemas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Movies'), ['controller' => 'Movies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Movie'), ['controller' => 'Movies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cinemas form large-9 medium-8 columns content">
    <?= $this->Form->create($cinema) ?>
    <fieldset>
        <legend><?= __('Add Cinema') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('movie_id', ['options' => $movies]);
            echo $this->Form->control('created_at', ['empty' => true]);
            echo $this->Form->control('modified_at', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
