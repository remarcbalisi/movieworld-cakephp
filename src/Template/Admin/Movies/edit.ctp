<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movie $movie
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $movie->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $movie->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Movies'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cinemas'), ['controller' => 'Cinemas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cinema'), ['controller' => 'Cinemas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="movies form large-9 medium-8 columns content">
    <?= $this->Form->create($movie, ['type'=>'file']) ?>
    <fieldset>
        <legend><?= __('Edit Movie') ?></legend>
        <img style="max-width:50%;" src="/../files/Movies/image/<?php echo $movie->image; ?>" alt="">
        <br>
        <hr>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('screen_time');
            echo $this->Form->control('genre');
            echo $this->Form->control('casts');
            echo $this->Form->control('director');
            echo $this->Form->control('description');
            echo $this->Form->control('duration');
            echo $this->Form->control('price');
            echo $this->Form->control('image', ['type'=>'file']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
