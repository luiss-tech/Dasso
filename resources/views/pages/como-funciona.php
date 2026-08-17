<?php
// How it works page - expanded content
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Cómo funciona — DASSO</title>
  <link rel="stylesheet" href="/Pagina/public/assets/css/design-system/design-system.css" />
</head>
<body>
  <?php include __DIR__ . '/../components/header.html'; ?>

  <main>
    <?php include __DIR__ . '/../components/how-it-works.html'; ?>

    <div class="container">
      <section class="section-panel">
        <div class="section-header">
          <div>
            <h2 class="section-title">Flujo operativo ampliado</h2>
            <p class="section-description">Descripción técnica de los pasos de implementación, roles, y métricas de operación.</p>
          </div>
        </div>

        <div class="process-grid">
          <article class="process-step">
            <div class="process-step-number">01</div>
            <h3>Planificación</h3>
            <p>Mapeo de puntos de interés, definición de políticas y preparación de infraestructura.</p>
          </article>
          <article class="process-step">
            <div class="process-step-number">02</div>
            <h3>Despliegue</h3>
            <p>Instalación de dispositivos, configuración y sincronización con el panel central.</p>
          </article>
          <article class="process-step">
            <div class="process-step-number">03</div>
            <h3>Operación</h3>
            <p>Monitorización, alertas y optimización continua basada en datos.</p>
          </article>
        </div>
      </section>
    </div>

  </main>

  <?php include __DIR__ . '/../components/footer.html'; ?>
</body>
</html>
