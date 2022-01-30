<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->css('styles.css') ?>
</head>
<body>
    <?= $this->element('my_header') ?>
    <section class="container">
        <?= $this->fetch('content')?>
    </section>
    <footer>
    </footer>
</body>
</html>
