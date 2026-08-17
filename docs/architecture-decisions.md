# Architecture Decision Records

Este archivo recoge decisiones de arquitectura relevantes que deben ser útiles a futuro.

## ADR-001: Protección de rutas privadas y sesión

- **Qué decisión se tomó:** se definió un router con middleware por ruta y un `AuthMiddleware` que valida sesión activa.
- **Por qué se tomó:** para separar autenticación de lógica de controladores y evitar exponer contenido privado sin un control centralizado.
- **Alternativas descartadas:** usar rutas con chequeo manual en cada controlador; usar un framework completo de router. Se descartó porque generaba duplicación de validaciones y agregaba dependencia innecesaria.
- **Qué problemas evita:** accesos no autorizados, lógica de autenticación duplicada, pérdida de control en rutas privadas.
