<?php
// Landing page scaffold view
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DASSO | Protección y conexión inteligente</title>
    <link rel="stylesheet" href="assets/css/design-system/design-system.css" />
</head>
<body>
  <?php include __DIR__ . '/../components/header.html'; ?>

  <main>
    <?php include __DIR__ . '/../components/hero.html'; ?>
    <?php include __DIR__ . '/../components/platform-showcase.html'; ?>
    <?php include __DIR__ . '/../components/solutions.html'; ?>
    <?php include __DIR__ . '/../components/product-categories.html'; ?>
    <?php include __DIR__ . '/../components/product-smart.html'; ?>
    <?php include __DIR__ . '/../components/product-assistance.html'; ?>
    <?php include __DIR__ . '/../components/how-it-works.html'; ?>
    <?php include __DIR__ . '/../components/benefits.html'; ?>
    <?php include __DIR__ . '/../components/contact-cta.html'; ?>
  </main>

  <?php include __DIR__ . '/../components/footer.html'; ?>
</body>
</html>
