<?php
// Productos page - expanded content
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Productos — DASSO</title>
  <link rel="stylesheet" href="/Pagina/public/assets/css/design-system/design-system.css" />
</head>
<body>
  <?php include __DIR__ . '/../components/header.html'; ?>

  <main>
    <?php include __DIR__ . '/../components/product-categories.html'; ?>
    <?php include __DIR__ . '/../components/product-smart.html'; ?>
    <?php include __DIR__ . '/../components/product-assistance.html'; ?>

    <div class="container">
      <section class="section-panel">
        <div class="section-header">
          <div>
            <h2 class="section-title">Catálogo y especificaciones</h2>
            <p class="section-description">Fichas técnicas resumidas, casos de uso por producto y opciones de integración.</p>
          </div>
        </div>

        <div class="product-grid">
          <article class="product-card">
            <div class="product-image-placeholder">[IMAGE]</div>
            <h3>Etiqueta inteligente — QR Dinámico</h3>
            <p>Soporta actualizaciones en tiempo real y vinculaciones seguras con la plataforma.</p>
          </article>
          <article class="product-card">
            <div class="product-image-placeholder">[IMAGE]</div>
            <h3>NFC Corporativo</h3>
            <p>Hardware certificado para entornos críticos con gestión centralizada de permisos.</p>
          </article>
        </div>
      </section>
    </div>

  </main>

  <?php include __DIR__ . '/../components/footer.html'; ?>
</body>
</html>
