<?php
// Soluciones page - expanded content
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Soluciones — DASSO</title>
  <link rel="stylesheet" href="/Pagina/public/assets/css/design-system/design-system.css" />
</head>
<body>
  <?php include __DIR__ . '/../components/header.html'; ?>

  <main>
    <?php include __DIR__ . '/../components/solutions.html'; ?>

    <div class="container">
      <section class="section-panel">
        <div class="section-header">
          <div>
            <h2 class="section-title">Detalles de las soluciones</h2>
            <p class="section-description">Información ampliada sobre casos de uso, integraciones y modelos de despliegue orientados a empresas.</p>
          </div>
        </div>

        <div class="benefits-grid">
          <article class="feature-card">
            <h3>Integración empresarial</h3>
            <p>Conectores y APIs que permiten integrar la plataforma con sistemas de gestión existentes, IAM y plataformas de incidentes.</p>
          </article>
          <article class="feature-card">
            <h3>Operaciones seguras</h3>
            <p>Políticas de acceso, registros auditables y flujos de respuesta para minimizar riesgos y acelerar resolución.</p>
          </article>
          <article class="feature-card">
            <h3>Escalabilidad</h3>
            <p>Arquitectura diseñada para escala regional y global, con opciones de despliegue híbrido y multi-tenant.</p>
          </article>
        </div>
      </section>
    </div>

  </main>

  <?php include __DIR__ . '/../components/footer.html'; ?>
</body>
</html>
