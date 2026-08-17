<?php
// Demonstration page - expanded content
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Demostración — DASSO</title>
  <link rel="stylesheet" href="/Pagina/public/assets/css/design-system/design-system.css" />
</head>
<body>
  <?php include __DIR__ . '/../components/header.html'; ?>

  <main>
    <?php include __DIR__ . '/../components/platform-showcase.html'; ?>

    <div class="container">
      <section class="section-panel">
        <div class="section-header">
          <div>
            <h2 class="section-title">Demo interactiva (conceptual)</h2>
            <p class="section-description">Una vista más profunda del panel y flujos de usuario con ejemplos visuales y capturas de pantalla.</p>
          </div>
        </div>

        <div class="showcase-panel">
          <div class="device-hero">
            <div class="device-shell">
              <div class="device-frame">[INTERACTIVE MOCKUP]</div>
            </div>
          </div>
          <div class="showcase-copy">
            <h3>Explora eventos en tiempo real</h3>
            <p>Filtros, acciones y notificaciones en contexto para responder con rapidez.</p>
          </div>
        </div>
      </section>
    </div>

  </main>

  <?php include __DIR__ . '/../components/footer.html'; ?>
</body>
</html>
