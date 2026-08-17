<?php
// Product edit placeholder
?>
<section class="product-form">
  <h1>Editar producto</h1>
  <form method="post" action="/products/edit">
    <label for="product-name">Nombre</label>
    <input id="product-name" name="name" type="text" required />
    <label for="product-sku">SKU</label>
    <input id="product-sku" name="sku" type="text" required />
    <button type="submit">Actualizar</button>
  </form>
</section>
