<?php
// User edit placeholder
?>
<section class="user-form">
  <h1>Editar usuario</h1>
  <form method="post" action="/users/edit">
    <label for="user-name">Nombre</label>
    <input id="user-name" name="name" type="text" required />
    <label for="user-email">Correo</label>
    <input id="user-email" name="email" type="email" required />
    <button type="submit">Actualizar</button>
  </form>
</section>
