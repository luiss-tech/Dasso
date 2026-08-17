<?php
// Benefits page - expanded content
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Beneficios — DASSO</title>
  <link rel="stylesheet" href="/Pagina/public/assets/css/design-system/design-system.css" />
</head>
<body>
  <?php include __DIR__ . '/../components/header.html'; ?>

  <main>
    <?php include __DIR__ . '/../components/benefits.html'; ?>

    <div class="container">
      <section class="section-panel">
        <div class="section-header">
          <div>
            <h2 class="section-title">Beneficios detallados</h2>
            <p class="section-description">Más información sobre ROI, seguridad y mejoras operativas para su organización.</p>
          </div>
        </div>

        <div class="benefits-grid">
          <article class="feature-card">
            <h3>Reducción de tiempos de respuesta</h3>
            <p>Procesos automatizados y menos falsos positivos, lo que reduce tiempos y costes operativos.</p>
          </article>
          <article class="feature-card">
            <h3>Mayor confianza de usuarios</h3>
            <p>Experiencias consistentes y seguras que mejoran la adopción entre empleados y clientes.</p>
          </article>
        </div>
      </section>
    </div>

  </main>

  <?php include __DIR__ . '/../components/footer.html'; ?>
</body>
</html>
