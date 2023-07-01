<html>

<head>
    <?= $this->include('layouts/head') ?>
</head>

<body>
    <?= $this->include('layouts/navbar') ?>

    <?= $this->include('layouts/sidebar') ?>

    <?= $this->renderSection('content') ?>

    <?= $this->include('layouts/footer') ?>

    <?= $this->renderSection('scripts') ?>

    <?= $this->include('layouts/scripts') ?>
</body>

</html>