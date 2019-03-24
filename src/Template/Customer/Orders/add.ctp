<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cinemas'), ['controller' => 'Cinemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cinema'), ['controller' => 'Cinemas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="orders form large-9 medium-8 columns content">
    <?= $this->Form->create($order) ?>
    <fieldset>
        <legend><?= __('Add Order') ?></legend>
        <?php
            echo $this->Form->control('pieces');
            echo $this->Form->control('user_id', ['type' => 'hidden', 'value' => $user['id']]);
        ?>
        <div class="input select">
            <label for="cinema-id">Cinema</label>
            <select name="cinema_id" id="cinema-id">
            <?php foreach( $cinemas as $cinema ): ?>
                <option value="<?php echo $cinema['id'] ?>"><?php echo $cinema['movie']->title . ' (' . $cinema['name'] . ')' ?></option>
            <?php endforeach; ?>
            </select>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
