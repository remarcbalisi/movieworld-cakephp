<?php
$this->layout = false;
$cakeDescription = 'Robinson\'s Movie World ';
?>

<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('custom.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('home.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body class="home">

<h1>Cinema 1</h1>
<?php foreach( $cinemas as $cinema ): ?>
    <?php if( $cinema->name == 'Cinema 1' ): ?>
        <h3><?= h($cinema->movie->title) ?></h3>
        <img style="max-width:50%;" src="/../files/Movies/image/<?php echo $cinema->movie->image; ?>" alt="">
        <br>
        <p>Screen time : <?= h($cinema->movie->screen_time) ?></p>
        <p>Genre: <?= h($cinema->movie->genre) ?></p>
        <p>Duration: <?= h($cinema->movie->duration) ?></p>
        <p>Price: <?= $this->Number->format($cinema->movie->price) ?></p>
    <?php endif; ?>
<?php endforeach; ?>


<h1>Cinema 2</h1>
<?php foreach( $cinemas as $cinema ): ?>
    <?php if( $cinema->name == 'Cinema 2' ): ?>
        <h3><?= h($cinema->movie->title) ?></h3>
        <img style="max-width:50%;" src="/../files/Movies/image/<?php echo $cinema->movie->image; ?>" alt="">
        <br>
        <p>Screen time : <?= h($cinema->movie->screen_time) ?></p>
        <p>Genre: <?= h($cinema->movie->genre) ?></p>
        <p>Duration: <?= h($cinema->movie->duration) ?></p>
        <p>Price: <?= $this->Number->format($cinema->movie->price) ?></p>
    <?php endif; ?>
<?php endforeach; ?>

</body>
</html>
