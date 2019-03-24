<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Movie $movie
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Movie'), ['action' => 'edit', $movie->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Movie'), ['action' => 'delete', $movie->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movie->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Movies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Movie'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cinemas'), ['controller' => 'Cinemas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cinema'), ['controller' => 'Cinemas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="movies view large-9 medium-8 columns content">
    <h3><?= h($movie->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($movie->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Screen Time') ?></th>
            <td><?= h($movie->screen_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Genre') ?></th>
            <td><?= h($movie->genre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Duration') ?></th>
            <td><?= h($movie->duration) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td>
                <?= $this->Html->link('../files/Movies/image/' . $movie->image) ?>
                <img style="max-width:50%;" src="/../files/Movies/image/<?php echo $movie->image; ?>" alt="">
            </td>
            <!-- echo $this->Html->link('../files/example/image/' . $entity->photo_dir . '/' . $entity->photo); -->
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($movie->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($movie->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($movie->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified At') ?></th>
            <td><?= h($movie->modified_at) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Casts') ?></h4>
        <?= $this->Text->autoParagraph(h($movie->casts)); ?>
    </div>
    <div class="row">
        <h4><?= __('Director') ?></h4>
        <?= $this->Text->autoParagraph(h($movie->director)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($movie->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Cinemas') ?></h4>
        <?php if (!empty($movie->cinemas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Movie Id') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col"><?= __('Modified At') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($movie->cinemas as $cinemas): ?>
            <tr>
                <td><?= h($cinemas->id) ?></td>
                <td><?= h($cinemas->name) ?></td>
                <td><?= h($cinemas->movie_id) ?></td>
                <td><?= h($cinemas->created_at) ?></td>
                <td><?= h($cinemas->modified_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cinemas', 'action' => 'view', $cinemas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cinemas', 'action' => 'edit', $cinemas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cinemas', 'action' => 'delete', $cinemas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cinemas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
